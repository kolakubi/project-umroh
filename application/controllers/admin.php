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

            $hasil = $this->admin_model->ambilDataProduk();
            $data['produk'] = $hasil;

            $this->load->view('admin/header');
            $this->load->view('admin/produk', $data);
            $this->load->view('front/footer');

        }

        public function produkUbah($kodeProduk){

            // set rule form
            $this->form_validation->set_rules(
                array(
                    array(
                        'field' => 'namaproduk',
                        'label' => 'Nama Produk',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'harga',
                        'label' => 'Harga',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'hotel',
                        'label' => 'Hotel',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'hari',
                        'label' => 'Hari',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'kuota',
                        'label' => 'Kuota',
                        'rules' => 'required'
                    ),
                )
            ); // => end of set_rules

            $this->form_validation->set_message('required', '%s wajib diisi');

            if(!$this->form_validation->run()){

                $hasil = $this->admin_model->ambilDataProduk($kodeProduk);
                $data['produk'] = $hasil;

                $this->load->view('admin/header');
                $this->load->view('admin/produkubah', $data);
                $this->load->view('front/footer');

            }
            else{

                // ambil variable dari form
                $kodeProduk = $this->input->post('kodeproduk');
                $namaProduk = $this->input->post('namaproduk');
                $harga = $this->input->post('harga');
                $hotel = $this->input->post('hotel');
                $hari = $this->input->post('hari');
                $kuota = $this->input->post('kuota');

                $dataUbahProduk = array(
                    'kode_produk' => $kodeProduk,
                    'nama_produk' => $namaProduk,
                    'harga' => $harga,
                    'hotel' => $hotel,
                    'hari' => $hari,
                    'kuota' => $kuota
                );

                $hasil = $this->admin_model->produkUbah($dataUbahProduk);

                if($hasil){
                    redirect('admin');
                }

            } // end of form_validation

        } // end of function produkUbah

        public function akun(){

            $hasil = $this->admin_model->ambilDataAkun();
            $data['akun'] = $hasil;

            $this->load->view('admin/header');
            $this->load->view('admin/akun', $data);
            $this->load->view('front/footer');

        } // end of function akun

        public function akunTambah(){

            // set form rule
			$this->form_validation->set_rules(array(
				array(
					'field' => 'username',
					'label' => 'Username',
					'rules' => 'required'
				),
				array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'required'
                ),
                array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'required'
                ),
                array(
					'field' => 'level',
					'label' => 'Level',
					'rules' => 'required'
				)
            ));
            
            // ubah pesan error
            $this->form_validation->set_message('required', '%s Wajib diisi');

            // jika submit gagal
            if(!$this->form_validation->run()){
                $data['gagal'] = false;

                $this->load->view('admin/header');
                $this->load->view('admin/akuntambah', $data);
                $this->load->view('front/footer');

			}
            // jika submit berhasil
            else{
				// ambil value dr field
				$username = $this->input->post('username');
                $password = $this->input->post('password');
                $email = $this->input->post('email');
                $level = $this->input->post('level');
                $dataDaftarAkun = array(
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'level' => $level
                );

                // simpan input ke database
                $result = $this->admin_model->tambahAkun($dataDaftarAkun);
                
                // jika sukses
                // brati username blum dipakai
                if($result){
                    redirect('admin/akun');
                }
                // jika gagal
                else{
                    $data['gagal'] = true;

                    $this->load->view('admin/header');
                    $this->load->view('admin/akuntambah', $data);
                    $this->load->view('front/footer');
                } // => end of input sukses

            } // end of validasi form

        } // end of function akunTambah

        public function akunUbah($kodeAkun){

            // set rule form
            $this->form_validation->set_rules(
                array(
                    array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required'
                    ),
                    // array(
                    //     'field' => 'level',
                    //     'label' => 'Level',
                    //     'rules' => 'required'
                    // ),
                )
            ); // => end of set_rules

            $this->form_validation->set_message('required', '%s wajib diisi');

            if(!$this->form_validation->run()){

                $hasil = $this->admin_model->ambilDataakun($kodeAkun);
                $data['akun'] = $hasil;

                $this->load->view('admin/header');
                $this->load->view('admin/akunubah', $data);
                $this->load->view('front/footer');

            }
            else{

                // ambil variable dari form
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $email = $this->input->post('email');
                //$level = $this->input->post('level');

                $dataUbahakun = array(
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                );

                $hasil = $this->admin_model->akunUbah($dataUbahakun);

                if($hasil){
                    redirect('admin/akun');
                }

            } // end of form_validation

        } // end of function akunUbah

        ////////////////////////////////////////////////////
        ////////////////////////////////////////////////////
        // J A M A A H

        public function jamaah(){

            $hasil = $this->admin_model->ambilDataJamaah();
            $data['jamaah'] = $hasil;

            $this->load->view('admin/header');
            $this->load->view('admin/jamaah', $data);
            $this->load->view('front/footer');

        } // end of function jamaah

        public function jamaahDetail($ktp){

            $hasil = $this->admin_model->ambilDataJamaah($ktp);
            $data['jamaah'] = $hasil;

            $this->load->view('admin/header');
            $this->load->view('admin/jamaahdetail', $data);
            $this->load->view('front/footer');

        } // end of function jamaahDetail

        public function jamaahUbah($ktp){

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
                    // array(
                    //     'field' => 'kodepos',
                    //     'label' => 'Kode Pos',
                    //     'rules' => 'required'
                    // ),
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
                    )
                )
            );

            $this->form_validation->set_message('required', '%s wajib diisi');

            // jika form tidak valid
            if(!$this->form_validation->run()){

                $hasil = $this->admin_model->ambilDataJamaah($ktp);
                $data['hasil'] = $hasil;

                $this->load->view('admin/header');
                $this->load->view('admin/jamaahubah', $data);
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
                $kodepos = $this->input->post('kodepos');
                $telepon = $this->input->post('telepon');
                $hp = $this->input->post('hp');
                $pendidikan = $this->input->post('pendidikan');
                $pekerjaan = $this->input->post('pekerjaan');
                // $pengalamanhaji = $this->input->post('pengalamanhaji');
                // $namamahram = $this->input->post('namamahram');
                // $hubunganmahram = $this->input->post('hubunganmahram');
                // $nomorpendaftarmahram = $this->input->post('nomorpendaftarmahram');
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
                $dataBaru = array(
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
                    // 'pengalamanhaji' => $pengalamanhaji,
                    // 'namamahram' => $namamahram,
                    // 'hubunganmahram' => $hubunganmahram,
                    // 'nomorpendaftarmahram' => $nomorpendaftarmahram,
                    'golongandarah' => $golongandarah,
                    'rambut' => $rambut,
                    'alis' => $alis,
                    'hidung' => $hidung,
                    'tinggi' => $tinggi,
                    'berat' => $berat,
                    'muka' => $muka,
                    // 'paket' => $paket,
                    // 'metodepembayaran' => $metodepembayaran,
                    // 'foto' => $namaFileFoto
                );

                // echo '<pre>';
                // print_r($dataPendaftar);
                // echo '</pre>';

                // input ke db
                $hasil = $this->admin_model->jamaahUbah($dataBaru);

                if($hasil){
                    redirect('admin/jamaah');
                }

            }

        } // end of function jamaahUbah

    } // end of class