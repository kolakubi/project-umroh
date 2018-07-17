<?php

    class Jamaah_model extends CI_Model{

        public function tambahBerkas($dataBerkas){

            // upload berkas
            $this->db->insert('upload_berkas', $dataBerkas);

            return true;

        }

    }