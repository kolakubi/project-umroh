<?php

    class Jamaah_model extends CI_Model{

        public function ambilDataPendaftaran($username){

            $this->db->select('*');
            $this->db->from('pendaftaran');
            $this->db->join('jamaah', 'jamaah.ktp = pendaftaran.ktp');
            $this->db->join('produk', 'produk.kode_produk = pendaftaran.kode_produk');
            $this->db->where('jamaah.username', $username);
            $hasil = $this->db->get()->result_array();
            return $hasil;

        } // =? end of function ambilDataPendaftaran

        public function tambahBerkas($dataBerkas){

            // upload berkas
            $this->db->insert('berkas_upload', $dataBerkas);

            // update data pendaftaran
            // status berkas menjadi sedang diperiksa
            $this->db->set(array(
                'status_berkas_ktp' => 'sedang diperiksa',
                'status_berkas_kk' => 'sedang diperiksa',
                'status_berkas_passport' => 'sedang diperiksa'
            ));
            $this->db->where('kode_pendaftaran', $dataBerkas['kode_pendaftaran']);
            $this->db->update('pendaftaran');

        } // => end of function tambahBerkas

        public function tambahBuktiPembayaran($dataBuktiPembayaran){

            // upload berkas
            $this->db->insert('berkas_upload', $dataBuktiPembayaran);

            // update data pendaftaran
            // status berkas menjadi sedang diperiksa
            $this->db->set(array(
                'status_pembayaran' => 'sedang diperiksa'
            ));
            $this->db->where('kode_pendaftaran', $dataBuktiPembayaran['kode_pendaftaran']);
            $this->db->update('pendaftaran');

        } // => end of tambahBuktiPembayaran

        public function ambilTagihan($username){

            $this->db->select('*');
            $this->db->from('pendaftaran');
            $this->db->join('jamaah', 'jamaah.ktp = pendaftaran.ktp');
            $this->db->join('produk', 'produk.kode_produk = pendaftaran.kode_produk');
            $this->db->join('produk_detail', 'produk_detail.kode_produk = produk.kode_produk');
            $this->db->where('jamaah.username', $username);
            $hasil = $this->db->get()->result_array();
            return $hasil;

        } // =? end of function ambilTagihan

    }