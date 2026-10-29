<?php
include_once "../header.php";

?>
<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Tanda Tangan Kepala Dinas</h3>
                <p>Data TTD / <a href="#">TTD</a> / <a href="<?= base_url() ?>/kepala/dashboard/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="add.php" class="btn btn-success"><i class="icon-add-user"></i> Tambah</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Top Bar Ends -->



<?php
$no = '1';
$query = "SELECT * FROM ttd ORDER BY id ASC ";
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
                                <th>Nomor Induk Pegawai</th>
                                <th>Nama Kepala Dinas</th>
                                <th>Tanda Tangan Elektronik</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $row['nip']; ?></td>
                                    <td><?= $row['nama']; ?></td>
                                    <td>
                                        <center>
                                            <img src="<?= base_url(); ?>/img/<?= $row['ttd'] ?>" width="70" heigth="70">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <div class="btn-group text-center">
                                                <a href="update.php?id=<?php echo $row[0]; ?>" id="hapus" class="badge badge-info"><i class="icon-printer-text">Perbaikan</i></a>
                                                <a href="delete.php?id=<?php echo $row[0]; ?>" id="hapus" class="badge badge-danger"><i class="icon-printer-text">Hapus</i></a>
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

<?php
include_once "../footer.php";
?>