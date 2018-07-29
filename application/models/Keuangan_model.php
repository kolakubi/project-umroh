<?php

    class Keuangan_model extends CI_Model{

        public function __construct(){

            parent::__construct();

        }

        public function ambilDataKeuangan(){

            $this->db->select('*');
            $this->db->from('pembayaran');
            $hasil = $this->db->get()->result_array();
            return $hasil;

        } // => end of function ambilDataKeuangan

        public function ubahStatusPembayaran($kodePembayaran, $status){

            // update status pembayaran
            $this->db->set(
                array(
                    'status_pembayaran' => $status
                )
            );
            $this->db->where('kode_pembayaran', $kodePembayaran);
            $this->db->update('pembayaran');

            // ambil kode pendaftaran
            $kodePendaftaran = $this->db->get_where('pembayaran', array('kode_pembayaran' => $kodePembayaran))->row_array()['kode_pendaftaran'];

            // update status pembayaran di pendaftran
            // jika status valid
            if($status){
                $this->db->set(array('status_pembayaran' => 'Lunas'));
                $this->db->where('kode_pendaftaran', $kodePendaftaran);
                $this->db->update('pendaftaran');
            }
            // jika tidak valid
            else{
                $this->db->set(array('status_pembayaran' => 'Belum Lunas'));
                $this->db->where('kode_pendaftaran', $kodePendaftaran);
                $this->db->update('pendaftaran');
            }

            return true;

        }

    }