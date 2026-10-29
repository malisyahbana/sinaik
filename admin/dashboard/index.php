<?php
include_once "../header.php";
?>

<!-- Row Konten -->
<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
    <div class="row gutter">
        <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
            <?php
            $mhs = mysqli_query($link, "SELECT count(*) as hasil FROM tpegawai WHERE NOT nAma = 'Administrator'");
            $hitungmhs = mysqli_fetch_array($mhs);
            ?>
            <div class="panel height1">
                <div class="panel-heading">
                    <h4>Jumlah Pegawai Terdaftar </h4>
                </div>
                <div class="panel-body">
                    <div class="sessions">
                        <a href="<?= base_url() ?>/admin/pegawai/index.php">
                            <h2 class="text-warning"><?php echo $hitungmhs['hasil']; ?></h2>
                            <div id="users" class="graph"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
            <?php
            $mhs = mysqli_query($link, "SELECT count(*) as hasil FROM tpengajuan");
            $hitungmhs = mysqli_fetch_array($mhs);
            ?>
            <div class="panel height1">
                <div class="panel-heading">
                    <h4>Pengajuan Kenaikan</h4>
                </div>
                <div class="panel-body">
                    <div class="sessions">
                        <a href="<?= base_url() ?>/admin/pengajuan/index.php">
                            <h2 class="text-success"><?php echo $hitungmhs['hasil']; ?></h2>
                            <div id="duration" class="graph"></div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
    <div class="row gutter">
        <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
            <?php
            $mhs = mysqli_query($link, "SELECT count(*) as hasil FROM tpensiun WHERE jNs = 'Pensiun' ");
            $hitungmhs = mysqli_fetch_array($mhs);
            ?>
            <div class="panel height1">
                <div class="panel-heading">
                    <h4>Pengajuan Pensiun</h4>
                </div>
                <div class="panel-body">
                    <div class="sessions">
                        <a href="<?= base_url() ?>/admin/pensiun/pensiun.php">
                            <h2 class="text-info"><?php echo $hitungmhs['hasil']; ?></h2>
                            <div id="bouncerate" class="graph"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
            <?php
            $mhs = mysqli_query($link, "SELECT count(*) as hasil FROM tpensiun WHERE jNs = 'Pensiun Dini' ");
            $hitungmhs = mysqli_fetch_array($mhs);
            ?>
            <div class="panel height1">
                <div class="panel-heading">
                    <h4>Pengajuan Pensiun Dini</h4>
                </div>
                <div class="panel-body">
                    <div class="sessions">
                        <a href="<?= base_url() ?>/admin/pensiun/dini.php">
                            <h2 class="text-danger" fill="#007368"><?php echo $hitungmhs['hasil']; ?></h2>
                            <div id="sessions" class="graph"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
    <div class="row gutter">
        <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
            <?php
            $mhs = mysqli_query($link, "SELECT count(*) as hasil FROM tpengajuan WHERE sT = 'Diterima' ");
            $hitungmhs = mysqli_fetch_array($mhs);
            ?>
            <div class="panel height1">
                <div class="panel-heading">
                    <h4>Jumlah Pengajuan Kenaikan Diterima</h4>
                </div>
                <div class="panel-body">
                    <div class="sessions">
                        <h2 class="text-warning"><?php echo $hitungmhs['hasil']; ?></h2>
                        <div id="bouncerate" class="graph"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
            <?php
            $mhs = mysqli_query($link, "SELECT count(*) as hasil FROM tpengajuan WHERE sT = 'Diterima' ");
            $hitungmhs = mysqli_fetch_array($mhs);
            ?>
            <div class="panel height1">
                <div class="panel-heading">
                    <h4>Jumlah Pengajuan Kenaikan Ditolak</h4>
                </div>
                <div class="panel-body">
                    <div class="sessions">
                        <h2 class="text-success"><?php echo $hitungmhs['hasil']; ?></h2>
                        <div id="bouncerate" class="graph"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
    <div class="row gutter">
        <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
            <?php
            $mhs = mysqli_query($link, "SELECT count(*) as hasil FROM tpengajuan WHERE sT = 'Diterima' ");
            $hitungmhs = mysqli_fetch_array($mhs);
            ?>
            <div class="panel height1">
                <div class="panel-heading">
                    <h4>Jumlah SK Pensiun & Pensiun Dini</h4>
                </div>
                <div class="panel-body">
                    <div class="sessions">
                        <h2 class="text-info2"><?php echo $hitungmhs['hasil']; ?></h2>
                        <div id="sessions" class="graph"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
            <?php
            $mhs = mysqli_query($link, "SELECT count(*) as hasil FROM tnaik ");
            $hitungmhs = mysqli_fetch_array($mhs);
            ?>
            <div class="panel height1">
                <div class="panel-heading">
                    <a href=""></a>
                    <h4>Jumlah SK Kenaikan Pangkat </h4>
                </div>
                <div class="panel-body">
                    <div class="sessions">
                        <h2 class="text-danger"><?php echo $hitungmhs['hasil']; ?></h2>
                        <div id="sessions" class="graph"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row Table -->
<?php
$no = '1';
$query = "SELECT tpengajuan.idPeng, tpegawai.nIp, tpegawai.idPeg, tpegawai.nAma, og.tKt AS tKt1,og.sBt AS sBt1, oj.jaB AS jaB1, ig.tKt AS tKt2, ig.sBt AS sBt2, ij.jaB AS jaB2, tpengajuan.tglP, tpengajuan.cTt, tpengajuan.sT FROM tpengajuan JOIN tpegawai ON tpengajuan.idPeg = tpegawai.idPeg JOIN tgolongan AS og ON og.idGol=tpengajuan.outGol JOIN tgolongan AS ig ON ig.idGol=tpengajuan.inGol JOIN tjabatan AS oj ON tpengajuan.outJab=oj.idJab JOIN tjabatan AS ij ON tpengajuan.inJab=ij.idJab ORDER BY tpengajuan.idPeng ASC";
$result = mysqli_query($link, $query);
?>
<!-- Row Konten -->
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <h4>Data Pengajuan Kenaikan Pangkat</h4>
            </div>
            <div class="panel-heading">
                <!-- <h4>Responsive Table</h4> -->
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Nama Pegawai</th>
                                <th colspan="2" align="center">Golongan Diajukan</th>
                                <th rowspan="2">Jabatan Diajukan</th>
                                <th rowspan="2">Tanggal Diajukan</th>
                                <th rowspan="2">Keterangan</th>
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
                                    <td><?= $row['nAma'] ?></td>
                                    <td><?= $row['tKt2'] ?></td>
                                    <td><?= $row['sBt2'] ?></td>
                                    <td><?= $row['jaB2'] ?></td>
                                    <td><?= date('d-m-Y', strtotime($row['tglP'])) ?></td>
                                    <td><?= $row['sT'] ?></td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$no = '1';
$query = "SELECT * FROM tpensiun LEFT JOIN tpegawai ON tpensiun.idPeg = tpegawai.idPeg JOIN tgolongan ON tgolongan.idGol = tpegawai.idGol JOIN tjabatan ON tjabatan.idJab = tpegawai.idJab ORDER BY idPen ASC";
$result = mysqli_query($link, $query);
?>
<!-- Row Konten -->
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <h4>Data Pengajuan Pensiun</h4>
            </div>
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="basicExample" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">No. Surat</th>
                                <th rowspan="2">NIP </th>
                                <th rowspan="2">Nama </th>
                                <th rowspan="2">Jenis Pensiun</th>
                                <th rowspan="2">Surat Pengantar</th>
                                <th rowspan="2">Surat Rekomendasi</th>
                                <th rowspan="2">Tanggal Pensiun</th>
                                <th colspan="2" align="center">Golongan</th>
                                <th rowspan="2">Jabatan</th>
                                <th rowspan="2">Alamat</th>
                                <th rowspan="2">Status</th>
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
                                    <td><?= $row['noSur'] ?></td>
                                    <td><?= $row['nIp'] ?></td>
                                    <td><?= $row['nAma'] ?></td>
                                    <td><?= $row['jNs'] ?></td>
                                    <td><?= $row['noPgr'] ?></td>
                                    <td><?= $row['noRek'] ?></td>
                                    <td><?= date('d-m-Y', strtotime($row['tglPen'])) ?></td>
                                    <td><?= $row['tKt'] ?></td>
                                    <td><?= $row['sBt'] ?></td>
                                    <td><?= $row['jaB'] ?></td>
                                    <td><?= $row['aLt'] ?></td>
                                    <td><?= $row['kEt'] ?></td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include_once "../footer.php";
?>