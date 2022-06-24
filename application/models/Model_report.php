<?php

    class Model_report extends CI_Model {

        public function __construct()
        {
            parent:: __construct();
            $this->load->database();
        }

        public function pesertaM(){

            $this->db->select('*');
            $this->db->from('peserta');
            $this->db->order_by('ID_PESERTA', 'asc');
            $query = $this->db->get();
            return $query->result();

        }

        public function nilaiM(){

            $this->db->select('peserta.*,
                                nilai_hsk.*');
            $this->db->from('peserta');
            $this->db->join('nilai_hsk', 'peserta.ID_PESERTA=nilai_hsk.ID_PESERTA');
            $this->db->order_by('nilai_hsk.ID_PESERTA', 'asc');
            $query = $this->db->get();
            return $query->result();

        }

        public function reportPeserta($tgl_start, $tgl_end){

            $this->db->select('*');
            $this->db->from('peserta');
            $this->db->where("DATE(TGL_DAFTAR) BETWEEN '$tgl_start' AND '$tgl_end'");
            $this->db->order_by('ID_PESERTA', 'asc');
            $query = $this->db->get();
            return $query->result();

        }

        public function reportNilai($tgl_start, $tgl_end){

            $this->db->select('peserta.*,
                                nilai_hsk.*');
            $this->db->from('peserta');
            $this->db->join('nilai_hsk', 'peserta.ID_PESERTA=nilai_hsk.ID_PESERTA');
            $this->db->where("DATE(nilai_hsk.TANGGAL_NILAI) BETWEEN '$tgl_start' AND '$tgl_end'");
            $this->db->order_by('nilai_hsk.ID_PESERTA', 'asc');
            $query = $this->db->get();
            return $query->result();

        }

    }

?>