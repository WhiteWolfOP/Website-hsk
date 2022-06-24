<?php


    class Report extends CI_Controller{

        public function __construct()
        {
            parent:: __construct();
            $this->load->model('model_report');
        }

        public function pesertaM(){

            $valid = $this->form_validation;

            $valid->set_rules(
                'tgl_start',
                'Tgl start',
                'required',
                array(
                    'required'      => '%s Cant be empty'
                )
            );

            $valid->set_rules(
                'tgl_end',
                'Tgl end',
                'required',
                array(
                    'required'      => '%s Cant be empty'
                )
            );

            if($valid->run()){

                $tgl_start = date('Y-m-d', strtotime($this->input->post('tgl_start')));
                $tgl_end = date('Y-m-d', strtotime($this->input->post('tgl_end')));
                redirect(base_url('reportPeriodePeserta/'.$tgl_start.'/'.$tgl_end), 'refresh');


            }else{

                $listPeserta = $this->model_report->pesertaM();

                $data = array(
                    'title'     => 'List peserta',
                    'listPeserta'   => $listPeserta,
                    'isi'       => 'admin/report/report_peserta'
                );
                $this->load->view('admin/layout/wrapper', $data, FALSE);

            }

        }

        public function nilaiM(){

            $valid = $this->form_validation;

            $valid->set_rules(
                'tgl_start',
                'Tgl start',
                'required',
                array(
                    'required'      => '%s Cant be empty'
                )
            );

            $valid->set_rules(
                'tgl_end',
                'Tgl end',
                'required',
                array(
                    'required'      => '%s Cant be empty'
                )
            );

            if($valid->run()){

                $tgl_start = date('Y-m-d', strtotime($this->input->post('tgl_start')));
                $tgl_end = date('Y-m-d', strtotime($this->input->post('tgl_end')));
                redirect(base_url('reportPeriodeNilai/'.$tgl_start.'/'.$tgl_end), 'refresh');

            }else{
                
                $listNilai = $this->model_report->nilaiM();

                $data = array(
                    'title'     => 'List nilai',
                    'listNilai'   => $listNilai,
                    'isi'       => 'admin/report/report_nilai'
                );
                $this->load->view('admin/layout/wrapper', $data, FALSE);


            }

        }

        public function reportPeriodeNilai($tgl_start, $tgl_end){

            $listNilai = $this->model_report->reportNilai($tgl_start, $tgl_end);

            $valid = $this->form_validation;

            $valid->set_rules(
                'tgl_start',
                'Tgl start',
                'required',
                array(
                    'required'      => '%s Cant be empty'
                )
            );

            $valid->set_rules(
                'tgl_end',
                'Tgl end',
                'required',
                array(
                    'required'      => '%s Cant be empty'
                )
            );

            if($valid->run()){

                $tgl_start = date('Y-m-d', strtotime($this->input->post('tgl_start')));
                $tgl_end = date('Y-m-d', strtotime($this->input->post('tgl_end')));
                redirect(base_url('reportPeriodeNilai/'.$tgl_start.'/'.$tgl_end), 'refresh');

            }else{

                $data = array(
                    'title'     => 'List nilai',
                    'listNilai' => $listNilai,
                    'isi'       => 'admin/report/showNilai'
                );
                $this->load->view('admin/layout/wrapper', $data, FALSE);

            }

        }

        public function reportPeriodePeserta($tgl_start, $tgl_end){

            $listPeserta = $this->model_report->reportPeserta($tgl_start, $tgl_end);

            $valid = $this->form_validation;

            $valid->set_rules(
                'tgl_start',
                'Tgl start',
                'required',
                array(
                    'required'      => '%s Cant be empty'
                )
            );

            $valid->set_rules(
                'tgl_end',
                'Tgl end',
                'required',
                array(
                    'required'      => '%s Cant be empty'
                )
            );

            if($valid->run()){

                $tgl_start = date('Y-m-d', strtotime($this->input->post('tgl_start')));
                $tgl_end = date('Y-m-d', strtotime($this->input->post('tgl_end')));
                redirect(base_url('reportPeriodePeserta/'.$tgl_start.'/'.$tgl_end), 'refresh');

            }else{
                
                $data = array(
                    'title'     => 'List report',
                    'listPeserta'   => $listPeserta,
                    'isi'           => 'admin/report/showPeserta'
                );
                $this->load->view('admin/layout/wrapper', $data, FALSE);

            }

        }

    }


?>