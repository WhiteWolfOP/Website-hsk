<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Backend | Hanyu Shuiping Kaoshi</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/images/dragon.png')?>">
    <link rel="stylesheet" href="<?=base_url('assets/vendor/owl-carousel/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/vendor/owl-carousel/css/owl.theme.default.min.css')?>">
    <link href="<?=base_url('assets/vendor/jqvmap/css/jqvmap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/vendor/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">

    <!-- Daterange picker -->
    <link href="<?=base_url('assets/vendor/bootstrap-daterangepicker/daterangepicker.css')?>" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="<?=base_url('assets/vendor/clockpicker/css/bootstrap-clockpicker.min.css')?>" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="<?=base_url('assets/vendor/jquery-asColorPicker/css/asColorPicker.min.css')?>" rel="stylesheet">
    <!-- Material color picker -->
    <link href="<?=base_url('assets/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')?>" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="<?=base_url('assets/vendor/pickadate/themes/default.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/vendor/pickadate/themes/default.date.css')?>">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="#" class="brand-logo">
                <img class="logo-abbr" src="<?=base_url('assets/images/dragon.png')?>" alt="">
                <p class="brand-title"><?= $this->session->userdata('nama_user')?></p>
                <!-- <img class="brand-title" src="<?=base_url('assets/images/logo-text.png')?>" alt=""> -->
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->