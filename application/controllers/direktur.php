<?php

    class Direktur extends CI_Controller{

      public function __construct(){

        parent::__construct();

        // cek session
        // cek session direktur yaitu level 3
        if($_SESSION['level']){
            $sessionLevel = $_SESSION['level'];
                if($sessionLevel != 3){
                // jika level bukan 3, redirect ke login
                redirect('login');
            }
        }
        else{
            redirect('login');
        }

      }

      public function index(){

        $this->load->view('direktur/header');
        $this->load->view('direktur/menu');
        $this->load->view('front/footer');

      }

      public function pendaftaran(){
        $this->form_validation->set_rules(
          array(
            array(
              'field' => 'tanggaldari',
              'label' => 'Tanggal Dari',
              'rules' => 'required'
            ),
            array(
              'field' => 'tanggalsampai',
              'label' => 'Tanggal Sampai',
              'rules' => 'required'
            )
          )
        );
  
        if(!$this->form_validation->run()){
          $data['pendaftaran'] = array();
  
          $this->load->view('direktur/header');
          $this->load->view('direktur/pendaftaran', $data);
          $this->load->view('front/footer');
        }
        else{
          $tanggaldari = $this->input->post('tanggaldari').' 00:00:00';
          $tanggalsampai = $this->input->post('tanggalsampai').' 23:59:59';
          $dataambil = array(
            'dari' => $tanggaldari,
            'sampai' => $tanggalsampai
          );

          //   echo '<pre>';
          //   print_r($dataambil);
          //   echo '</pre>';
          //   return true;
  
          // ambil semua data pendaftaran
          $dataPendaftaran = $this->direktur_model->getDataPendaftaranJoin($dataambil);
          $data['pendaftaran'] = $dataPendaftaran;
          $data['tanggal'] = array(
            'dari' => $this->input->post('tanggaldari'),
            'sampai' => $this->input->post('tanggalsampai')
          );
  
          $this->load->view('direktur/header');
          $this->load->view('direktur/pendaftaran', $data);
          $this->load->view('front/footer');
        }

      } // end of pendaftaran

      public function pembayaran(){

        $this->form_validation->set_rules(
          array(
            array(
              'field' => 'tanggaldari',
              'label' => 'Tanggal Dari',
              'rules' => 'required'
            ),
            array(
              'field' => 'tanggalsampai',
              'label' => 'Tanggal Sampai',
              'rules' => 'required'
            )
          )
        );
  
        if(!$this->form_validation->run()){
          $data['pembayaran'] = array();
  
          $this->load->view('direktur/header');
          $this->load->view('direktur/pembayaran', $data);
          $this->load->view('front/footer');
        }
        else{
          $tanggaldari = $this->input->post('tanggaldari').' 00:00:00';
          $tanggalsampai = $this->input->post('tanggalsampai').' 23:59:59';
          $dataambil = array(
            'dari' => $tanggaldari,
            'sampai' => $tanggalsampai
          );

          //   echo '<pre>';
          //   print_r($dataambil);
          //   echo '</pre>';
          //   return true;
  
          // ambil semua data Pembayaran
          $dataPembayaran = $this->direktur_model->getDataPembayaranJoin($dataambil);
          $data['pembayaran'] = $dataPembayaran;
          $data['tanggal'] = array(
            'dari' => $this->input->post('tanggaldari'),
            'sampai' => $this->input->post('tanggalsampai')
          );
  
          $this->load->view('direktur/header');
          $this->load->view('direktur/pembayaran', $data);
          $this->load->view('front/footer');
        }

      } // end of pembayaran

      public function keberangkatan(){
        $this->form_validation->set_rules(
          array(
            array(
              'field' => 'tanggaldari',
              'label' => 'Tanggal Dari',
              'rules' => 'required'
            ),
            array(
              'field' => 'tanggalsampai',
              'label' => 'Tanggal Sampai',
              'rules' => 'required'
            )
          )
        );
  
        if(!$this->form_validation->run()){
          $data['keberangkatan'] = array();
  
          $this->load->view('direktur/header');
          $this->load->view('direktur/keberangkatan', $data);
          $this->load->view('front/footer');
        }
        else{
          $tanggaldari = $this->input->post('tanggaldari').' 00:00:00';
          $tanggalsampai = $this->input->post('tanggalsampai').' 23:59:59';
          $dataambil = array(
            'dari' => $tanggaldari,
            'sampai' => $tanggalsampai
          );

          //   echo '<pre>';
          //   print_r($dataambil);
          //   echo '</pre>';
          //   return true;
  
          // ambil semua data keberangkatan
          $dataKeberangkatan = $this->direktur_model->getDataKeberangkatanJoin($dataambil);
          $data['keberangkatan'] = $dataKeberangkatan;
          $data['tanggal'] = array(
            'dari' => $this->input->post('tanggaldari'),
            'sampai' => $this->input->post('tanggalsampai')
          );
  
          $this->load->view('direktur/header');
          $this->load->view('direktur/keberangkatan', $data);
          $this->load->view('front/footer');
        }

      } // end of keberangkatan

    }