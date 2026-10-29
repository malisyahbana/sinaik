<?php
include_once "../header.php";
?>
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Kirim Notifikasi</h3>
                <p>Data Notifikasi / <a href="#">Notifikasi</a> / <a href="<?= base_url() ?>/admin/dashboard/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="index.php" class="btn btn-danger"><i class="icon-reply"></i> Kembali</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- konten -->
<div class="row gutter">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <!-- <h4>Responsive Table</h4> -->
            </div>
            <div class="panel-body">
                <form id="menuForm" method="POST" action="proses.php">
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Penerima</label>
                                <input type="text" class="form-control pencarian" id="nAma" name="nama" readonly />
                                <input type="hidden" class="form-control" id="idPeg" name="idPeg" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Isi Notifikasi</label>
                                <input type="text" class="form-control" id="iSi" name="iSi" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="form-group">

                            <div class="row gutter"></div>
                        </div>
                    </div>
                    <div class="form-group no-margin">
                        <div class="col-md-12">
                            <button type="submit" id="simpan" name="simpan" class="btn btn-success">Simpan</button>
                            <button type="reset" name="reset" class="btn btn-warning">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Tabel -->
<div class="modal fade pencarian" id="laporan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel1"><b>Cari Pegawai</b></h2>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal<i class="icon-cancel"></i> </a>
                </div>
                <?php
                $no = '1';
                $query = "SELECT * FROM tpegawai LEFT JOIN 
tgolongan ON tgolongan.idGol = tpegawai.idGol LEFT JOIN 
tjabatan ON tjabatan.idJab = tpegawai.idJab WHERE NOT nAma = 'Administrator' ORDER BY idPeg ASC";
                $result = mysqli_query($link, $query);
                ?>
                <div class="modal-body">
                    <div class="row gutter">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-blue">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">No</th>
                                                    <th rowspan="2">NIP Pegawai</th>
                                                    <th rowspan="2">Nama Pegawai</th>
                                                    <th rowspan="2">Tanggal Lahir</th>
                                                    <th colspan="2" align="center">Golongan</th>
                                                    <th rowspan="2">Jabatan</th>
                                                </tr>
                                                <tr>
                                                    <th>Tingkat</th>
                                                    <th>Sebutan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($row = mysqli_fetch_array($result)) : ?>
                                                    <tr id="data nama" onClick="masuk(this,'<?= $row['idPeg'] ?>', '<?= $row['nAma'] ?>' )" href="javascript:void(0)">
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?= $row['nIp'] ?></td>
                                                        <td><?= $row['nAma'] ?></td>
                                                        <td><?= $row['tgLhr'] ?></td>
                                                        <td><?= $row['tKt'] ?></td>
                                                        <td><?= $row['sBt'] ?></td>
                                                        <td><?= $row['jaB'] ?></td>
                                                    </tr>
                                                <?php endwhile; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        //focusin berfungsi ketika cursor berada di dalam textbox modal langsung aktif
        $(".pencarian").focusin(function() {
            $("#laporan").modal('show'); // ini fungsi untuk menampilkan modal
        });
        $('#example').DataTable(); // fungsi ini untuk memanggil datatable
    });

    function masuk(txt, data, nama) {
        document.getElementById('idPeg').value = data; // ini berfungsi mengisi value  yang ber id textbox
        document.getElementById('nAma').value = nama; // ini berfungsi mengisi value  yang ber id 
        $("#laporan").modal('hide'); // ini berfungsi untuk menyembunyikan modal
    }
</script>
<?php
include_once "../footer.php";
?>