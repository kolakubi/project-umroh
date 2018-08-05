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

        public function jamaah(){

            $hasil = $this->admin_model->ambilDataJamaah();
            $data['jamaah'] = $hasil;

            $this->load->view('admin/header');
            $this->load->view('admin/jamaah', $data);
            $this->load->view('front/footer');

        } // end of function jamaah

    } // end of class