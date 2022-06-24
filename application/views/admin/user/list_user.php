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
                                <a class="btn btn-primary" href="<?=base_url('user/add')?>">Add</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>NAMA</th>
                                                <th>EMAIL</th>
                                                <th>NO HP</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; 
                                                foreach($listUser as $listUser){?>
                                            <tr style="color: indigo;">
                                                <td><?=$no?></td>
                                                <td><?=$listUser->NAMA_PENGUJI?></td>
                                                <td><?=$listUser->EMAIL_PENGUJI?></td>
                                                <td><?=$listUser->NO_HP_PENGUJI?></td>
                                                <td>
                                                    <a class="btn btn-success" href="<?=base_url('user/edit/'.encrypt_url($listUser->ID_PENGUJI).'')?>">Edit</a>
                                                    <!-- <a class="btn btn-danger"href="<?=base_url('user/delete/'.encrypt_url($listUser->ID_PENGUJI).'')?>">Delete</a> -->
                                                </td>
                                            </tr>
                                            <?php $no++; }?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>NO</th>
                                                <th>NAMA</th>
                                                <th>EMAIL</th>
                                                <th>NO HP</th>
                                                <th>ACTION</th>
                                            </tr>
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