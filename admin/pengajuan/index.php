<?php
include_once "../header.php";
?>

<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Pengajuan Kenaikan Pangkat Masuk</h3>
                <p>Data Pengajuan / <a href="#">Dinas Pendidikan</a> / <a href="<?= base_url() ?>/admin/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="#" onclick="myFunction()" class="btn btn-info"><span><i class="icon-download5"></i></span>Cetak Pengajuan Masuk</a>
                </li>
                <!-- <li>
                    <a href="add.php" class="btn btn-success"><i class="icon-add-user"></i> Tambah</a>
                </li> -->
            </ul>
        </div>
    </div>
</div>
<!-- Top Bar Ends -->



<?php
$no = '1';
$query = "SELECT tpengajuan.idPeng, tpegawai.nIp, tpegawai.idPeg, tpegawai.nAma, og.tKt AS tKt1,og.sBt AS sBt1, oj.jaB AS jaB1, ig.tKt AS tKt2, ig.sBt AS sBt2, ij.jaB AS jaB2, tpengajuan.tglP, tpengajuan.cTt, tpengajuan.sT FROM tpengajuan JOIN tpegawai ON tpengajuan.idPeg = tpegawai.idPeg JOIN tgolongan AS og ON og.idGol=tpengajuan.outGol JOIN tgolongan AS ig ON ig.idGol=tpengajuan.inGol JOIN tjabatan AS oj ON tpengajuan.outJab=oj.idJab JOIN tjabatan AS ij ON tpengajuan.inJab=ij.idJab ORDER BY tpengajuan.idPeng DESC ";
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
                                <th rowspan="2">NIP Pegawai</th>
                                <th rowspan="2">Nama Pegawai</th>
                                <th colspan="2" align="center">Golongan Awal</th>
                                <th rowspan="2">Jabatan Awal</th>
                                <th colspan="2" align="center">Golongan Diajukan</th>
                                <th rowspan="2">Jabatan Diajukan</th>
                                <th rowspan="2">Tanggal Diajukan</th>
                                <th rowspan="2">Ketrangan</th>
                                <th rowspan="2">Action</th>
                            </tr>
                            <tr>
                                <th>Tingkat</th>
                                <th>Sebutan</th>
                                <th>Tingkat</th>
                                <th>Sebutan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $row['nIp'] ?></td>
                                    <td><?= $row['nAma'] ?></td>
                                    <td><?= $row['tKt1'] ?></td>
                                    <td><?= $row['sBt1'] ?></td>
                                    <td><?= $row['jaB1'] ?></td>
                                    <td><?= $row['tKt2'] ?></td>
                                    <td><?= $row['sBt2'] ?></td>
                                    <td><?= $row['jaB2'] ?></td>
                                    <td><?= $row['tglP'] ?></td>
                                    <td><?= $row['sT'] ?></td>
                                    <td>
                                        <center>
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" aria-expanded="true"><span class="circless animate"></span>Default <span class="caret"></span></button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li><a href="periksa.php?id=<?php echo $row['idPeng']; ?>">Periksa Data</a></li>
                                                    <li><a href="pendukung.php?id=<?php echo $row['idPeng']; ?>">Berkas Pendukung</a></li>
                                                    <li><a href="delete.php?id=<?php echo $row[0]; ?>">Delete</a></li>
                                                </ul>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row Ends -->
<script>
    function myFunction() {
        window.open("lmasuk.php");
    }
</script>
<?php
include_once "../footer.php";
?>