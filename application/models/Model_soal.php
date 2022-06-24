<?php

    class Model_soal extends CI_Model{

        public function __construct()
        {
            parent:: __construct();
            $this->load->database();
        }

        public function listing(){

            $this->db->select('soal.*,
                            COUNT(jawaban.ID_SOAL) as jumlah_jawaban,
                            level.*');
            $this->db->from('soal');
            $this->db->join('jawaban' , 'soal.ID_SOAL = jawaban.ID_SOAL');
            $this->db->join('level', 'soal.ID_LEVEL = level.ID_LEVEL');
            $this->db->group_by('jawaban.ID_SOAL');
            $this->db->order_by('soal.ID_SOAL', 'asc');
            $query = $this->db->get();
            return $query->result();

        }

        public function detail(){

            $this->db->select('soal.*,
                            jawaban.*');
            $this->db->from('soal');
            $this->db->join('jawaban' , 'soal.ID_SOAL = jawaban.ID_SOAL');
            // $this->db->group_by('jawaban.ID_SOAL');
            // $this->db->order_by('soal.ID_SOAL', 'asc');
            $query = $this->db->get();
            return $query->row();

        }

        public function addJawaban($jawaban){
            $this->db->insert('jawaban', $jawaban);
        }

        public function add($data){
            $this->db->insert('soal', $data);
        }

        public function readLevel(){
            $this->db->select('*');
            $this->db->from('level');
            $query = $this->db->get();
            return $query->result();
        }

        public function readKategori(){
            $this->db->select('kategori_soal.*,
                                level.*');
            $this->db->from('kategori_soal');
            $this->db->join('level', 'kategori_soal.ID_LEVEL = level.ID_LEVEL');
            $query = $this->db->get();
            return $query->result();
        }

        public function edit($data){
            $this->db->where('ID_SOAL', $data['ID_SOAL']);
            $this->db->update('soal', $data);
        }

        public function editJawaban($jawaban){
            $this->db->where('ID_JAWABAN', $jawaban['ID_JAWABAN']);
            $this->db->update('jawaban', $jawaban);
        }

        public function delete($data){
            $this->db->where('id', $data['id']);
            $this->db->delete('soal', $data);
        }

    }

?>