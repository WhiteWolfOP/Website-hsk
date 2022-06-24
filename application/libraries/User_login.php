<?php

class User_login{

    protected $CI;

    public function __construct(){
        $this->CI =& get_instance();
        $this->CI->load->model('model_user');
    }

    public function login($username_user, $password_user, $hak_akses){
        
        if($hak_akses == "pengelola"){

            $check = $this->CI->model_user->login($username_user, $password_user);

            if($check){
                
                $id_user = $check->ID_PENGELOLA;
                $nama_user = $check->NAMA_PENGELOLA;

                $this->CI->session->set_userdata('id_user', $id_user);
                $this->CI->session->set_userdata('nama_user', $nama_user);
                $this->CI->session->set_userdata('username_user', $username_user);
                $this->CI->session->set_userdata('hak_akses', $hak_akses);

                // var_dump($id_user, $nama_user, $username_user, $hak_akses);
                // var_dump($this->CI->session->userdata('username_user'));
                // $this->CI->session->set_flashdata('info', 'Data ada');
                // var_dump($this->CI->session->userdata('username_user'));

                redirect(base_url('dashboard'), 'refresh');

            }else{

                // $this->CI->session->set_flashdata('danger', 'email or password wrong!');
                redirect(base_url('login'), 'refresh');

            }

        }else{

            $check = $this->CI->model_user->loginPenguji($username_user, $password_user);

            if($check){
                
                $id_user = $check->ID_PENGUJI;
                $nama_user = $check->NAMA_PENGUJI;

                $this->CI->session->set_userdata('id_user', $id_user);
                $this->CI->session->set_userdata('nama_user', $nama_user);
                $this->CI->session->set_userdata('username_user', $username_user);
                $this->CI->session->set_userdata('hak_akses', $hak_akses);

                // var_dump($id_user, $nama_user, $username_user, $hak_akses);
                // var_dump($this->CI->session->userdata('username_user'));
                // $this->CI->session->set_flashdata('info', 'Data ada');
                // var_dump($this->CI->session->userdata('username_user'));

                redirect(base_url('dashboard'), 'refresh');

            }else{

                // $this->CI->session->set_flashdata('danger', 'email or password wrong!');
                redirect(base_url('login'), 'refresh');

            }
            
        }
    
    }

    public function checkLogin(){
        $cekLogin= $this->CI->session->userdata('username_user');
        // var_dump($cekLogin);
        if($cekLogin == ""){
           // var_dump($cekLogin);
            // $this->CI->session->set_flashdata('warning', 'login first!');
            // $this->CI->session->set_flashdata('info', 'Data TIdak Ada');
            
            redirect(base_url('login'), 'refresh');

        }
    }

    public function logout(){

        $this->CI->session->unset_userdata('id_user');
        $this->CI->session->unset_userdata('nama_user');
        $this->CI->session->unset_userdata('username_user');
        $this->CI->session->unset_userdata('hak_akses');

        $this->CI->session->set_flashdata('sukses', 'Logout success');
        redirect(base_url('login'), 'refresh');
    }
}