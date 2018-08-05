<?php

    class Frontoffice_model extends CI_Model{


        public function ambilDataJamaah($ktp){

            $this->db->select('*');
            $this->db->from('jamaah');
            $this->db->where('ktp', $ktp);
            $hasil = $this->db->get()->row_array();
            return $hasil;

        } // => end of function ambilDataPendaftaran

        public function ambilDataPendaftaran($kodePendaftaran=null){

            $hasil = array();

            $this->db->select('*');
            $this->db->from('pendaftaran');
            $this->db->join('jamaah', 'jamaah.ktp = pendaftaran.ktp');
            $this->db->join('produk', 'produk.kode_produk = pendaftaran.kode_produk');
            $this->db->join('produk_detail', 'produk_detail.kode_produk = produk.kode_produk');
            $this->db->order_by('pendaftaran.kode_pendaftaran', 'ASC');

            // jika ada Kode Pembayaran
            if($kodePendaftaran){
                $this->db->where('pendaftaran.kode_pendaftaran', $kodePendaftaran);
                $hasil = $this->db->get()->row_array();
            }
            else{
                $hasil = $this->db->get()->result_array();
            }
            
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

            if(empty($berkasKTP)){
                $berkasKTP = array();
            }
            if(empty($berkasKK)){
                $berkasKK = array();
            }
            if(empty($berkasPassport)){
                $berkasPassport = array();
            }

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

        } // end of function updateStatusBerkas

        public function updateStatusBerkasPendaftaran($kodePendaftaran){

            $this->db->set(array(
                'ket_status_berkas' => 'valid'
            ));
            $this->db->where('kode_pendaftaran', $kodePendaftaran);
            $this->db->update('pendaftaran');

            return true;

        } // end of function updateStatusBerkas

        public function ambilPembatalan($kodePembatalan=null){

            $hasil = array();

            $this->db->select('*');
            $this->db->from('pembatalan');

            // jika ada kode pembatalan
            if($kodePembatalan){
                $this->db->where('kode_pembatalan', $kodePembatalan);
                $hasil = $this->db->get()->row_array();
            }
            // jika tidak ada kode pembatalan
            else{
                $hasil = $this->db->get()->result_array();
            }
            
            return $hasil;

        } // end of function ambilPembatalan

        public function ambilPembatalanJoin($kodePembatalan){

            $this->db->select('*');
            $this->db->from('pembatalan');
            $this->db->join('pendaftaran', 'pendaftaran.kode_pendaftaran = pembatalan.kode_pendaftaran');
            $this->db->join('jamaah', 'jamaah.ktp = pendaftaran.ktp');
            $this->db->join('pembayaran', 'pembayaran.kode_pendaftaran = pendaftaran.kode_pendaftaran');
            $this->db->where('pembatalan.kode_pembatalan', $kodePembatalan);
            $hasil = $this->db->get()->result_array();

            return $hasil;

        } // end of function ambilPembatalanJoin

        public function pembatalanApprove($kodePembatalan){

            $this->db->set('status_pembatalan', 1);
            $this->db->where('kode_pembatalan', $kodePembatalan);
            $this->db->update('pembatalan');

            return true;

        } // end of pembatalanApprove

        public function pembatalanWarisApprove($kodePembatalan, $ktpAhliWaris){

            $hasil = $this->ambilPembatalanJoin($kodePembatalan);
            $ktpAhliWaris = $hasil[0]['pewaris'];
            $kodePendaftaran = $hasil[0]['kode_pendaftaran'];

            // update status pembatalan
            $this->db->set('status_pembatalan', 1);
            $this->db->where('kode_pembatalan', $kodePembatalan);
            $this->db->update('pembatalan');

            // update status pendaftaran
            $this->db->set('ktp', $ktpAhliWaris);
            $this->db->where('kode_pendaftaran', $kodePendaftaran);
            $this->db->update('pendaftaran');

            return true;

        } // end of pembatalanApprove

        //////////////////////////////////////////////////
        //////////////////////////////////////////////////
        // j A D W A L

        public function tambahJadwal($dataKeberangkatan, $dataProdukDetail){

            // update jadwal
            $this->db->set(array('tanggal_berangkat' => $dataKeberangkatan['tanggal_berangkat']));
            $this->db->where('kode_pendaftaran', $dataKeberangkatan['kode_pendaftaran']);
            $this->db->update('jadwal_keberangkatan');

            // update kuota
            $this->db->set(array('kuota' => $dataProdukDetail['kuota']));
            $this->db->where('kode_produk', $dataProdukDetail['kode_produk']);
            $this->db->update('produk_detail');

            return true;

        }

    }// => end of class