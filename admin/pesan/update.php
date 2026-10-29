<?php
include_once "../header.php";

?>
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Tambah Data Jabatan</h3>
                <p>Data Jabatan / <a href="#">Jabatan</a> / <a href="<?= base_url() ?>/admin/dashboard/index.php">Home</a></p>
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
                    <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM tpesan JOIN tpegawai ON tpegawai.idPeg = tpesan.idPeg WHERE idPsn = '$id' ";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Penerima</label>
                                <input type="text" class="form-control pencarian" value="<?= $row['nAma'] ?>" id="nAma" name="nama" readonly />
                                <input type="hidden" class="form-control" id="idPeg" value="<?= $row['idPeg'] ?>" name="idPeg" />
                                <input type="hidden" class="form-control" id="idPeg" value="<?= $row['idPsn'] ?>" name="idPsn" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Isi Notifikasi</label>
                                <input type="text" class="form-control" id="iSi" name="iSi" value="<?= $row['iSi'] ?>" />
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
                            <button type="submit" id="simpan" name="ubah" class="btn btn-success">Simpan</button>
                            <button type="reset" name="reset" class="btn btn-warning">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

</script>
<?php
include_once "../footer.php";
?>