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
                                <h4 class="card-title">Tambah soal</h4>
                            </div>
                            <div class="card-body">

                                <?php

                                    echo form_open('soal/add');
                                
                                ?>

                                <div class="basic-form" style="color: #0356fc;">
                                    <form>
                                        
                                        <div class="form-group">
                                        <label>Isi Soal</label>
                                            <textarea class="form-control" rows="4" name="isi_soal"></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label>Jawaban a</label>
                                            <textarea class="form-control" rows="4" name="a" id="comment"></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label>Jawaban b</label>
                                            <textarea class="form-control" rows="4" name="b" id="comment"></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label>Jawaban c</label>
                                            <textarea class="form-control" rows="4" name="c" id="comment"></textarea>
                                        </div>

                                        <div class="form-group">
                                        <label>Jawaban d</label>
                                            <textarea class="form-control" rows="4" name="d" id="comment"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Kunci jawaban</label>
                                            <select class="form-control" name="kunci_jawaban"  required>
                                                <option value="">Pilih jawaban</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                                <option value="4">D</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>Level soal</label>
                                            <select class="form-control" name="id_level">
                                                <?php foreach($lvl as $level){?>
                                                    <option value="<?= $level->ID_LEVEL?>"><?= $level->PILIHAN_LEVEL?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori soal</label>
                                            <select class="form-control" name="id_kategori">
                                                <?php foreach($ktg as $kategori){?>
                                                    <option value="<?= $kategori->ID_KATEGORI?>"><?= $kategori->PILIHAN_LEVEL?> - <?= $kategori->NAMA_KATEGORI?></option>
                                                <?php }?>
                                            </select>
                                        </div>     
                                        <div class="form-group">
                                            <label>Status soal</label>
                                            <select class="form-control" name="sts_soal" required>
                                                <option value="">Pilihan status soal</option>
                                                <option value="aktif">Aktif</option>
                                                <option value="tidak_aktif">Tidak aktif</option>
                                            </select>
                                        </div>
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