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

            if (empty($_FILES['ktp']['name'])){
                $this->form_validation->set_rules('ktp', 'Document', 'required');
            }
            // if (empty($_FILES['kk']['name'])){
            //     $this->form_validation->set_rules('kk', 'Document', 'required');
            // }
            // if (empty($_FILES['passport']['name'])){
            //     $this->form_validation->set_rules('passport', 'Document', 'required');
            // }
            
            $this->form_validation->set_message('required', '%s tidak boleh kosong');

            if(!$this->form_validation->run()){
            
                $this->load->view('jamaah/header');
                $this->load->view('jamaah/berkas');
                $this->load->view('front/footer');
                
            }
            //else{
                $ktp = $this->upload->data();
                // $kk = $this->upload->data('kk');
                // $passport = $this->upload->data('passport');

                echo '<pre>';
                print_r($ktp);
                // print_r($kk);
                // print_r($passport);
                echo '</pre>';

                echo 'xxxx';
            //}

        }

        public function jadwal(){

            $this->load->view('jamaah/header');
            $this->load->view('jamaah/jadwal');
            $this->load->view('front/footer');

        }

        public function uploadBerkas(){

            // //set form validation
			// $this->form_validation->set_rules(array(
			// 	array(
			// 		'field' => 'ktp',
			// 		'label' => 'KTP',
			// 		'rules' => 'required'
			// 	),
			// 	array(
			// 		'field' => 'kk',
			// 		'label' => 'Kartu Keluarga',
			// 		'rules' => 'required'
            //     ),
            //     array(
			// 		'field' => 'passport',
			// 		'label' => 'Passport',
			// 		'rules' => 'required'
			// 	)
            // ));
            
            // $this->form_validation->set_message('required', '%s tidak boleh kosong');

            // if(!$this->form_validation->run()){

			// 	$this->load->view('jamaah/header');
            //     $this->load->view('jamaah/berkas');
            //     $this->load->view('front/footer');
            // }
            // else{

            //     $ktp = $this->upload->data('ktp');
            //     $kk = $this->upload->data('kk');
            //     $passport = $this->upload->data('passport');

            //     echo '<pre>';
            //     print_r($ktp);
            //     print_r($kk);
            //     print_r($passport);
            //     echo '<pre>';
            // }

                $ktp = $this->upload->data('ktp');
                // $kk = $this->input->post('kk');
                // $passport = $this->input->post('passport');

                echo '<pre>';
                print_r($ktp);
                // print_r($kk);
                // print_r($passport);
                echo '<pre>';
        }

    }