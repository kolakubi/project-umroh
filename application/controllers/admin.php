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

            // echo '<pre>';
            // print_r($hasil);
            // echo '</pre>';

            $this->load->view('admin/header');
            $this->load->view('admin/berkasvalidasi', $data);
            $this->load->view('front/footer');

        }


        // update status berkas valid
        //////////////////////////////////////////////////////
        public function berkasValidKtp($kodePendaftaran){

            $this->admin_model->updateStatusBerkas('status_berkas_ktp', 'valid', $kodePendaftaran);

            $this->berkasValidasi($kodePendaftaran);

        }

        public function berkasValidKk($kodePendaftaran){

            $this->admin_model->updateStatusBerkas('status_berkas_kk', 'valid', $kodePendaftaran);

            $this->berkasValidasi($kodePendaftaran);

        }

        public function berkasValidPassport($kodePendaftaran){

            $this->admin_model->updateStatusBerkas('status_berkas_passport', 'valid', $kodePendaftaran);

            $this->berkasValidasi($kodePendaftaran);

        }
        ////////////////////////////////////////////////////

        // update status berkas tidak valid
        //////////////////////////////////////////////////////
        public function berkasTidakValidKtp($kodePendaftaran){

            $this->admin_model->updateStatusBerkas('status_berkas_ktp', 'tidak valid', $kodePendaftaran);

            $this->berkasValidasi($kodePendaftaran);

        }

        public function berkasTidakValidKk($kodePendaftaran){

            $this->admin_model->updateStatusBerkas('status_berkas_kk', 'tidak valid', $kodePendaftaran);

            $this->berkasValidasi($kodePendaftaran);

        }

        public function berkasTidakValidPassport($kodePendaftaran){

            $this->admin_model->updateStatusBerkas('status_berkas_passport', 'tidak valid', $kodePendaftaran);

            $this->berkasValidasi($kodePendaftaran);

        }
        ////////////////////////////////////////////////////

        public function jamaahDetail($ktp){

            $hasil = $this->admin_model->ambilDataJamaah($ktp);
            $data['jamaah'] = $hasil;

            // echo '<pre>';
            // print_r($hasil);
            // echo '</pre>';

            $this->load->view('admin/header');
            $this->load->view('admin/jamaahdetail', $data);
            $this->load->view('front/footer');

        }

        //////////////////////////////////////////////////

        public function jadwal(){

            $this->load->view('admin/header');
            $this->load->view('admin/jadwal');
            $this->load->view('front/footer');


        }

    }