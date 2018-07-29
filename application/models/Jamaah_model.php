<?php

    class Jamaah_model extends CI_Model{

        public function ambilDataPendaftaran($username){

            $this->db->select('*');
            $this->db->from('pendaftaran');
            $this->db->join('jamaah', 'jamaah.ktp = pendaftaran.ktp');
            $this->db->join('produk', 'produk.kode_produk = pendaftaran.kode_produk');
            $this->db->where('pendaftaran.username', $username);
            $this->db->order_by('pendaftaran.kode_pendaftaran', 'ASC');
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

            // ambil kode pendaftaran
            $kodePendaftaran = $this->db->get_where('pembayaran', array('kode_pembayaran' => $dataBuktiPembayaran['kode_pembayaran']))->row_array()['kode_pendaftaran'];

            // update data pendaftaran
            // status berkas menjadi sedang diperiksa
            $this->db->set(array(
                'status_pembayaran' => 'sedang diperiksa'
            ));
            $this->db->where('kode_pendaftaran', $kodePendaftaran);
            $this->db->update('pendaftaran');

            // update data pembayaran
            $this->db->set(array(
                'file_bukti_pembayaran' => $dataBuktiPembayaran['nama_file']
            ));
            $this->db->where('kode_pembayaran', $dataBuktiPembayaran['kode_pembayaran']);
            $this->db->update('pembayaran');

        } // => end of tambahBuktiPembayaran

        public function ambilTagihan($username){

            $this->db->select('*');
            $this->db->from('pendaftaran');
            $this->db->join('jamaah', 'jamaah.ktp = pendaftaran.ktp');
            $this->db->join('produk', 'produk.kode_produk = pendaftaran.kode_produk');
            $this->db->join('pembayaran', 'pembayaran.kode_pendaftaran = pendaftaran.kode_pendaftaran');
            $this->db->where('pendaftaran.username', $username);
            $this->db->order_by('pendaftaran.kode_pendaftaran', 'ASC');
            $hasil = $this->db->get()->result_array();
            return $hasil;

        } // =? end of function ambilTagihan

        public function ambilInvoice($kodePembayaran){

            $this->db->select('*');
            $this->db->from('pembayaran');
            $this->db->join('pendaftaran', 'pendaftaran.kode_pendaftaran = pembayaran.kode_pendaftaran');
            $this->db->join('jamaah', 'jamaah.ktp = pendaftaran.ktp');
            $this->db->join('produk', 'produk.kode_produk = pendaftaran.kode_produk');
            $this->db->where('pembayaran.kode_pembayaran', $kodePembayaran);
            $hasil = $this->db->get()->row_array();
            return $hasil;

        } // public function ambilInvoice

    }