<?php

    class Keuangan_model extends CI_Model{

        public function __construct(){

            parent::__construct();

        }

        public function ambilDataKeuangan($kodePembayaran=null){

            $hasil = array();

            $this->db->select('*');
            $this->db->from('pembayaran');

            // jika ada kode pembayaran
            if($kodePembayaran){
                $this->db->where('kode_pembayaran', $kodePembayaran);
                $hasil = $this->db->get()->row_array();
            }
            // jika tidak ada kodePembayaran
            else{
                $hasil = $this->db->get()->result_array();
            } // end of cek kodePembayran
            
            return $hasil;

        } // => end of function ambilDataKeuangan

        public function ambilDataKeuanganKodeDaftar($kodePendaftaran=null){

            $hasil = array();

            $this->db->select('*');
            $this->db->from('pembayaran');

            // jika ada kode pembayaran
            if($kodePendaftaran){
                $this->db->where('kode_pendaftaran', $kodePendaftaran);
                $hasil = $this->db->get()->result_array();
            }
            // jika tidak ada kodePendaftaran
            else{
                $hasil = $this->db->get()->result_array();
            } // end of cek kodePembayran
            
            return $hasil;

        } // => end of function ambilDataKeuanganKodeDaftar

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

            
            $hasil = $this->ambilDataKeuangan($kodePembayaran);
            $dp = 0;
            $sisa = 0;
            $invoice = array();
            // ambil kodePendaftaran
            $kodePendaftaran = $hasil['kode_pendaftaran'];
            // jika status invoice = dp / sisa
            // cek apakah metode pembayaran dp
            if($hasil['invoice'] == 'dp'){
                $dp = $hasil['status_pembayaran'];
                $invoice = $this->ambilDataKeuanganKodeDaftar($kodePendaftaran);
                // ambil status invoice sisa
                foreach($invoice as $dataPembayaran){
                    if($dataPembayaran['invoice'] == 'sisa'){
                        $sisa = $dataPembayaran['status_pembayaran'];
                    }
                }
            } // end of cek status sisa

            if($hasil['invoice'] == 'sisa'){
                $sisa = $hasil['status_pembayaran'];
                $invoice = $this->ambilDataKeuanganKodeDaftar($kodePendaftaran);
                // ambil status invoice dp
                foreach($invoice as $dataPembayaran){
                    if($dataPembayaran['invoice'] == 'dp'){
                        $dp = $dataPembayaran['status_pembayaran'];
                    }
                }
            } // end of cek status dp   

            // jika invoice full
            if($hasil['invoice'] == 'full'){
                // update data ket_status pembayran di pendaftaran
                $this->db->set(
                    array('ket_status_pembayaran' => 'Lunas')
                );
                $this->db->where('kode_pendaftaran', $kodePendaftaran);
                $this->db->update('pendaftaran');
                
            } // end of cek status dp   

            // jika dp dan sisa udh valid
            if($sisa && $dp){

                // update data ket_status pembayran di pendaftaran
                $this->db->set(
                    array('ket_status_pembayaran' => 'Lunas')
                );
                $this->db->where('kode_pendaftaran', $kodePendaftaran);
                $this->db->update('pendaftaran');

            }

            return true;

        }

    }