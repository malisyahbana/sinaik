<?php
include_once "../header.php";

?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM tpengajuan LEFT JOIN tpegawai ON tpengajuan.idPeg = tpegawai.idPeg LEFT JOIN 
                            tgolongan ON tgolongan.idGol = tpegawai.idGol LEFT JOIN 
                            tjabatan ON tjabatan.idJab = tpegawai.idJab WHERE tpengajuan.idPeng = '$id' ";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
?>
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Perbaikan Nomor SK / Tanggal SK</h3>
                <p>Data SK / <a href="#">SK</a> / <a href="<?= base_url() ?>/admin/dashboard/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="index.php" class="btn btn-danger"><i class="icon-reply"></i> Kembali</a>
                </li>
                <!-- <li>
                    <a href="pendukung.php?id=<?php echo $row[0]; ?>" class="btn btn-info"><span><i class="icon-download5"></i></span>Berkas Pendukung</a>
                </li> -->
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
                    $sql = "SELECT * FROM tnaik WHERE idNaik = '$id' ";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Nomor SK Naik Pangkat</label>
                                <input type="hidden" class="form-control" id="idNaik" name="idNaik" value="<?= $row['idNaik'] ?>" readonly />
                                <input type="text" class="form-control" id="noSk" name="noSk" value="<?= $row['noSk'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Tanggal SK </label>
                                <input type="date" class="form-control" id="tglNaik" name="tglNaik" value="<?= $row['tglNaik'] ?>" />
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
                            <button type="submit" id="simpan" name="edit" class="btn btn-success">Simpan</button>
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