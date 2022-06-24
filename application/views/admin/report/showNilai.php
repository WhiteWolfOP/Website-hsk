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
                                echo form_open('nilaiR')
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
                                                <th>No hp</th>
                                                <th>Email</th>
                                                <th>Nilai reading</th>
                                                <th>Nilai writing</th>
                                                <th>Nilai akhir</th>
                                                <th>Level soal</th>
                                                <th>Tgl simpan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; 
                                                foreach($listNilai as $listNilai){?>
                                            <tr style="color: indigo;">
                                                <td><?=$no?></td>
                                                <td><?=$listNilai->NAMA_PESERTA?></td>
                                                <td><?=$listNilai->NO_TELP?></td>
                                                <td><?=$listNilai->EMAIL_PESERTA?></td>
                                                <td><?=$listNilai->NILAI_READING?></td>
                                                <td><?=$listNilai->NILAI_WRITING?></td>
                                                <td><?=$listNilai->NILAI_AKHIR?></td>
                                                <td><?=$listNilai->HSK?></td>
                                                <td><?=$listNilai->TANGGAL_NILAI?></td>
                                            </tr>
                                            <?php $no++; }?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                                <th>NO</th>
                                                <th>Nama</th>
                                                <th>No hp</th>
                                                <th>Email</th>
                                                <th>Nilai reading</th>
                                                <th>Nilai writing</th>
                                                <th>Nilai akhir</th>
                                                <th>Level soal</th>
                                                <th>Tgl simpan</th>
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