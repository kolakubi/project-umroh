<?php 

    class Frontoffice extends CI_Controller{

        public function __construct(){

            parent::__construct();

            // cek session
            // cek session front office yaitu level 5
            if($_SESSION['level']){
                $sessionLevel = $_SESSION['level'];
                    if($sessionLevel != 5){
                    // jika level bukan 5, redirect ke login
                    redirect('login');
                }
            }
            else{
                redirect('login');
            }

        }

        public function index(){

            $hasil = $this->frontoffice_model->ambilDataPendaftaran();
            $data['pendaftaran'] = $hasil;

            $this->load->view('frontoffice/header');
            $this->load->view('frontoffice/jamaah', $data);
            $this->load->view('front/footer');
        }

        public function berkas(){

            $hasil = $this->frontoffice_model->ambilDataPendaftaran();
            $data['pendaftaran'] = $hasil;

            $this->load->view('frontoffice/header');
            $this->load->view('frontoffice/berkas', $data);
            $this->load->view('front/footer');

        }

        public function berkasValidasi($kodePendaftaran){

            $hasil = $this->frontoffice_model->ambilDataBerkas($kodePendaftaran);
            $data['semuaberkas'] = $hasil;

            // echo '<pre>';
            // print_r($hasil);
            // echo '</pre>';

            $this->load->view('frontoffice/header');
            $this->load->view('frontoffice/berkasvalidasi', $data);
            $this->load->view('front/footer');

        }

        public function cekValidSemuaBerkas($kodePendaftaran, $berkas){

            // ambil semua data berkas
            $hasil = $this->frontoffice_model->ambilDataBerkas($kodePendaftaran);

            // cek jika semua berkas valid
            if($hasil[$berkas]['status_berkas_'.$berkas] == 'valid'){
                return true;
            }

        } // end of function cekValidSemuaBerkas


        // update status berkas valid
        //////////////////////////////////////////////////////
        public function berkasValidKtp($kodePendaftaran){

            $this->frontoffice_model->updateStatusBerkas('status_berkas_ktp', 'valid', $kodePendaftaran);

            // cek semua status berkas
            if($this->cekValidSemuaBerkas($kodePendaftaran, 'ktp') &&
            $this->cekValidSemuaBerkas($kodePendaftaran, 'kk') &&
            $this->cekValidSemuaBerkas($kodePendaftaran, 'passport')){

                // jika semua valid
                // update status berkas di pendaftaran jadi valid
                $this->frontoffice_model->updateStatusBerkasPendaftaran($kodePendaftaran);
            }

            $this->berkasValidasi($kodePendaftaran);

        }

        public function berkasValidKk($kodePendaftaran){

            $this->frontoffice_model->updateStatusBerkas('status_berkas_kk', 'valid', $kodePendaftaran);

            // cek semua status berkas
            if($this->cekValidSemuaBerkas($kodePendaftaran, 'ktp') &&
            $this->cekValidSemuaBerkas($kodePendaftaran, 'kk') &&
            $this->cekValidSemuaBerkas($kodePendaftaran, 'passport')){

                // jika semua valid
                // update status berkas di pendaftaran jadi valid
                $this->frontoffice_model->updateStatusBerkasPendaftaran($kodePendaftaran);
            }

            $this->berkasValidasi($kodePendaftaran);

        }

        public function berkasValidPassport($kodePendaftaran){

            $this->frontoffice_model->updateStatusBerkas('status_berkas_passport', 'valid', $kodePendaftaran);

            // cek semua status berkas
            if($this->cekValidSemuaBerkas($kodePendaftaran, 'ktp') &&
            $this->cekValidSemuaBerkas($kodePendaftaran, 'kk') &&
            $this->cekValidSemuaBerkas($kodePendaftaran, 'passport')){

                // jika semua valid
                // update status berkas di pendaftaran jadi valid
                $this->frontoffice_model->updateStatusBerkasPendaftaran($kodePendaftaran);
            }

            $this->berkasValidasi($kodePendaftaran);

        }
        ////////////////////////////////////////////////////

        // update status berkas tidak valid
        //////////////////////////////////////////////////////
        public function berkasTidakValidKtp($kodePendaftaran){

            $this->frontoffice_model->updateStatusBerkas('status_berkas_ktp', 'tidak valid', $kodePendaftaran);

            $this->berkasValidasi($kodePendaftaran);

        }

        public function berkasTidakValidKk($kodePendaftaran){

            $this->frontoffice_model->updateStatusBerkas('status_berkas_kk', 'tidak valid', $kodePendaftaran);

            $this->berkasValidasi($kodePendaftaran);

        }

        public function berkasTidakValidPassport($kodePendaftaran){

            //  update status berkas
            $this->frontoffice_model->updateStatusBerkas('status_berkas_passport', 'tidak valid', $kodePendaftaran);

            $this->berkasValidasi($kodePendaftaran);

        }
        ////////////////////////////////////////////////////

        public function jamaahDetail($ktp){

            $hasil = $this->frontoffice_model->ambilDataJamaah($ktp);
            $data['jamaah'] = $hasil;

            // echo '<pre>';
            // print_r($hasil);
            // echo '</pre>';

            $this->load->view('frontoffice/header');
            $this->load->view('frontoffice/jamaahdetail', $data);
            $this->load->view('front/footer');

        }

        //////////////////////////////////////////////////

        public function jadwal(){

            $this->load->view('frontoffice/header');
            $this->load->view('frontoffice/jadwal');
            $this->load->view('front/footer');


        }

    }