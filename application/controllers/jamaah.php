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

        public function ambilDataPendaftaran($username){

            $hasil = $this->jamaah_model->ambilDataPendaftaran($username);
            return $hasil;

        }

        public function berkas(){

            // ambil data pendaftaran
            $hasil = $this->ambilDataPendaftaran($_SESSION['username']);
            $data['pendaftaran'] = $hasil;

            $this->load->view('jamaah/header');
            $this->load->view('jamaah/berkas', $data);
            $this->load->view('front/footer');

        } // end of function berkas

        public function uploadBerkas($kodePendaftaran){

            // passing kode pendaftaran
            $data['kodependaftaran'] = $kodePendaftaran;
            
            // inisiasi variable
            $dataFileKtp = array();
            $dataFileKk = array();
            $dataFilePassport = array();
            $dataBerkasKtp = array();
            $dataBerkasKk = array();
            $dataBerkasPassport = array();

            // rule biar harus diisi
            if(empty($_FILES['ktp']['name'])){
                $this->form_validation->set_rules('ktp', 'Document', 'required');
            }
            if(empty($_FILES['kk']['name'])){
                $this->form_validation->set_rules('kk', 'Document', 'required');
            }
            if(empty($_FILES['passport']['name'])){
                $this->form_validation->set_rules('passport', 'Document', 'required');
            }
            
            $this->form_validation->set_message('required', '%s tidak boleh kosong');

            // validasi kelengkapan form
            if(!$this->form_validation->run() 
            && empty($_FILES['ktp']['name'])){
                
                $this->load->view('jamaah/header');
                $this->load->view('jamaah/uploadberkas', $data);
                $this->load->view('front/footer');
                
            }
            else if(!$this->form_validation->run() 
            && empty($_FILES['kk']['name'])){
                
                $this->load->view('jamaah/header');
                $this->load->view('jamaah/uploadberkas', $data);
                $this->load->view('front/footer');
                
            }
            else if(!$this->form_validation->run() 
            && empty($_FILES['passport']['name'])){
                
                $this->load->view('jamaah/header');
                $this->load->view('jamaah/uploadberkas', $data);
                $this->load->view('front/footer');
                
            }
            else{

                // atur config file
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 500;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // upload 1 per 1
                // ktp
                if(!$this->upload->do_upload('ktp')){

                    echo $this->upload->display_errors();
                }
                else{
                    $dataFileKtp = $this->upload->data();
                    $dataBerkasKtp = array(
                        'kode_berkas' => 'berkas001',
                        'nama_file' => $dataFileKtp['file_name'],
                        'kode_pendaftaran' => $kodePendaftaran
                    );

                    $this->jamaah_model->tambahBerkas($dataBerkasKtp);
                }
                ////////////////////////////////////////////

                // kk
                if(!$this->upload->do_upload('kk')){

                    echo $this->upload->display_errors();
                }
                else{
                    $dataFileKk = $this->upload->data();
                    $dataBerkasKk = array(
                        'kode_berkas' => 'berkas002',
                        'nama_file' => $dataFileKk['file_name'],
                        'kode_pendaftaran' => $kodePendaftaran
                    );

                    $this->jamaah_model->tambahBerkas($dataBerkasKk);
                }
                /////////////////////////////////////////////

                // passport
                if(!$this->upload->do_upload('passport')){

                    echo $this->upload->display_errors();
                }
                else{
                    $dataFilePassport = $this->upload->data();
                    $dataBerkasPassport = array(
                        'kode_berkas' => 'berkas003',
                        'nama_file' => $dataFilePassport['file_name'],
                        'kode_pendaftaran' => $kodePendaftaran
                    );
                    
                    $this->jamaah_model->tambahBerkas($dataBerkasPassport);
                }

                redirect('jamaah/berkas');

            }// => end of form validation

        } // end of function uploadberkas

        public function jadwal(){

            $this->load->view('jamaah/header');
            $this->load->view('jamaah/jadwal');
            $this->load->view('front/footer');

        } // => end of function jadwal

    }