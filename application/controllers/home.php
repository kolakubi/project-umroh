<?php

    Class Home extends CI_Controller{

        public function __construct(){
            parent::__construct();

            // session here
        }

        public function cekSession(){

            if(!empty($_SESSION['username'])){
                return true;
            }

            return false;

        }

        public function index(){

            $this->load->view('front/header');
            $this->load->view('front/home');
            $this->load->view('front/footer');

        }

        public function paketshafa(){
            
            $this->load->view('front/header');
            $this->load->view('front/paketshafa');
            $this->load->view('front/footer');

        }

        public function daftarPaketShafa(){

            // jika sudah login
            if(cekSession()){
                redirect('home/daftarpaketumrah');
            }

            // belum login, redirect ke login
            redirect('login');

        }

    }