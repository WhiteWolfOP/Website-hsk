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
                            <button class="btn btn-primary" onclick="printReport('reportTables')">Print</button>
                            </div>
                            <?php
                                echo form_open('pesertaR')
                            ?>
                            <form>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card-body">
                                    <p class="mb-1">Tgl start</p>
                                    <input name="tgl_start" class="datepicker-default form-control" id="datepicker">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card-body">
                                    <p class="mb-1">Tgl end</p>
                                    <input name="tgl_end" class="datepicker-default form-control" id="datepicker">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                <p class="mb-1" style="color: #fff;">Cari</p>
                                <div class="card-body">
                                    <button class="btn btn-success" type="submit">Cari</button>
                                </div> 
                                </div>
                            </div>
                            </form> 
                            <?php
                                echo form_close();

                            ?>
                            <div class="card-body">
                                <div class="table-responsive" id="reportTables">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Nama</th>
                                                <th>Tgl lahir</th>
                                                <th>No hp</th>
                                                <th>Jekel</th>
                                                <th>Email</th>
                                                <th>Alamat</th>
                                                <th>Tgl daftar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; 
                                                foreach($listPeserta as $listPeserta){?>
                                            <tr style="color: indigo;">
                                                <td><?=$no?></td>
                                                <td><?=$listPeserta->NAMA_PESERTA?></td>
                                                <td><?=$listPeserta->TGL_LAHIR?></td>
                                                <td><?=$listPeserta->NO_TELP?></td>
                                                <?php if($listPeserta->JENIS_KELAMIN == "L"){?>
                                                    <td>
                                                        <p>Pria</p>
                                                    </td>
                                                <?php }else{?>
                                                    <td>
                                                        <p>Wanita</p>
                                                    </td>
                                                <?php }?>
                                                <td><?=$listPeserta->EMAIL_PESERTA?></td>
                                                <td><?=$listPeserta->ALAMAT?></td>
                                                <td><?=$listPeserta->TGL_DAFTAR?></td>
                                            </tr>
                                            <?php $no++; }?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                        <th>NO</th>
                                                <th>Nama</th>
                                                <th>Tgl lahir</th>
                                                <th>No hp</th>
                                                <th>Jekel</th>
                                                <th>Email</th>
                                                <th>Alamat</th>
                                                <th>Tgl daftar</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <script>
                             function printReport(divName){
                            var printContents = document.getElementById(divName).innerHTML;
                            var OriginalContents = document.body.innerHTML;

                            document.body.innerHTML = printContents;

                            window.print();

                            document.body.innerHTML = OriginalContents;
                }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->