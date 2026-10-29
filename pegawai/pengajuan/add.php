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
                    $query = mysqli_query($link, "SELECT max(idPeng) as kodeTerbesar FROM tpengajuan");
                    $data = mysqli_fetch_array($query);
                    $kodeMenu = $data['kodeTerbesar'];
                    $urutan = (int) substr($kodeMenu, 6);
                    $urutan++;
                    $huruf = "NJK";
                    $kodeMenu = $huruf . sprintf("%04s", $urutan);
                    ?>
                    <?php
                    $idPeg = $_SESSION['idPeg'];
                    $query = "SELECT * FROM tpegawai LEFT JOIN 
                                tgolongan ON tgolongan.idGol = tpegawai.idGol LEFT JOIN 
                                tjabatan ON tjabatan.idJab = tpegawai.idJab WHERE idPeg = $idPeg ";
                    $result = mysqli_query($link, $query);
                    $row = mysqli_fetch_assoc($result);
                    ?>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Kode Pengajuan</label>
                                <input type="text" class="form-control" id="idPeng" name="idPeng" value="<?= $kodeMenu ?>" />
                                <label class="control-label">*Apabila tidak tersimpan silahkan ubah kode pengajuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Nama Pegawai</label>
                                <input type="hidden" class="form-control" id="idPeg" name="idPeg" value="<?= $row['idPeg'] ?>" readonly />
                                <input type="text" class="form-control" id="nAma" name="nAma" value="<?= $row['nAma'] ?>" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Golongan Awal</label>
                                <input type="hidden" class="form-control" id="outGol" name="outGol" value="<?= $row['idGol'] ?>" readonly />
                                <input type="text" class="form-control" id="tKt" name="tKt" value="<?= $row['tKt'] ?> - <?= $row['sBt'] ?> " readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Jabatan Awal</label>
                                <input type="hidden" class="form-control" id="outJab" name="outJab" value="<?= $row['idJab'] ?>" readonly />
                                <input type="text" class="form-control" id="jaB" name="jaB" value="<?= $row['jaB'] ?> - <?= $row['bAg'] ?> " readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Golongan diajukan</label>
                                <Select class="form-control" name="inGol">
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
                                <Select class="form-control" name="inJab">
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
                                <input type="text" class="form-control" id="sT" name="sT" value="Diajukan" readonly />
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
                            <button type="submit" id="simpan" name="simpan" class="btn btn-success">Simpan</button>
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