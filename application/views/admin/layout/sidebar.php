<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Menu Utama</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?=base_url('dashboard')?>">Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Master</li>
                    <?php if($this->session->userdata('hak_akses') == "penguji"){?>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-layout-25"></i><span class="nav-text">Soal</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?=base_url('soal')?>">List soal</a></li>
                        </ul>
                    </li>
                    <?php }elseif($this->session->userdata('hak_akses') == "pengelola"){?>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-users-mm"></i><span class="nav-text">Penguji</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?=base_url('user')?>">Daftar Penguji</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Report</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-book-open-2"></i><span class="nav-text">Daftar Report</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?=base_url('pesertaR')?>">Report Peserta Pendaftar</a></li>
                            <li><a href="<?=base_url('nilaiR')?>">Report Peserta HSK</a></li>
                        </ul>
                    </li>
                    <?php }?>
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
