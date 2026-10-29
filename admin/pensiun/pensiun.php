<?php
include_once "../header.php";
?>

<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Data Pensiun DISDIK</h3>
                <p>Data Pensiun / <a href="#">Dinas Pendidikan</a> / <a href="<?= base_url() ?>/admin/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="#" onclick="myFunction()" class="btn btn-info"><span><i class="icon-download5"></i></span>Cetak Data Pensiun</a>
                </li>
                <li>
                    <a href="addpensiun.php" class="btn btn-success"><i class="icon-add-user"></i> Tambah</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Top Bar Ends -->



<?php
$no = '1';
$query = "SELECT * FROM tpensiun LEFT JOIN tpegawai ON tpensiun.idPeg = tpegawai.idPeg JOIN tgolongan ON tgolongan.idGol = tpegawai.idGol JOIN tjabatan ON tjabatan.idJab = tpegawai.idJab WHERE jNs = 'Pensiun Dini' ORDER BY idPen ASC ";
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
                                <th rowspan="2">No. Surat</th>
                                <th rowspan="2">Tanggal Surat</th>
                                <th rowspan="2">NIP Pegawai</th>
                                <th rowspan="2">Nama Pegawai</th>
                                <th rowspan="2">Tanggal Pensiun</th>
                                <th colspan="2" align="center">Golongan</th>
                                <th rowspan="2">Jabatan</th>
                                <th rowspan="2">Alamat</th>
                                <th rowspan="2">Status</th>
                                <th rowspan="2">Action</th>
                            </tr>
                            <tr>
                                <th>Tingkat</th>
                                <th>Pangkat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $row['noSur'] ?></td>
                                    <td><?= $row['tglSur'] ?></td>
                                    <td><?= $row['nIp'] ?></td>
                                    <td><?= $row['nAma'] ?></td>
                                    <td><?= $row['tglPen'] ?></td>
                                    <td><?= $row['tKt'] ?></td>
                                    <td><?= $row['sBt'] ?></td>
                                    <td><?= $row['jaB'] ?></td>
                                    <td><?= $row['aLt'] ?></td>
                                    <td><?= $row['kEt'] ?></td>
                                    <td>
                                        <center>
                                            <div class="btn-group text-center">
                                                <a href="upen.php?id=<?php echo $row[0]; ?>" class="badge badge-info"><i class="icon-pencil2">Udate</i></a>
                                                <a href="delete.php?id=<?php echo $row[0]; ?>" class="badge badge-danger"><i class="icon-trash">Hapus</i></a>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                                <script>
                                    function myFunction() {
                                        window.open("cetak.php?id=<?php echo $row['idPen']; ?>");
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

<script>
    function myFunction() {
        window.open("lpensiun.php");
    }
</script>

<?php
include_once "../footer.php";
?>