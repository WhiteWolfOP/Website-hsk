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

                                    echo form_open('soal/edit/'.encrypt_url($detail->ID_SOAL).'');
                                
                                ?>

                                <div class="basic-form" style="color: #0356fc;">
                                    <form>
                                        
                                        <div class="form-group">
                                        <label>Soal</label>
                                            <textarea class="form-control" rows="4" name="isi_soal" id="comment"><?=$detail->ISI_SOAL?></textarea>
                                        </div>
                                        <?php
                                            $conn = mysqli_connect("localhost", "root", "", "proyek_akhir");
                                            $id_soal = $detail->ID_SOAL;
                                            $query = "SELECT KETERANGAN_JAWABAN FROM jawaban WHERE ID_SOAL LIKE '".$id_soal."'";
                                            $result = mysqli_query($conn, $query);
                                            // $row = mysqli_fetch_all($result);
                                            // $rows = $row;
                                            // var_dump($rows);
                                            // while($row = mysqli_fetch_all($result)){
                                            //     var_dump($row);
                                            // }
                                            // $rows = array();
                                            $counter = 0;
                                            while($row = mysqli_fetch_array($result)) {
                                                $rows[$counter] = $row['KETERANGAN_JAWABAN'];
                                                $counter++;
                                            }
                                            
                                            // $rows = [];
                                            // while($row = $result->fetch_row()) {
                                            //     $rows[] = $row;
                                            // }
                                                
                                            // for ($i = 0; $i < count($rows); $i++)  {
                                            //     $rows[$i];
                                                
                                            // }
                                            
                                            // for ($i=0; $i < count($detail) ; $i++) { 
                                            //     $tampung[$i] = $detail->KETERANGAN_JAWABAN;
                                            // }

                                        ?>
                                        <?php
                                            $conn = mysqli_connect("localhost", "root", "", "proyek_akhir");
                                            $id_soal = $detail->ID_SOAL;
                                            $query = "SELECT ID_JAWABAN FROM jawaban WHERE ID_SOAL LIKE '".$id_soal."'";
                                            $result = mysqli_query($conn, $query);
                                            // $row = mysqli_fetch_all($result);
                                            // $rows = $row;
                                            // var_dump($rows);
                                            // while($row = mysqli_fetch_all($result)){
                                            //     var_dump($row);
                                            // }
                                            $rowsId = array();
                                            $counter = 0;
                                            while($row = mysqli_fetch_array($result)) {
                                                $rowsId[$counter] = $row['ID_JAWABAN'];
                                                $counter++;
                                            }
                                            
                                            // $rows = [];
                                            // while($row = $result->fetch_row()) {
                                            //     $rows[] = $row;
                                            // }
                                                
                                            // for ($i = 0; $i < count($rows); $i++)  {
                                            //     $rows[$i];
                                                
                                            // }
                                            
                                            // for ($i=0; $i < count($detail) ; $i++) { 
                                            //     $tampung[$i] = $detail->KETERANGAN_JAWABAN;
                                            // }

                                        ?>
                                        <div class="form-group">
                                            <input type="hidden" name="idA" value="<?=$rowsId[0]?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="idB" value="<?=$rowsId[1]?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="idC" value="<?=$rowsId[2]?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="idD" value="<?=$rowsId[3]?>">
                                        </div>
                                        <div class="form-group">
                                        <label>Jawaban a</label>
                                            <textarea class="form-control" rows="4" name="a" id="comment"><?=$rows[0]?></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label>Jawaban b</label>
                                            <textarea class="form-control" rows="4" name="b" id="comment"><?=$rows[1]?></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label>Jawaban c</label>
                                            <textarea class="form-control" rows="4" name="c" id="comment"><?=$rows[2]?></textarea>
                                        </div>

                                        <div class="form-group">
                                        <label>Jawaban d</label>
                                            <textarea class="form-control" rows="4" name="d" id="comment"><?=$rows[3]?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Kunci jawaban</label>
                                            <select class="form-control" name="kunci_jawaban">
                                                <option value="1" <?php if($detail->KUNCI_JAWABAN == "1"){
                                                    echo "selected";
                                                }?>>A</option>
                                                <option value="2" <?php if($detail->KUNCI_JAWABAN == "2"){
                                                    echo "selected";
                                                }?>>B</option>
                                                <option value="3" <?php if($detail->KUNCI_JAWABAN == "3"){
                                                    echo "selected";
                                                }?>>C</option>
                                                <option value="4" <?php if($detail->KUNCI_JAWABAN == "4"){
                                                    echo "selected";
                                                }?>>D</option>
                                            </select>
                                        </div>
                                        <br>
                                        <!-- <div class="form-group">
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
                                        </div>      -->
                                        <div class="form-group">
                                            <label>Status soal</label>
                                            <select class="form-control" name="sts_soal">
                                            <option value="tidak_aktif">Tidak aktif</option>
                                                <!-- <option value="">Pilihan status soal</option> -->
                                                <option value="aktif" <?php if($detail->STATUS_SOAL == "aktif"){
                                                    echo "selected";
                                                }?>>Aktif</option>
                                                
                                            </select>
                                        </div>

                                        <!-- <div class="form-group">
                                            <label>Kunci jawaban</label>
                                            <select class="form-control" name="kunci">
                                                <option value="1"<?php if($detail->kunci == 1){
                                                    echo "selected";
                                                }?>>A</option>
                                                <option value="2"<?php if($detail->kunci == 2){
                                                    echo "selected";
                                                }?>>B</option>
                                                <option value="3"<?php if($detail->kunci == 3){
                                                    echo "selected";
                                                }?>>C</option>
                                                <option value="4"<?php if($detail->kunci == 4){
                                                    echo "selected";
                                                }?>>D</option>
                                            </select>
                                        </div>
                                        <br>    
                                        <div class="form-group">
                                            <label>Status soal</label>
                                            <select class="form-control" name="sts_soal">
                                                <option value="HSK1" <?php if($detail->sts_soal == "HSK1"){
                                                    echo "selected";
                                                }?>>HSK1</option>
                                                <option value="HSK2" <?php if($detail->sts_soal == "HSK2"){
                                                    echo "selected";
                                                }?>>HSK2</option>
                                                <option value="HSK3" <?php if($detail->sts_soal == "HSK3"){
                                                    echo "selected";
                                                }?>>HSK3</option>
                                                <option value="HSK4" <?php if($detail->sts_soal == "HSK4"){
                                                    echo "selected";
                                                }?>>HSK4</option>
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