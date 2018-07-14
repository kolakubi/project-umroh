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

        /////////////////////////////////////////////////
        /////////////////////////////////////////////////
        // DAFTAR PAKET

        public function paketshafa(){
            
            $this->load->view('front/header');
            $this->load->view('front/paketshafa');
            $this->load->view('front/footer');

        }

        public function daftar(){

            // jika sudah login
            if($this->cekSession()){

                $hasil = $this->pendaftaranumroh_model->ambilProduk();
                $data['hasil'] = $hasil;

                $this->load->view('front/header');
                $this->load->view('front/formpendaftaran', $data);
                $this->load->view('front/footer');

            }

            // belum login, redirect ke login
            else{
                redirect('login');
            }

        } // => end of function daftarPaketUmrah

        public function submitFormPendaftaran(){

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
                    )
                )
            );

            $this->form_validation->set_message('required', '%s wajib diisi');

            // jika form tidak valid
            if(!$this->form_validation->run()){

                // ambil data produk
                $hasil = $this->pendaftaranumroh_model->ambilProduk();
                $data['hasil'] = $hasil;

                $this->load->view('front/header');
                $this->load->view('front/formpendaftaran', $data);
                $this->load->view('front/footer');

            }
            // jika form valid
            else{

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

                // masukin ke array
                $dataPendaftar = array(
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
                );

                // input ke db
                $hasil = $this->Pendaftaranumroh_model->daftar($dataPendaftar);

            }

        } // end of function submitFormPendaftaran

    } // => end of class