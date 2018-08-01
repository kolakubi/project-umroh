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

        public function pembatalanstatus(){

            $username = $_SESSION['username'];

            $hasil = $this->jamaah_model->ambilpembatalandetail($username);
            $data['pembatalan'] = $hasil;

            // echo '<pre>';
            // print_r($hasil);
            // echo '</pre>';

            $this->load->view('jamaah/header');
            $this->load->view('jamaah/pembatalanstatus', $data);
            $this->load->view('front/footer');

        } // end of function pembatalandetail

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
                $alasan = $this->input->post('alasan');
                $dataPembatalan = array(
                    'kode_pendaftaran' => $kodePendaftaran,
                    'metode_pembatalan' => 1,
                    'pewaris' => 0,
                    'alasan_pembatalan' => $alasan
                );

                $hasil = $this->jamaah_model->tambahPembatalan($dataPembatalan);

                if($hasil){
                    redirect('jamaah/pembatalan');
                }
                
            }

        } // end of function metodebatal1

        public function metodebatal2($kodePendaftaran){

            // set rule form
            $this->form_validation->set_rules(
                array(
                    array(
                        'field' => 'ktp',
                        'label' => 'ktp',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'nama',
                        'label' => 'nama',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'namaayah',
                        'label' => 'namaayah',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'tempatlahir',
                        'label' => 'tempatlahir',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'tanggallahir',
                        'label' => 'tanggallahir',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'kelamin',
                        'label' => 'kelamin',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'kewarganegaraan',
                        'label' => 'kewarganegaraan',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'alamat',
                        'label' => 'alamat',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'kelurahan',
                        'label' => 'kelurahan',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'kecamatan',
                        'label' => 'kecamatan',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'kecamatan',
                        'label' => 'kecamatan',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'propinsi',
                        'label' => 'propinsi',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'kodepos',
                        'label' => 'Kode Pos',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'telepon',
                        'label' => 'telepon',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'hp',
                        'label' => 'hp',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'pendidikan',
                        'label' => 'pendidikan',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'pekerjaan',
                        'label' => 'pekerjaan',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'golongandarah',
                        'label' => 'golongandarah',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'rambut',
                        'label' => 'rambut',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'alis',
                        'label' => 'alis',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'hidung',
                        'label' => 'hidung',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'tinggi',
                        'label' => 'tinggi',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'berat',
                        'label' => 'berat',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'muka',
                        'label' => 'muka',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'alasan',
                        'label' => 'Alasan',
                        'rules' => 'required'
                    ),
                )
            );

            if(empty($_FILES['foto']['name'])){
                $this->form_validation->set_rules('foto', 'Foto', 'required');
            }

            $this->form_validation->set_message('required', '%s wajib diisi');

            // jika form tidak valid
            if(!$this->form_validation->run()){
                echo '0';

                $data['kodependaftaran'] = $kodePendaftaran;

                $this->load->view('jamaah/header');
                $this->load->view('jamaah/metodebatal2', $data);
                $this->load->view('front/footer');

            }
            else{
                echo '1';

                /////////////////////////////////////////////
                // upload file foto
                // atur config file
                $namaFileFoto = '';
                $config['upload_path'] = './uploads/foto';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 500;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // upload
                if(!$this->upload->do_upload('foto')){

                    echo $this->upload->display_errors();
                }
                else{
                    $dataFileBuktiPembayaran = $this->upload->data();
                    $namaFileFoto = $dataFileBuktiPembayaran['file_name'];
                }
                ////////////////////////////////////////////

                $username = $_SESSION['username'];

                // ambil value dari semua field
                $ktp = $this->input->post('ktp');
                $nama = $this->input->post('nama');
                $namaayah = $this->input->post('namaayah');
                $tempatlahir = $this->input->post('tempatlahir');
                $tanggallahir = $this->input->post('tanggallahir');
                $kelamin = $this->input->post('kelamin');
                $kewarganegaraan = $this->input->post('kewarganegaraan');
                $alamat = $this->input->post('alamat');
                $kelurahan = $this->input->post('kelurahan');
                $kecamatan = $this->input->post('kecamatan');
                $kabupaten = $this->input->post('kabupaten');
                $propinsi = $this->input->post('propinsi');
                $kodepos = $this->input->post('kodepos');
                $telepon = $this->input->post('telepon');
                $hp = $this->input->post('hp');
                $pendidikan = $this->input->post('pendidikan');
                $pekerjaan = $this->input->post('pekerjaan');
                $pengalamanhaji = $this->input->post('pengalamanhaji');
                $namamahram = $this->input->post('namamahram');
                $hubunganmahram = $this->input->post('hubunganmahram');
                $nomorpendaftarmahram = $this->input->post('nomorpendaftarmahram');
                $golongandarah = $this->input->post('golongandarah');
                $rambut = $this->input->post('rambut');
                $alis = $this->input->post('alis');
                $hidung = $this->input->post('hidung');
                $tinggi = $this->input->post('tinggi');
                $berat = $this->input->post('berat');
                $muka = $this->input->post('muka');
                $paket = $this->input->post('paket');
                $metodepembayaran = $this->input->post('metodepembayaran');
                $alasan = $this->input->post('alasan');

                // masukin ke array
                $dataPendaftar = array(
                    'username' => $username,
                    'ktp' => $ktp,
                    'nama' => $nama,
                    'namaayah' => $namaayah,
                    'tempatlahir' => $tempatlahir,
                    'tanggallahir' => $tanggallahir,
                    'kelamin' => $kelamin,
                    'kewarganegaraan' => $kewarganegaraan,
                    'alamat' => $alamat,
                    'kelurahan' => $kelurahan,
                    'kecamatan' => $kecamatan,
                    'kabupaten' => $kabupaten,
                    'propinsi' => $propinsi,
                    'telepon' => $telepon,
                    'hp' => $hp,
                    'pendidikan' => $pendidikan,
                    'pekerjaan' => $pekerjaan,
                    'pengalamanhaji' => $pengalamanhaji,
                    'namamahram' => $namamahram,
                    'hubunganmahram' => $hubunganmahram,
                    'nomorpendaftarmahram' => $nomorpendaftarmahram,
                    'golongandarah' => $golongandarah,
                    'rambut' => $rambut,
                    'alis' => $alis,
                    'hidung' => $hidung,
                    'tinggi' => $tinggi,
                    'berat' => $berat,
                    'muka' => $muka,
                    'paket' => $paket,
                    'metodepembayaran' => $metodepembayaran,
                    'foto' => $namaFileFoto
                );

                // echo '<pre>';
                // print_r($dataPendaftar);
                // echo '</pre>';

                $alasan = $this->input->post('alasan');
                $dataPembatalan = array(
                    'kode_pendaftaran' => $kodePendaftaran,
                    'metode_pembatalan' => 2,
                    'pewaris' => $ktp,
                    'alasan_pembatalan' => $alasan
                );
                // input ke pembatalan
                $hasil = $this->jamaah_model->tambahPembatalan($dataPembatalan);

                // input ke jamaah
                $hasil = $this->jamaah_model->tambahJamaah($dataPendaftar);

               
                redirect('jamaah/pembatalanstatus');
                
            }

        } // end of function metodebatal2

    }