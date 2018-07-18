<?php

    class Admin_model extends CI_Model{

        public function ambilDataPendaftaran(){

            $this->db->select('*');
            $this->db->from('pendaftaran');
            $this->db->join('jamaah', 'jamaah.ktp = pendaftaran.ktp');
            $this->db->join('produk', 'produk.kode_produk = pendaftaran.kode_produk');
            $hasil = $this->db->get()->result_array();
            return $hasil;

        } // => end of function ambilDataPendaftaran

        public function ambilDataSatuBerkas($kodePendaftaran, $kodeBerkas){

            $this->db->select('*');
            $this->db->from('berkas_upload');
            $this->db->join('pendaftaran', 'pendaftaran.kode_pendaftaran = berkas_upload.kode_pendaftaran');
            $this->db->where('berkas_upload.kode_pendaftaran', $kodePendaftaran);
            $this->db->where('berkas_upload.kode_berkas', $kodeBerkas);
            $this->db->limit(1);
            $this->db->order_by('berkas_upload.kode_upload', 'DESC');
            $result = $this->db->get()->row_array();

            return $result;

        } // =? end of function ambilDataSatuBerkas

        public function ambilDataBerkas($kodePendaftaran){

            $berkasKTP = array();
            $berkasKK = array();
            $berkasPassport = array();
            $berkas = array();

            $berkasKTP = $this->ambilDataSatuBerkas($kodePendaftaran, 'berkas001');

            $berkasKK = $this->ambilDataSatuBerkas($kodePendaftaran, 'berkas002');

            $berkasPassport = $this->ambilDataSatuBerkas($kodePendaftaran, 'berkas003');

            $berkas = array(
                'ktp' => $berkasKTP,
                'kk' => $berkasKK,
                'passport' => $berkasPassport
            );

            return $berkas;
        } // end of function ambilDataBerkas

        public function updateStatusBerkas($berkas, $status, $kodePendaftaran){

            $this->db->set(array(
                $berkas => $status
            ));
            $this->db->where('kode_pendaftaran', $kodePendaftaran);
            $this->db->update('pendaftaran');

            return true;

        }

    }// => end of class