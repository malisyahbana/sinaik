<?php
include_once "../header.php";

?>
<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Upload Berkas Pendukung</h3>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
            </ul>
        </div>
    </div>
</div>
<!-- Top Bar Ends -->
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <!-- <h4>Responsive Table</h4> -->
            </div>
            <div class="panel-body">
                <form id="menuForm" method="POST" action="psub.php" enctype="multipart/form-data">
                    <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM tpengajuan  WHERE idPeng = '$id' ";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Kode Pengajuan</label>
                                <input type="text" class="form-control" id="idPeng" name="idPeng" value="<?= $row['idPeng'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Judul Berkas</label>
                                <input type="text" class="form-control" id="nmSer" name="nmSer" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Upload Berkas</label>
                                <input type="file" class="form-control" name="berKas" id="berKas" />
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
                            <button type="submit" id="simpan" name="sub" class="btn btn-success">Simpan</button>
                            <button type="submit" name="back" class="btn btn-warning">Selesai</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tabel -->

<?php
$id = $_GET['id'];
$no = '1';
$query = "SELECT * FROM tpengajuan JOIN tpendukung ON tpendukung.idPeng = tpengajuan.idPeng  WHERE tpengajuan.idPeng = '$id' ";
$result = mysqli_query($link, $query);
?>
<!-- Row Konten -->
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <!-- <h4>Responsive Table</h4> -->
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Berkas</th>
                                <th>Berkas Upload</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $row['nmSer'] ?></td>
                                    <td><?= $row['berKas'] ?></td>
                                    <td>
                                        <div class="btn-group text-center">
                                            <a href="#" onclick="myFunction()" class="badge badge-warning"><i class="icon-file-text2">Tinjau Berkas</i></a>
                                            <a href="deldukung.php?id=<?= $row['idDukung'] ?>" id="hapus" class="badge badge-danger"><i class="icon-trash">Delete</i></a>
                                        </div>
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
            <!-- <li>
                <a href="#" onclick="myFunction()" class="btn btn-warning"><span><i class="icon-print"></i></span>Cetak Data Pemakai Kendaraan Dinas</a>
            </li> -->
        </div>
    </div>
</div>
<!-- Row Ends -->


<?php
include_once "../footer.php";
?>