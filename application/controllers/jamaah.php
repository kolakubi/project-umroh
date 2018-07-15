<?php

    Class Jamaah extends CI_Controller{

        public function __construct(){

            parent::__construct();

            // cek session
            // cek session admin yaitu level 1
            if($_SESSION['level']){
                $sessionLevel = $_SESSION['level'];
                    if($sessionLevel != 4){
                    // jika level bukan 1, redirect ke login
                    redirect('login');
                }
            }
            else{
                redirect('login');
            }

        } // => end of punction __construct

        public function index(){

            $this->load->view('jamaah/header');
            $this->load->view('jamaah/profil');
            $this->load->view('front/footer');

        }

        public function berkas(){

            $this->load->view('jamaah/header');
            $this->load->view('jamaah/berkas');
            $this->load->view('front/footer');

        }

        public function jadwal(){

            $this->load->view('jamaah/header');
            $this->load->view('jamaah/jadwal');
            $this->load->view('front/footer');

        }

    }