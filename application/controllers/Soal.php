<?php

    class Soal extends CI_Controller{
        public function __construct()
        {
            parent:: __construct();
            $this->load->model('model_soal');
            // $this->user_login->checkLogin();
        }

        public function index(){

            $listing = $this->model_soal->listing();

            $data = array(
                'title'     => 'List',
                'listing'   => $listing,
                'isi'       => 'admin/soal/list_soal'
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);

        }

        public function add_ctrl(){

            $valid = $this->form_validation;

            $lvl = $this->model_soal->readLevel();

            $ktg = $this->model_soal->readKategori();

            $valid->set_rules(
                'isi_soal',
                'Soal',
                'required|is_unique[soal.ISI_SOAL]',
                array(
                    'required'      => '%s Tidak boleh kosong',
                    'is_unique'     => '%s Telah di tambahkan'
                )
            );

            $valid->set_rules(
                'a',
                'A',
                'required',
                array(
                    'required'      => '%s Tidak boleh kosong'
                )
            );

            $valid->set_rules(
                'b',
                'B',
                'required',
                array(
                    'required'      => '%s Tidak boleh kosong'
                )
            );

            $valid->set_rules(
                'c',
                'C',
                'required',
                array(
                    'required'      => '%s Tidak boleh kosong'
                )
            );

            $valid->set_rules(
                'd',
                'D',
                'required',
                array(
                    'required'      => '%s Tidak boleh kosong'
                )
            );

            if($valid->run()){

                $i = $this->input;
                $id_user = $this->session->userdata('id_user');
                $id_soal = random_string('alnum', 3);
                $tampung = [
                    $this->input->post('a'),
                    $this->input->post('b'),
                    $this->input->post('c'),
                    $this->input->post('d'),
                ];

                $data = array(
                    'ID_LEVEL'      => $i->post('id_level'),
                    'ID_KATEGORI'   => $i->post('id_kategori'),
                    'ID_SOAL'       => $id_soal,
                    'ID_PENGUJI'    => $id_user,
                    'ISI_SOAL'      => $i->post('isi_soal'),
                    'STATUS_SOAL'   => $i->post('sts_soal'),
                    'KUNCI_JAWABAN' => $i->post('kunci_jawaban'),
                );

                for ($i = 0; $i < count($tampung); $i++)  {
                    $jawaban = array(
                        'ID_SOAL'               => $id_soal,
                        'KETERANGAN_JAWABAN'    => $tampung[$i],
                        'STATUS_JAWABAN'        => $this->input->post('sts_soal')
                    );
                    $this->model_soal->addJawaban($jawaban);
                }
                $this->model_soal->add($data);
                redirect(base_url('soal'), 'refresh');

            }else{

                $data = array(
                    'title'     => 'Add soal',
                    'lvl'       => $lvl,
                    'ktg'       => $ktg,
                    'isi'       => 'admin/soal/add_soal'
                );
                $this->load->view('admin/layout/wrapper', $data, FALSE);

            }

        }

        public function edit_ctrl($id){

            if(isset($id) && !empty($id) && !is_numeric($id)){

               $id = decrypt_url($id);
               
               if(isset($id) && !empty($id)){

                    $detail = $this->model_soal->detail($id);

                    $valid = $this->form_validation;

                    if($this->input->post('isi_soal') !== $detail->ISI_SOAL){

                        $valid->set_rules(
                            'isi_soal',
                            'Soal',
                            'required|is_unique[soal.ISI_SOAL]',
                            array(
                                'required'      => '%s tidak boleh kosong',
                                'is_unique'     => '%s Telah ditambahkan'
                            )
                        );

                    }else{

                        $valid->set_rules(
                            'isi_soal',
                            'Soal',
                            'required',
                            array(
                                'required'      => '%s tidak boleh kosong'
                            )
                        );

                    }     
                    
                    $valid->set_rules(
                        'a',
                        'A',
                        'required',
                        array(
                            'required'      => '%s Tidak boleh kosong'
                        )
                    );
        
                    $valid->set_rules(
                        'b',
                        'B',
                        'required',
                        array(
                            'required'      => '%s Tidak boleh kosong'
                        )
                    );
        
                    $valid->set_rules(
                        'c',
                        'C',
                        'required',
                        array(
                            'required'      => '%s Tidak boleh kosong'
                        )
                    );
        
                    $valid->set_rules(
                        'd',
                        'D',
                        'required',
                        array(
                            'required'      => '%s Tidak boleh kosong'
                        )
                    );

                    if($valid->run()){

                        $i = $this->input;
                        $id_user = $this->session->userdata('id_user');
                        $tampung = [
                            $this->input->post('a'),
                            $this->input->post('b'),
                            $this->input->post('c'),
                            $this->input->post('d'),
                        ];

                        $tampungId = [
                            $this->input->post('idA'),
                            $this->input->post('idB'),
                            $this->input->post('idC'),
                            $this->input->post('idD'),
                        ];

                        $data = array(
                            'ID_SOAL'       => $id,
                            'ID_PENGUJI'    => $id_user,
                            'ISI_SOAL'      => $i->post('isi_soal'),
                            'STATUS_SOAL'   => $i->post('sts_soal'),
                            'KUNCI_JAWABAN' => $i->post('kunci_jawaban'),
                            
                        );

                        if($this->input->post('a') !== $detail->KETERANGAN_JAWABAN || $this->input->post('b') !== $detail->KETERANGAN_JAWABAN || $this->input->post('c') !== $detail->KETERANGAN_JAWABAN || $this->input->post('d') !== $detail->KETERANGAN_JAWABAN){

                            for ($i = 0; $i < count($tampung); $i++)  {
                                $jawaban = array(
                                    'ID_JAWABAN'            => $tampungId[$i],
                                    'KETERANGAN_JAWABAN'    => $tampung[$i],
                                    'STATUS_JAWABAN'        => $this->input->post('sts_soal')
                                );
                                $this->model_soal->editJawaban($jawaban);
                            }

                            $this->model_soal->edit($data);
                            redirect(base_url('soal'), 'refresh');

                        }else{
                            $this->model_soal->edit($data);
                            redirect(base_url('soal'), 'refresh');
                        }

                    }else{

                        $data = array(
                            
                            'title'     => 'Edit',
                            'detail'    => $detail,
                            'isi'       => 'admin/soal/edit_soal'

                        );
                        $this->load->view('admin/layout/wrapper', $data, FALSE);
                    }

               }else{

               }

            }else{

            }

        }

        public function delete_ctrl($id){

            if(isset($id) && !empty($id) && !is_numeric($id)){

                $id = decrypt_url($id);

                if(isset($id) && !empty($id)){
                    
                    $data = array(
                        'id'        => $id
                    );
                    $this->model_soal->delete($data);
                    redirect(base_url('soal'), 'refresh');

                }else{
                    
                }

            }else{

            }

        }

    }

?>