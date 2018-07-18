<?php 

    class Admin extends CI_Controller{

        public function __construct(){

            parent::__construct();

            // cek session
            // cek session admin yaitu level 1
            if($_SESSION['level']){
                $sessionLevel = $_SESSION['level'];
                    if($sessionLevel != 1){
                    // jika level bukan 1, redirect ke login
                    redirect('login');
                }
            }
            else{
                redirect('login');
            }

        }

        public function index(){

            $hasil = $this->admin_model->ambilDataPendaftaran();
            $data['pendaftaran'] = $hasil;

            $this->load->view('admin/header');
            $this->load->view('admin/jamaah', $data);
            $this->load->view('front/footer');
        }

        public function berkas(){

            $hasil = $this->admin_model->ambilDataPendaftaran();
            $data['pendaftaran'] = $hasil;

            $this->load->view('admin/header');
            $this->load->view('admin/berkas', $data);
            $this->load->view('front/footer');

        }

        public function berkasValidasi($kodePendaftaran){

            $hasil = $this->admin_model->ambilDataBerkas($kodePendaftaran);
            $data['semuaberkas'] = $hasil; 

            $this->load->view('admin/header');
            $this->load->view('admin/berkasvalidasi', $data);
            $this->load->view('front/footer');

            echo '<pre>';
            print_r($hasil);
            echo '</pre>';

        }

    }