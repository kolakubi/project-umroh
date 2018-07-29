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

        public function cekArray($arr){

            echo '<pre>';
            print_r($arr);
            echo '</pre>';

        }

        public function index(){

            $this->load->view('front/header');
            $this->load->view('front/home');
            $this->load->view('front/footer');

        }

        public function tentang(){

            $this->load->view('front/header');
            $this->load->view('front/tentang');
            $this->load->view('front/footer');

        }

        public function gallery(){

            $this->load->view('front/header');
            $this->load->view('front/gallery');
            $this->load->view('front/footer');

        }

        public function kontak(){

            $this->load->view('front/header');
            $this->load->view('front/kontak');
            $this->load->view('front/footer');

        }

        /////////////////////////////////////////////////
        /////////////////////////////////////////////////
        // DAFTAR PAKET

        public function paketshafa(){

            $hasil = $this->home_model->ambilPaket('umrah003');
            $data['paket'] = $hasil;
            
            $this->load->view('front/header');
            $this->load->view('front/paketshafa', $data);
            $this->load->view('front/footer');

        }

        public function paketMarwah(){

            $hasil = $this->home_model->ambilPaket('umrah002');
            $data['paket'] = $hasil;

            $this->load->view('front/header');
            $this->load->view('front/paketmarwah', $data);
            $this->load->view('front/footer');

        }

        public function paketZamzam(){

            $hasil = $this->home_model->ambilPaket('umroh001');
            $data['paket'] = $hasil;

            $this->load->view('front/header');
            $this->load->view('front/paketzamzam', $data);
            $this->load->view('front/footer');

        }

        public function paketHajiPlus(){

            $hasil = $this->home_model->ambilPaket('haji001');
            $data['paket'] = $hasil;

            $this->load->view('front/header');
            $this->load->view('front/pakethajiplus', $data);
            $this->load->view('front/footer');

        }

        public function daftarUmroh($kodePaket){

            $_SESSION['kode_produk'] = $kodePaket;

            // jika sudah login
            if($this->cekSession()){

                $hasil = $this->pendaftaranumroh_model->ambilProduk($kodePaket);
                $data['hasil'] = $hasil;

                $this->load->view('front/header');
                $this->load->view('front/formpendaftaranumroh', $data);
                $this->load->view('front/footer');

            }

            // belum login, redirect ke login
            else{
                redirect('login');
            }

        } // => end of function daftarPaketUmrah

        public function daftarHaji($kodePaket){

            $_SESSION['kode_produk'] = $kodePaket;

            // jika sudah login
            if($this->cekSession()){

                $hasil = $this->pendaftaranumroh_model->ambilProduk($kodePaket);
                $data['hasil'] = $hasil;

                $this->load->view('front/header');
                $this->load->view('front/formpendaftaranhaji', $data);
                $this->load->view('front/footer');

            }

            // belum login, redirect ke login
            else{
                redirect('login');
            }

        } // => end of function daftarPaketUmrah

        public function submitFormPendaftaran($produk){

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
                        'field' => 'paket',
                        'label' => 'paket',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'metodepembayaran',
                        'label' => 'metode pembayaran',
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

                $kodeProduk = $_SESSION['kode_produk'];
                // ambil data produk
                $hasil = $this->pendaftaranumroh_model->ambilProduk($kodeProduk);
                $data['hasil'] = $hasil;

                $this->load->view('front/header');

                if($produk == 'haji'){
                    $this->load->view('front/formpendaftaranhaji', $data);
                }
                else{
                    $this->load->view('front/formpendaftaranumroh', $data);
                }

                $this->load->view('front/footer');

            }
            // jika form valid
            else{

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

                // input ke db
                $hasil = $this->pendaftaranumroh_model->daftar($dataPendaftar);

                if($hasil){
                    redirect('/home/daftarberhasil');
                }

            }

        } // end of function submitFormPendaftaran


        public function daftarBerhasil(){

            $this->load->view('front/header');
            $this->load->view('front/daftarberhasil');
            $this->load->view('front/footer');

        }

    } // => end of class