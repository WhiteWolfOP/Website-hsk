<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                        <h4>Hai, <?= $this->session->userdata('nama_user')?></h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="btn btn-primary" href="<?=base_url('soal/add')?>">Add</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Soal</th>
                                                <th>Level soal</th>
                                                <th>Kategori soal</th>
                                                <th>Status soal</th>
                                                <th>Kunci jawaban</th>
                                                <th>Jumlah jawaban</th>
                                                <!-- <th>C</th>
                                                <th>D</th>
                                                <th>Kunci</th>
                                                <th>Sts soal</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; 
                                                foreach($listing as $listing){?>
                                            <tr style="color: indigo;">
                                                <td><?=$no?></td>
                                                <td><?=$listing->ISI_SOAL?></td>
                                                <td><?=$listing->PILIHAN_LEVEL?></td>
                                                <?php if($listing->ID_KATEGORI == "r1" || $listing->ID_KATEGORI == "r2"|| $listing->ID_KATEGORI ==  "r3"|| $listing->ID_KATEGORI == "r4"){?>
                                                    <td><p>Reading</p></td> 
                                                <?php }else{?>
                                                    <td><p>Writing</p></td> 
                                                <?php }?>
                                                <td><?=$listing->STATUS_SOAL?></td>
                                                <td><?=$listing->KUNCI_JAWABAN?></td>
                                                <td><?=$listing->jumlah_jawaban?></td>
                                                <!-- <td><?=$listing->d?></td>
                                                <td><?=$listing->kunci?></td>
                                                <td><?=$listing->sts_soal?></td> -->
                                                <td>
                                                    <a class="btn btn-success" href="<?=base_url('soal/edit/'.encrypt_url($listing->ID_SOAL).'')?>">Edit</a>
                                                    <!-- <a class="btn btn-danger"href="<?=base_url('soal/delete/'.encrypt_url($listing->id).'')?>">Delete</a> -->
                                                </td>
                                            </tr>
                                            <?php $no++; }?>
                                        </tbody>
                                        <tfoot>
                                        <th>NO</th>
                                                <th>Soal</th>
                                                <th>Level soal</th>
                                                <th>Kategori soal</th>
                                                <th>Status soal</th>
                                                <th>Kunci jawaban</th>
                                                <th>Jumlah jawaban</th>
                                                <!-- <th>C</th>
                                                <th>D</th>
                                                <th>Kunci</th>
                                                <th>Sts soal</th> -->
                                                <th>Action</th>
                                        </tfoot>
                                    </table>
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