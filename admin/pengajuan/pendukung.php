<?php
include_once "../header.php";

?>
<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Berkas Pendukung Pengajuan Kenaikan Pangkat</h3>
                <!-- <p>Data Jabatan / <a href="#">Jabatan</a> / <a href="<?= base_url() ?>/admin/dashboard/index.php">Home</a></p> -->
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <!-- <li>
                    <a href="#" onclick="myFunction()" class="btn btn-info"><span><i class="icon-download5"></i></span>Cetak Data Jabatan</a>
                </li> -->
                <li>
                    <a href="index.php" class="btn btn-danger"><i class="icon-reply"></i> Kembali</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Top Bar Ends -->



<?php
$id = $_GET['id'];
$no = '1';
$query = "SELECT * FROM tpengajuan LEFT JOIN tpendukung ON tpengajuan.idPeng = tpendukung.idPeng WHERE tpendukung.idPeng = '$id'";
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
                                <th>Judul Berkas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $row['nmSer']; ?></td>
                                    <td>
                                        <center>
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" aria-expanded="true"><span class="circless animate"></span>Default <span class="caret"></span></button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li><a href="#" onclick="myFunction()">Tinjau Berkas</a></li>
                                                    <!-- <li><a href="delber.php?id=<?php echo $row['idDukung']; ?>">Hapus Berkas</a></li> -->
                                                </ul>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                                <script>
                                    function myFunction() {
                                        window.open("tinjau.php?id=<?= $row['idDukung'] ?>");
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