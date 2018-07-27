<?php 

    Class Pendaftaranumroh_model extends CI_Model{

        public function __construct(){

            parent::__construct();

        }

        public function ambilProduk($kodeProduk = null){

            $hasil = array();
            $this->db->select('*');
            $this->db->from('produk');

            if($kodeProduk){
                $this->db->join('produk_detail', 'produk_detail.kode_produk = produk.kode_produk');
                $this->db->where('produk.kode_produk', $kodeProduk);
                $hasil = $this->db->get()->result_array();
                return $hasil;
            }else{
                $hasil = $this->db->get()->result_array();

            }

            return $hasil;
            
            
        } //=> end of funtion ambil produk

        public function cekJamaah($dataPendaftar){

            $hasil = $this->db->get_where('jamaah', array('ktp' => $dataPendaftar['ktp']))->row_array();

            if(count($hasil) > 0){
                return true;
            }

            return false;

        }

        /////////////////////////////////////////////

        public function tambahJamaah($dataPendaftar){

            // hapus paket
            unset($dataPendaftar['paket']);

            // tambah username
            $dataPendaftar['username'] = $_SESSION['username'];

            $this->db->insert('jamaah', $dataPendaftar);

        }

        public function tambahPendaftaran($dataPendaftar){

            // buat array baru
            // ambil data yang dibutuhkan
            $editedDataPendaftar = array(
                'username' => $dataPendaftar['username'],
                'ktp' => $dataPendaftar['ktp'],
                'kode_produk' => $dataPendaftar['paket'],
                'status_berkas_ktp' => 'tidak ada berkas',
                'status_berkas_kk' => 'tidak ada berkas',
                'status_berkas_passport' => 'tidak ada berkas',
                'status_pembayaran' => 'tidak ada berkas'
            );

            $this->db->insert('pendaftaran', $editedDataPendaftar);

        }

        public function tambahPembayaran($kodePendaftaran, $nominal){

            $this->db->insert('pembayaran', 
                array(
                    'kode_pendaftaran' => $kodePendaftaran,
                    'status_pembayaran' => 0,
                    'nominal_pembayaran' => $nominal
                )
            );

        } // => end of function tambahPembayaran

        public function daftar($dataPendaftar){

            // cek apakah jamaah sudah ada datanya

            // jika jamaah belum pernah pernah daftar
            if(!$this->cekJamaah($dataPendaftar)){

               // insert data jamaah
               $this->tambahJamaah($dataPendaftar);

            }

            // insert data pendaftaran
            $dataPendaftar['username'] = $_SESSION['username'];
            $this->tambahPendaftaran($dataPendaftar);
            // ambil kode pendaftaran baru diinput
            $kodePendaftaranBaruDiinput = $this->db->insert_id();
            // ambil harga produk
            $hargaProduk = $this->ambilProduk($dataPendaftar['paket'])[0]['harga'];

            // insert pembayaran
            $this->tambahPembayaran($kodePendaftaranBaruDiinput, $hargaProduk);

            return true;

        }

    } //=> end of class