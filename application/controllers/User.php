<?php

    class User extends CI_Controller{

        public function __construct()
        {
            parent:: __construct();
            $this->load->model('model_user');
        }

        public function index(){

            $listUser = $this->model_user->listing();

            $data = array(
                'Title '        => 'List user',
                'listUser'      => $listUser,
                'isi'           => 'admin/user/list_user'
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);

        }

        public function add_ctrl(){

            $valid = $this->form_validation;

            $valid->set_rules(
                'nama_user',
                'Nama user',
                'required',
                array(
                    'required'      => '%s Cant be empty'
                )
            );

            $valid->set_rules(
                'no_hp_user',
                'No hp user',
                'required',
                array(
                    'required'      => '%s Cant be empty'
                )
            );

            $valid->set_rules(
                'email_user',
                'email user',
                'required|is_unique[penguji.EMAIL_PENGUJI]',
                array(
                    'required'      => '%s Cant be empty',
                    'is_unique'     => '%s has been added'
                )
            );

            $valid->set_rules(
                'password_user',
                'password user',
                'required',
                array(
                    'required'      => '%s Cant be empty',
                )
            );

            if($valid->run()){

                $i = $this->input;
                $ID_USER = random_string('alnum', 6);

                $data = array(
                    'ID_PENGUJI'        => $ID_USER,
                    'EMAIL_PENGUJI' => $i->post('email_user'),
                    'PASSWORD_PENGUJI' => md5($i->post('password_user')),
                    'NAMA_PENGUJI'      => $i->post('nama_user'),
                    'NO_HP_PENGUJI'     => $i->post('no_hp_user')
                );
                $this->model_user->add($data);
                redirect(base_url('user'), 'refresh');
                
            }else{

                $data = array(
                    'title'     => 'Add users',
                    'isi'       => 'admin/user/add_user'
                );
                $this->load->view('admin/layout/wrapper', $data, FALSE);

            }

        }

        public function edit_ctrl($id_user){

            if(isset($id_user) && !empty($id_user) && !is_numeric($id_user)){

                $id_user = decrypt_url($id_user);

                if(isset($id_user) && !empty($id_user)){

                    $detail = $this->model_user->detail($id_user);

                    $valid = $this->form_validation;

                    $valid->set_rules(
                        'nama_user',
                        'Nama user',
                        'required',
                        array(
                            'required'      => '%s Cant be empty',
                        )
                    );

                    if($this->input->post('email_user') !== $detail->EMAIL_PENGUJI){

                        $valid->set_rules(
                            'email_user',
                            'email penguji',
                            'required|is_unique[penguji.EMAIL_PENGUJI]',
                            array(
                                'required'      => '%s Cant be empty',
                                'is_unique'     => '%s Has been added'
                            )
                        );

                    }else{

                        $valid->set_rules(
                            'email_user',
                            'email penguji',
                            'required',
                            array(
                                'required'      => '%s Cant be empty',
                            )
                        );

                    }

                    if($valid->run()){

                        $i = $this->input;

                        $data = array(
                            'ID_PENGUJI'           => $id_user,
                            'EMAIL_PENGUJI'         => $i->post('email_user'),
                            'NAMA_PENGUJI'         => $i->post('nama_user'),
                            'NO_HP_PENGUJI'     => $i->post('no_hp_user')
                        );
                        $this->model_user->edit($data);
                        redirect(base_url('user'), 'refresh');

                    }else{

                        $data = array(
                            'title'     => 'Edit users',
                            'detail'    => $detail,
                            'isi'       => 'admin/user/edit_user'   
                        );
                        $this->load->view('admin/layout/wrapper', $data, FALSE);

                    }
                    
                }else{

                }

            }

        }

        public function delete_ctrl($id_user){

            if(isset($id_user) && !empty($id_user) && !is_numeric($id_user)){

                $id_user = decrypt_url($id_user);

                if(isset($id_user) && !empty($id_user)){

                    $data = array(
                        'id_user'       => $id_user
                    );
                    $this->model_user->delete($data);
                    redirect(base_url('user'), 'refresh');

                }else{

                }

            }else{

            }

        }

    }

?>