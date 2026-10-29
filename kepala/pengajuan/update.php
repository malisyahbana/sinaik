<?php
include_once "../header.php";

?>
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Periksa Data Pengajuan</h3>
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
                    $sql = "SELECT * FROM tpengajuan LEFT JOIN tpegawai ON tpengajuan.idPeg = tpegawai.idPeg LEFT JOIN 
                            tgolongan ON tgolongan.idGol = tpegawai.idGol LEFT JOIN 
                            tjabatan ON tjabatan.idJab = tpegawai.idJab WHERE idJab = '$id' ";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Kode Pengajuan</label>
                                <input type="text" class="form-control" id="idJab" name="idJab" value="<?= $row['idPeng']; ?>" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Nama Pegawai</label>
                                <input type="text" class="form-control" id="idPeg" name="idPeg" value="<?= $row['idPeg'] ?>" />
                                <input type="text" class="form-control" id="nAma" name="nAma" value="<?= $row['nAma'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Golongan Awal</label>
                                <Select class="form-control" name="idGol">
                                    <option <?php if ($row['idGol'] == $row['idGol']) {
                                                echo "Selected";
                                            } ?>><?= $row['tKt'] ?> - <?= $row['sBt'] ?> </option>
                                    <?php
                                    $result = mysqli_query($link, "SELECT * FROM tgolongan");
                                    while ($data = mysqli_fetch_assoc($result)) :
                                    ?>
                                        <option value="<?= $data['idGol'] ?>"><?= $data['tKt'] ?> - <?= $data['sBt'] ?></option>
                                    <?php endwhile ?>
                                </Select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Jabatan Awal</label>
                                <Select class="form-control" name="idGol">
                                    <option <?php if ($row['idJab'] == $row['idJab']) {
                                                echo "Selected";
                                            } ?>><?= $row['jaB'] ?> - <?= $row['bAg'] ?> </option>
                                    <?php
                                    $result = mysqli_query($link, "SELECT * FROM tjabatan");
                                    while ($data = mysqli_fetch_assoc($result)) :
                                    ?>
                                        <option value="<?= $data['idJab'] ?>"><?= $data['jaB'] ?> - <?= $data['bAg'] ?></option>
                                    <?php endwhile ?>
                                </Select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Golongan Baru</label>
                                <Select class="form-control" name="idGol">
                                    <option <?php if ($row['idGol'] == $row['idGol']) {
                                                echo "Selected";
                                            } ?>><?= $row['tKt'] ?> - <?= $row['sBt'] ?> </option>
                                    <?php
                                    $result = mysqli_query($link, "SELECT * FROM tgolongan");
                                    while ($data = mysqli_fetch_assoc($result)) :
                                    ?>
                                        <option value="<?= $data['idGol'] ?>"><?= $data['tKt'] ?> - <?= $data['sBt'] ?></option>
                                    <?php endwhile ?>
                                </Select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Jabatan Baru</label>
                                <Select class="form-control" name="idGol">
                                    <option <?php if ($row['idJab'] == $row['idJab']) {
                                                echo "Selected";
                                            } ?>><?= $row['jaB'] ?> - <?= $row['bAg'] ?> </option>
                                    <?php
                                    $result = mysqli_query($link, "SELECT * FROM tjabatan");
                                    while ($data = mysqli_fetch_assoc($result)) :
                                    ?>
                                        <option value="<?= $data['idJab'] ?>"><?= $data['jaB'] ?> - <?= $data['bAg'] ?></option>
                                    <?php endwhile ?>
                                </Select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Tanggal Pengajuan</label>
                                <input type="date" class="form-control" id="tglP" name="tglP" value="<?= $row['tglP'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Status Pengajuan</label>
                                <input type="text" class="form-control" id="staTus" name="staTus" value="<?= $row['staTus'] ?>" />
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