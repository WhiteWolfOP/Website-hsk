<?php

    class Model_dashboard extends CI_Model{

        public function __construct()
        {
            parent:: __construct();
            $this->load->database();
        }

        public function hsk1(){

            $this->db->where('ID_LEVEL', '1');
            return $this->db->count_all_results('soal');

            // $this->db->select('*');
            // $this->db->from('soal');
            // $this->db->where('sts_soal', 'HSK1');
            // $this->db->order_by('id_soal', 'asc');
            // $query = $this->db->get();
            // return $query->result();
        }

        public function hsk2(){

            // $this->db->select('*');
            // $this->db->from('soal');
            // $this->db->where('sts_soal', 'HSK2');
            // $this->db->order_by('id_soal', 'asc');
            // $query = $this->db->get();
            // return $query->result();

            $this->db->where('ID_LEVEL', '2');
            return $this->db->count_all_results('soal');
        }

        public function hsk3(){

            // $this->db->select('*');
            // $this->db->from('soal');
            // $this->db->where('sts_soal', 'HSK3');
            // $this->db->order_by('id_soal', 'asc');
            // $query = $this->db->get();
            // return $query->result();

            $this->db->where('ID_LEVEL', '3');
            return $this->db->count_all_results('soal');
        }

        public function hsk4(){

            $this->db->where('ID_LEVEL', '4');
            return $this->db->count_all_results('soal');
            // $this->db->select('*');
            // $this->db->from('soal');
            // $this->db->where('sts_soal', 'HSK4');
            // $this->db->order_by('id_soal', 'asc');
            // $query = $this->db->get();
            // return $query->result();
        }

    }

?>