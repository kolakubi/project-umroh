<?php

    class Home_model extends CI_model{

        public function ambilPaket($kodeProduk){

            $this->db->select('*');
            $this->db->from('produk');
            $this->db->join('produk_detail', 'produk_detail.kode_produk = produk.kode_produk');
            $this->db->where('produk.kode_produk', $kodeProduk);
            $hasil = $this->db->get()->row_array();
            return $hasil;

        }

    }