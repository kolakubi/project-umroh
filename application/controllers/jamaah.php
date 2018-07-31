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

            // $this->load->view('jamaah/header');
            // $this->load->view('jamaah/profil');
            // $this->load->view('front/footer');

            $this->berkas();

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

            // ambil status berkas
            $berkas = $this->frontoffice_model->ambilDataBerkas($kodePendaftaran);
            // $statusBerkas['ktp'] = $berkas['ktp']['status_berkas_ktp'];
            // $statusBerkas['kk'] = $berkas['kk']['status_berkas_kk'];
            // $statusBerkas['passport'] = $berkas['passport']['status_berkas_passport'];

            // echo '<pre>';
            // print_r($berkas);
            // echo '</pre>';

            // passing kode pendaftaran
            $data['kodependaftaran'] = $kodePendaftaran;
            $data['pesan_error'] = null;
            // $data['status_ktp'] = $statusBerkas['ktp'];
            // $data['status_kk'] = $statusBerkas['kk'];
            // $data['status_passport'] = $statusBerkas['passport'];
            
            // inisiasi variable
            $dataFileKtp = array();
            $dataFileKk = array();
            $dataFilePassport = array();
            $dataBerkasKtp = array();
            $dataBerkasKk = array();
            $dataBerkasPassport = array();

            // if($statusBerkas['ktp'] != 'valid'){
            //     $this->cekFormBerkas('ktp', $data);

            // }
            // if($statusBerkas['kk'] != 'valid'){
            //     $this->cekFormBerkas('kk', $data);

            // }
            // if($statusBerkas['passport'] != 'valid'){
            //     $this->cekFormBerkas('passport', $data);

            // }
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

                // jika semua berhasil di upload
                if($this->uploadSatuBerkas('ktp', 'berkas001',$kodePendaftaran) &&
                $this->uploadSatuBerkas('kk', 'berkas002', $kodePendaftaran) &&
                $this->uploadSatuBerkas('passport', 'berkas003', $kodePendaftaran)){
                    redirect('jamaah/berkas');
                }

            }

        } // end of function uploadberkas

        public function cekFormBerkas($berkas, $data){

            if(empty($_FILES[$berkas]['name'])){
                $this->form_validation->set_rules($berkas, 'Document', 'required');
            }

            $this->form_validation->set_message('required', '%s tidak boleh kosong');

            // validasi kelengkapan form
            if(!$this->form_validation->run() 
            && empty($_FILES[$berkas]['name'])){
                
                $this->load->view('jamaah/header');
                $this->load->view('jamaah/uploadberkas', $data);
                $this->load->view('front/footer');
                
            }

        } // end of function cekFormBerkas

        public function uploadSatuBerkas($namaInput, $kodeBerkas, $kodePendaftaran){

            // inisiasi
            $data['kodependaftaran'] = $kodePendaftaran;
            $data['pesan_error'] = null;

            // atur config file
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 500;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // upload 1 per 1
            if(!$this->upload->do_upload($namaInput)){

                $data['pesan_error'] = $this->upload->display_errors();

                $this->load->view('jamaah/header');
                $this->load->view('jamaah/uploadberkas', $data);
                $this->load->view('front/footer');

                return false;
            }
            else{
                ////////////////////////////////////////////
                // ktp
                $dataFile = $this->upload->data();
                $dataBerkas = array(
                    'kode_berkas' => $kodeBerkas,
                    'nama_file' => $dataFile['file_name'],
                    'kode_pendaftaran' => $kodePendaftaran
                );
                $this->jamaah_model->tambahBerkas($dataBerkas);
            }

            return true;

        } // end of function uploadSatuBerkas

        public function jadwal(){

            $hasil = $this->jamaah_model->ambilDataJadwal();
            $data['hasil'] = $hasil;

            $this->load->view('jamaah/header');
            $this->load->view('jamaah/jadwal', $data);
            $this->load->view('front/footer');

        } // => end of function jadwal

        public function pembayaran(){

            // ambil data pendaftaran
            $hasil = $this->jamaah_model->ambilTagihan($_SESSION['username']);
            $data['pendaftaran'] = $hasil;

            $this->load->view('jamaah/header');
            $this->load->view('jamaah/pembayaran', $data);
            $this->load->view('front/footer');

        } // => end of function pembayaran

        public function invoice($kodePembayaran){

            $hasil = $this->jamaah_model->ambilInvoice($kodePembayaran);
            $data['pembayaran'] = $hasil;

            $this->load->view('jamaah/header');
            $this->load->view('jamaah/invoice', $data);
            $this->load->view('front/footer');

        } // => end of function invoice

        public function uploadPembayaran($kodePembayaran){

            // passing kode pendaftaran
            $data['kodepembayaran'] = $kodePembayaran;

            if(empty($_FILES['buktibayar']['name'])){
                $this->form_validation->set_rules('buktibayar', 'Document', 'required');
            }

            $this->form_validation->set_message('required', '%s tidak boleh kosong');

            // validasi kelengkapan form
            if(!$this->form_validation->run() 
            && empty($_FILES['buktibayar']['name'])){
                
                $this->load->view('jamaah/header');
                $this->load->view('jamaah/uploadbuktipembayaran', $data);
                $this->load->view('front/footer');
                
            }
            else{

                // atur config file
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 500;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // upload
                if(!$this->upload->do_upload('buktibayar')){

                    echo $this->upload->display_errors();
                }
                else{
                    $dataFileBuktiPembayaran = $this->upload->data();
                    $dataBuktiPembayaran = array(
                        'nama_file' => $dataFileBuktiPembayaran['file_name'],
                        'kode_pembayaran' => $kodePembayaran
                    );

                    $this->jamaah_model->tambahBuktiPembayaran($dataBuktiPembayaran);
                }
                ////////////////////////////////////////////

                redirect('jamaah/pembayaran');

            }// => end of form validation

        } // => end of function uploadPembayaran

        public function pembatalan(){

            $username = $_SESSION['username'];

            $hasil = $this->jamaah_model->ambilDataPendaftaran($username);
            $data['pendaftaran'] = $hasil;

            // echo '<pre>';
            // print_r($hasil);
            // echo '</pre>';

            $this->load->view('jamaah/header');
            $this->load->view('jamaah/pembatalan', $data);
            $this->load->view('front/footer');

        } // end of function pembatalan

        public function metodepembatalan($kodePendaftaran){

            $data['kodependaftaran'] = $kodePendaftaran;

            $this->load->view('jamaah/header');
            $this->load->view('jamaah/formpembatalan', $data);
            $this->load->view('front/footer');

        } // end of function batalkan

        public function metodebatal1($kodePendaftaran){

            // extract variable kodePendaftaran
            $data['kodependaftaran'] = $kodePendaftaran;

            // set rule form
            $this->form_validation->set_rules(
                array(
                    array(
                        'field' => 'setuju',
                        'label' => 'setuju',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'alasan',
                        'label' => 'alasan',
                        'rules' => 'required'
                    ),
                )
            );

            $this->form_validation->set_message('required', 'anda harus menyetujui syarat dan ketentuan');

            if(!$this->form_validation->run()){

                $this->load->view('jamaah/header');
                $this->load->view('jamaah/metodebatal1', $data);
                $this->load->view('front/footer');

            }
            else{
                // ambil variable
                $setuju = $this->input->post('setuju');
                $alasan = $this->input->post('alasan');
                echo $setuju.' '.$alasan;
            }

        } // end of function metodebatal1

        public function metodebatal2($kodePendaftaran){

            $data['kodependaftaran'] = $kodePendaftaran;

            $this->load->view('jamaah/header');
            $this->load->view('jamaah/metodebatal2', $data);
            $this->load->view('front/footer');

        } // end of function metodebatal2

    }