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

        }

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

        }

    }