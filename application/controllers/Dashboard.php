<?php

    class Dashboard extends CI_Controller{

        public function __construct()
        {   
            parent:: __construct();
            $this->load->model('model_dashboard');
            // $this->user_login->checkLogin();
        }

        public function index(){

            $hsk1 = $this->model_dashboard->hsk1();

            $hsk2 = $this->model_dashboard->hsk2();

            $hsk3 = $this->model_dashboard->hsk3();

            $hsk4 = $this->model_dashboard->hsk4();

            $data = array(
                'title'     => 'Dashboard',
                'hsk1'      => $hsk1,
                'hsk2'      => $hsk2,
                'hsk3'      => $hsk3,
                'hsk4'      => $hsk4,
                'isi'       => 'admin/dashboard'
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        }

    }

?>