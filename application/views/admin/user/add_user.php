<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                        <h4>Hai, <?= $this->session->userdata('nama_user')?></h4>
                            <span class="ml-1">Element</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-8 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah penguji</h4>
                            </div>
                            <div class="card-body">

                                <?php

                                    echo form_open('user/add');
                                
                                ?>

                                <div class="basic-form" style="color: #0356fc;">
                                    <form>
                                        
                                        <div class="form-group">
                                        <label>Nama</label>
                                            <input type="text" class="form-control" name="nama_user" required>
                                        </div>
                                        <div class="form-group">
                                        <label>No hp</label>
                                            <input type="number" class="form-control" name="no_hp_user" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Email</label>
                                            <input type="email" class="form-control" name="email_user" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Password</label>
                                            <input type="password" class="form-control" name="password_user" required>
                                        </div>
                                        <!-- <div class="form-group">
                                        <label>Jawaban c</label>
                                            <textarea class="form-control" rows="4" name="c" id="comment"></textarea>
                                        </div>

                                        <div class="form-group">
                                        <label>Jawaban d</label>
                                            <textarea class="form-control" rows="4" name="d" id="comment"></textarea>
                                        </div> -->

                                        <!-- <div class="form-group">
                                            <label>Kunci jawaban</label>
                                            <select class="form-control" name="kunci">
                                                <option value="">Pilih jawaban</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                                <option value="4">D</option>
                                            </select>
                                        </div> -->
                                        <!-- <br>    
                                        <div class="form-group">
                                            <label>Status soal</label>
                                            <select class="form-control" name="sts_soal">
                                                <option value="">Pilihan status soal</option>
                                                <option value="HSK1">HSK1</option>
                                                <option value="HSK2">HSK2</option>
                                                <option value="HSK3">HSK3</option>
                                                <option value="HSK4">HSK4</option>
                                            </select>
                                        </div> -->
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>

                                    <?php form_close();?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->