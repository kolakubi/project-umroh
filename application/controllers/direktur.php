<?php

    class Direktur extends CI_Controller{

        public function __construct(){

            parent::__construct();

            // cek session
            // cek session direktur yaitu level 3
            if($_SESSION['level']){
                $sessionLevel = $_SESSION['level'];
                    if($sessionLevel != 3){
                    // jika level bukan 3, redirect ke login
                    redirect('login');
                }
            }
            else{
                redirect('login');
            }

        }

        public function index(){

            $this->load->view('direktur/header');
            $this->load->view('direktur/menu');
            $this->load->view('front/footer');
        }

    }