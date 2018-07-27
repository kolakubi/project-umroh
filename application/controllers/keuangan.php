<?php

    class Keuangan extends CI_Controller{

        public function __construct(){

            parent::__construct();

            // cek session
            // cek session keuangan yaitu level 2
            if($_SESSION['level']){
                $sessionLevel = $_SESSION['level'];
                    if($sessionLevel != 2){
                    // jika level bukan 2, redirect ke login
                    redirect('login');
                }
            }
            else{
                redirect('login');
            }

        }

        public function index(){

            $hasil = $this->keuangan_model->ambilDataKeuangan();
            $data['hasil'] = $hasil;

            $this->load->view('keuangan/header');
            $this->load->view('keuangan/pembayaran', $data);
            $this->load->view('front/footer');

        } // => end of function index

        public function statusValid($kodePendaftaran){

            $status = 1;

            $this->keuangan_model->ubahStatusPembayaran($kodePendaftaran, $status);

            redirect('keuangan/index');

        } // end of function statusValid

        public function statusTidakValid($kodePendaftaran){

            $status = 0;

            $this->keuangan_model->ubahStatusPembayaran($kodePendaftaran, $status);

            redirect('keuangan/index');

        } // end of function statusValid


    } // => end of class