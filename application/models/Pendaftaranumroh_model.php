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
                'ktp' => $dataPendaftar['ktp'],
                'kode_produk' => $dataPendaftar['paket'],
                'status_berkas_ktp' => 'tidak ada berkas',
                'status_berkas_kk' => 'tidak ada berkas',
                'status_berkas_passport' => 'tidak ada berkas',
                'status_pembayaran' => 'tidak ada berkas'
            );

            $this->db->insert('pendaftaran', $editedDataPendaftar);

        }

        public function daftar($dataPendaftar){

            // cek apakah jamaah sudah ada datanya

            // jika jamaah sdh pernah daftar
            if($this->cekJamaah($dataPendaftar)){

                // input pendaftaran aja
                // insert data pendaftaran
                $this->tambahPendaftaran($dataPendaftar);

            }
            // jika jamaah belum pernah terdaftar
            else{
    
                // insert data jamaah
                $this->tambahJamaah($dataPendaftar);

                // insert data pendaftaran
                $this->tambahPendaftaran($dataPendaftar);

            }

            return true;

        }

    } //=> end of class