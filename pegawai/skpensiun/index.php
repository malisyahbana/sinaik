<?php
include_once "../header.php";

?>
<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Daftar SK Pensiun & Pensiun Dini</h3>
                <p>Data SK / <a href="#">SK</a> / <a href="<?= base_url() ?>/admin/dashboard/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="#" onclick="myFunction()" class="btn btn-info"><span><i class="icon-download5"></i></span>Cetak Daftar SK</a>
                </li>
                <li>
                    <a href="add.php" class="btn btn-success"><i class="icon-add-user"></i> Tambah</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Top Bar Ends -->



<?php
$idPeg = $_SESSION['idPeg'];
$no = '1';
$query = "SELECT * FROM tpensiun LEFT JOIN tpegawai ON tpensiun.idPeg = tpegawai.idPeg JOIN tgolongan ON tgolongan.idGol = tpegawai.idGol JOIN tjabatan ON tjabatan.idJab = tpegawai.idJab JOIN skpen ON tpensiun.idPen = skpen.idPen WHERE tpensiun.idPeg = $idPeg ";
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
                                <th>No</th>
                                <th>Nomor SK Pensiun</th>
                                <th>Tanggal Pensiun Pensiun</th>
                                <th>NIP Pegawai</th>
                                <th>Nama Pegawai</th>
                                <th>Tanggal Keluar SK</th>
                                <th>Tanggal Keluar SK</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $row['noSur']; ?></td>
                                    <td><?= $row['tglPen']; ?></td>
                                    <td><?= $row['nIp']; ?></td>
                                    <td><?= $row['nAma']; ?></td>
                                    <td><?= $row['tglTtd']; ?></td>
                                    <td><?= $row['tTd']; ?></td>
                                    <td>
                                        <center>
                                            <div class="btn-group text-center">
                                                <a href="#" onclick="toFunction()" id="hapus" class="badge badge-warning"><i class="icon-printer-text">Cetak SK</i></a>
                                                <a href="update.php?id=<?php echo $row[0]; ?>" id="hapus" class="badge badge-info"><i class="icon-printer-text">Perbaikan</i></a>
                                                <a href="delete.php?id=<?php echo $row[0]; ?>" id="hapus" class="badge badge-danger"><i class="icon-printer-text">Hapus</i></a>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                                <script>
                                    function toFunction() {
                                        window.open("cetak.php?id=<?php echo $row['idSk']; ?>");
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
        window.open("lskpen.php");
    }
</script>

<?php
include_once "../footer.php";
?>