<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/images/dragon.png')?>">
    <link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <?php

                                        echo form_open(base_url('login'));

                                    ?>

                                    <h4 class="text-center mb-4">Login</h4>
                                    <form>
                                        <!-- <?php
                                            $info = $this->session->flashdata('info');
                                            if($this->session->userdata('username_user')== ""){
                                               echo 'Data session Tidak ADa' ;
                                            }else{
                                                echo 'Data session ADa';
                                            }
                                        ?> -->
                                        
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" name="username_user" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="password_user" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Hak akses : </strong></label>
                                            <select name="hak_akses">
                                                <option value="pengelola">pengelola</option>
                                                <option value="penguji">penguji</option>
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                    <?php echo form_close();?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?=base_url('assets/vendor/global/global.min.js')?>"></script>
    <script src="<?=base_url('assets/js/quixnav-init.js')?>"></script>
    <script src="<?=base_url('js/custom.min.js')?>"></script>

</body>

</html>