<?php
include_once "../header.php";

?>
<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Daftar SK Kenaikan Pangkat</h3>
                <p>Data SK / <a href="#">SK</a> / <a href="<?= base_url() ?>/admin/dashboard/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <!-- <li>
                    <a href="#" onclick="myFunction()" class="btn btn-info"><span><i class="icon-download5"></i></span>Cetak Daftar SK</a>
                </li>
                <li>
                    <a href="add.php" class="btn btn-success"><i class="icon-add-user"></i> Tambah</a>
                </li> -->
            </ul>
        </div>
    </div>
</div>
<!-- Top Bar Ends -->



<?php
$idPeg = $_SESSION['idPeg'];
$no = '1';
$query = "SELECT * FROM tnaik LEFT JOIN tpegawai ON tnaik.idPeg=tpegawai.idPeg LEFT JOIN 
tgolongan ON tgolongan.idGol = tpegawai.idGol LEFT JOIN 
tjabatan ON tjabatan.idJab = tpegawai.idJab WHERE tpegawai.idPeg = '$idPeg' ";
$result = mysqli_query($link, $query);
?>
<!-- Row Konten -->
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-blue">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Nomor SK Naik Pangkat</th>
                                <th rowspan="2">Kode Pengajuan</th>
                                <th rowspan="2">NIP Pegawai</th>
                                <th rowspan="2">Nama Pegawai</th>
                                <th colspan="2" align="center">Golongan Terbaru</th>
                                <th rowspan="2">Jabatan Terbaru</th>
                                <th rowspan="2">Tanggal Keluar SK</th>
                                <th rowspan="2">Action</th>
                            </tr>
                            <tr>
                                <th>Tingkat</th>
                                <th>Sebutan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $row['noSk']; ?></td>
                                    <td><?= $row['idPeng']; ?></td>
                                    <td><?= $row['nIp']; ?></td>
                                    <td><?= $row['nAma']; ?></td>
                                    <td><?= $row['tKt']; ?></td>
                                    <td><?= $row['sBt']; ?></td>
                                    <td><?= $row['jaB']; ?></td>
                                    <td><?= $row['tglNaik']; ?></td>
                                    <td>
                                        <center>
                                            <div class="btn-group text-center">
                                                <a href="#" onclick="myFunction()" id="hapus" class="badge badge-danger"><i class="icon-printer-text">Cetak SK</i></a>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                                <script>
                                    function myFunction() {
                                        window.open("cetak.php?id=<?php echo $row['idNaik']; ?>");
                                    }
                                </script>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row Ends -->



<?php
include_once "../footer.php";
?>