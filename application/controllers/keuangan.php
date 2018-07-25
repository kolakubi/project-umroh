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

            $this->load->view('keuangan/header');
            $this->load->view('keuangan/pembayaran');
            $this->load->view('front/footer');

        } // => end of function index


    } // => end of class