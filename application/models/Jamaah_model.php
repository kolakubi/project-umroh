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

        }

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

        }

    }