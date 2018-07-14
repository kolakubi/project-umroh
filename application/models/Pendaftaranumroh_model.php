<?php 

    Class Pendaftaranumroh_model extends CI_Model{

        public function __construct(){

            parent::__construct();

        }

        public function ambilProduk(){
            
            $this->db->select('*');
            $this->db->from('produk');
            $hasil = $this->db->get()->result_array();

            return $hasil;

        } //=> end of funtion ambil produk

        /////////////////////////////////////////////

        public function tambahJamaah($dataPendaftar){

            // hapus produk
            unset($produk['produk']);

            // tambah username
            $dataPendaftar['username'] = $_SESSION['username'];

            $this->db->insert('jamaah', $dataPendaftar);

        }

        public function tambahPendaftaran($dataPendaftar){

            

        }

        public function daftar($dataPendaftar){

            // insert data jamaah
            $this->tambahJamaah($dataPendaftar);

            // insert data pendaftaran
            $this->tambahPendaftaran($dataPendaftar);

        }

    } //=> end of class