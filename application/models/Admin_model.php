<?php

    Class Admin_model extends CI_Model{

        public function __construct(){

            parent::__construct();

        }

        public function ambilDataProduk($kodeProduk = null){

            $this->db->select('*');
            $this->db->from('produk');
            $this->db->join('produk_detail', 'produk_detail.kode_produk = produk.kode_produk');

            // jika ada kode produk
            if($kodeProduk){
                $this->db->where('produk.kode_produk', $kodeProduk);
                $hasil = $this->db->get()->row_array();
            }
            else{
                $hasil = $this->db->get()->result_array();
            }

            return $hasil;

        } // end of funciton ambilDataProduk

        public function produkUbah($dataUbahProduk){

            // ubah table produk
            $this->db->set(
                array(
                    'nama_produk' => $dataUbahProduk['nama_produk']
                )
            );
            $this->db->where('kode_produk', $dataUbahProduk['kode_produk']);
            $this->db->update('produk');

            // ubah table produk_detail
            $this->db->set(
                array(
                    'harga' => $dataUbahProduk['harga'],
                    'hotel' => $dataUbahProduk['hotel'],
                    'hari' => $dataUbahProduk['hari'],
                    'kuota' => $dataUbahProduk['kuota']
                )
            );
            $this->db->where('kode_produk', $dataUbahProduk['kode_produk']);
            $this->db->update('produk_detail');

            return true;

        } // end of function produkUbah

        public function ambilDataAkun($username=null){

            $hasil = array();

            $this->db->select('*');
            $this->db->from('login');
            // jika ada username
            if($username){
                $this->db->where('username', $username);
                $hasil = $this->db->get()->row_array();
            }
            else{
                $hasil = $this->db->get()->result_array();
            }

            return $hasil;

        } // end of function ambilLogin

        public function cekUsername($username){

            // cek jika username ada
            $this->db->select('*');
            $this->db->from('login');
            $this->db->where('username', $username);
            $hasil = $this->db->get()->row_array();

            // jika ada
            if($hasil){
                return true;
            }

            // jika tdk ada
            return false;

        } // end of function cekUsername

        public function tambahAkun($dataDaftarAkun){

            // cek ketersediaan username
            // jika ada
            if(!$this->cekUsername($dataDaftarAkun['username'])){

                // input data ke db
                $this->db->insert('login', $dataDaftarAkun);
                return true;
            }

            return false;

        } // end of funcrion akun tambah

        public function akunUbah($dataUbahakun){

            // ubah table produk
            $this->db->set(
                array(
                    'password' => $dataUbahakun['password'],
                    'email' => $dataUbahakun['email']
                )
            );
            $this->db->where('username', $dataUbahakun['username']);
            $this->db->update('login');

            return true;

        } // end of function akunUbah

        public function ambilDataJamaah($ktp=null){

            $hasil = array();

            $this->db->select('*');
            $this->db->from('jamaah');
            // jika ada ktp
            if($ktp){
                $this->db->where('ktp', $ktp);
                $hasil = $this->db->get()->row_array();
            }
            else{
                $hasil = $this->db->get()->result_array();
            }

            return $hasil;

        } // end of function ambilDataJamaah

        public function jamaahUbah($dataBaru){

            $ktp = $dataBaru['ktp'];
            unset($dataBaru['ktp']);

            $this->db->set($dataBaru);
            $this->db->where('ktp', $ktp);
            $this->db->update('jamaah');

            return true;

        } // end of function jamaahUbah

    }