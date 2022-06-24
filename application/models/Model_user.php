<?php

    class Model_user extends CI_Model{

        public function __construct()
        {
            parent:: __construct();
            $this->load->database();
        }

        public function listing(){

            $this->db->select('*');
            $this->db->from('penguji');
            $this->db->order_by('ID_PENGUJI', 'asc');
            $query = $this->db->get();
            return $query->result();

        }

        public function login($username_user, $password_user){
        
            $this->db->select('*');
            $this->db->from('pengelola');
            $this->db->where(array('EMAIL_PENGELOLA'        => $username_user,
                                    'PASSWORD_PENGELOLA'    => md5($password_user)
                                ));
            $query = $this->db->get();
            return $query->row();

        }

        public function loginPenguji($username_user, $password_user){

            $this->db->select('*');
            $this->db->from('penguji');
            $this->db->where(array(
                                'EMAIL_PENGUJI'     => $username_user, 
                                'PASSWORD_PENGUJI'  => md5($password_user)
            ));
            $query = $this->db->get();
            return $query->row();

        }

        public function detail($id_user){
            $this->db->select('*');
            $this->db->from('penguji');
            $this->db->where('ID_PENGUJI', $id_user);
            $query = $this->db->get();
            return $query->row();
        }

        public function add($data){
            $this->db->insert('penguji', $data);
        }

        public function edit($data){
            $this->db->where('ID_PENGUJI', $data['ID_PENGUJI']);
            $this->db->update('penguji', $data);
        }

        public function delete($data){
            $this->db->where('ID_PENGUJI', $data['id_user']);
            $this->db->delete('penguji', $data);
        }

    }

?>