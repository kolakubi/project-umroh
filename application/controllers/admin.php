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

    } // end of class