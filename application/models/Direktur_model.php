<?php

    Class Direktur_model extends CI_model{

        public function __construct(){

            parent::__construct();

        }

        public function getDataPendaftaranJoin($dataAmbil=null){
            // ambil data agen join data agen
            if(!empty($dataAmbil)){
            // jika ada data, ambil data menurut data
                $this->db->select('*');
                $this->db->from('pendaftaran');
                $this->db->join('jamaah', 'pendaftaran.ktp = jamaah.ktp');
                $this->db->join('produk', 'produk.kode_produk = pendaftaran.kode_produk');
                $this->db->where('pendaftaran.tanggaldaftar >=', $dataAmbil['dari']);
                $this->db->where('pendaftaran.tanggaldaftar <=', $dataAmbil['sampai']);
                $result = $this->db->get()->result_array();
                return $result;
            }
            else{
               
            }

        } // end of function getDataPendaftranJoin

        public function getDataPembayaranJoin($dataAmbil=null){

            // ambil data agen join data agen
            if(!empty($dataAmbil)){
                // jika ada data, ambil data menurut data
                $this->db->select('*');
                $this->db->from('pendaftaran');
                $this->db->join('pembayaran', 'pendaftaran.kode_pendaftaran = pembayaran.kode_pendaftaran');
                $this->db->join('produk', 'produk.kode_produk = pendaftaran.kode_produk');
                $this->db->where('pembayaran.tanggal >=', $dataAmbil['dari']);
                $this->db->where('pembayaran.tanggal <=', $dataAmbil['sampai']);
                $result = $this->db->get()->result_array();
                return $result;
            }
            else{
                
            }

        } // end of function getDataPembayaranJoin

        public function getDataKeberangkatanJoin($dataAmbil=null){

            // ambil data agen join data agen
            if(!empty($dataAmbil)){
                // jika ada data, ambil data menurut data
                $this->db->select('*');
                $this->db->from('pendaftaran');
                $this->db->join('jadwal_keberangkatan', 'jadwal_keberangkatan.kode_pendaftaran = pendaftaran.kode_pendaftaran');
                $this->db->join('produk', 'produk.kode_produk = pendaftaran.kode_produk');
                $this->db->where('pendaftaran.tanggaldaftar >=', $dataAmbil['dari']);
                $this->db->where('pendaftaran.tanggaldaftar <=', $dataAmbil['sampai']);
                $result = $this->db->get()->result_array();
                return $result;
            }
            else{
                
            }

        } // end of function getDataKeberangkatanJoin

    }