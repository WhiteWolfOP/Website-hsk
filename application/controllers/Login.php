<?php

class Login extends CI_Controller{

    public function index(){

        $valid = $this->form_validation;

        $valid->set_rules(

            'username_user',
            'Username',
            'required',
            array(
                'required'      => '%s Silahkan inputkan username anda'
            )

        );

        $valid->set_rules(
            'password_user',
            'Password',
            'required',
            array(
                'required'      => '%s Silahkan inputkan password anda'
            )
        );

        if($valid->run()){

            $username_user = $this->input->post('username_user');
            $password_user = $this->input->post('password_user');
            $hak_akses = $this->input->post('hak_akses');
            if($hak_akses == "pengelola"){
                $this->user_login->login($username_user, $password_user, $hak_akses);
            }else{
                $this->user_login->login($username_user, $password_user, $hak_akses);
            }
        }else{

            $data = array(
                'title'     => 'Login'
            );
            $this->load->view('admin/login', $data, FALSE);
        }
        
    }

    public function logout(){
        $this->user_login->logout();
    }
    
}