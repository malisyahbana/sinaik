<?php
include_once "../header.php";

?>
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Data Golongan Pankat</h3>
                <p>Data Golongan / <a href="#">Golongan</a> / <a href="<?= base_url() ?>/admin/dashboard/index.php">Home</a></p>
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
                    $sql = "SELECT * FROM tpegawai WHERE idPeg = '$id' ";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_array($result);
                    $pass = $link->real_escape_string($row['pAss']);

                    $password = md5($pass);
                    ?>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Nama Pegawai</label>
                                <input type="hidden" class="form-control" id="idPeg" name="idPeg" value="<?= $row['idPeg'] ?>" readonly />
                                <input type="text" class="form-control" id="nAma" name="nAma" value="<?= $row['nAma'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Username</label>
                                <input type="text" class="form-control" id="uSr" name="uSr" value="<?= $row['uSr'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Password</label>
                                <input type="text" class="form-control" id="pAss" name="pAss" placeholder="Silahkan Masukan Password Baru" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Pilih Level Pengguna</label>
                                <select type="text" class="form-control" id="lVl" name="lVl">
                                    <option <?php if ($row['lVl'] == "Admin") {
                                                echo "Selected";
                                            } ?>>Admin</option>
                                    <option <?php if ($row['lVl'] == "Pegawai") {
                                                echo "Selected";
                                            } ?>>Pegawai</option>
                                    <option <?php if ($row['lVl'] == "KADIS") {
                                                echo "Selected";
                                            } ?>>KADIS</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Keterangan Status</label>
                                <input type="text" class="form-control" id="sTs" name="sTs" value="<?= $row['sTs'] ?>" />
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