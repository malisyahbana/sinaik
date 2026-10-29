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
                <h3>SK Kenaikan Pangkat</h3>
                <p>Data SK / <a href="#">SK</a> / <a href="<?= base_url() ?>/admin/dashboard/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="diterima.php" class="btn btn-danger"><i class="icon-reply"></i> Kembali</a>
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
                    $carikode = mysqli_query($link, "SELECT max(noSk) FROM tnaik ");
                    $datakode = mysqli_fetch_array($carikode);
                    if ($datakode) {
                        $nilaikode = substr($datakode[0], 1);
                        $kode = (int)$nilaikode;

                        $kode = $kode + 1;
                        $kodeotomatis = str_pad($kode, 3, "0", STR_PAD_LEFT);
                    } else {
                        $kodeotomatis = "001";
                    }
                    $f = 'SK';
                    $c = 'KDG';
                    $d = array('', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII');
                    $e = date('Y');
                    $idOto = $kodeotomatis . '/' . $f . '/' . $c . '/' . $d[date('n')] . '/' . $e;
                    ?>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Nomor SK Naik Pangkat</label>
                                <input type="text" class="form-control" id="noSk" name="noSk" value="<?= $idOto; ?>" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Tanggal Pengajuan</label>
                                <input type="date" class="form-control" id="tglNaik" name="tglNaik" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Kode Pengajuan</label>
                                <input type="text" class="form-control" id="idJab" name="idPeng" value="<?= $row['idPeng']; ?>" readonly />
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
                                <label class="control-label">Golongan Diajuakan</label>
                                <input type="hidden" class="form-control" id="idGol" name="idGol" value="<?= $row['inGol'] ?> " readonly />
                                <input type="text" class="form-control" id="tKt" name="tKt" value="<?= $row['tKt'] ?> - <?= $row['sBt'] ?>" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Jabatan Diajukan</label>
                                <input type="hidden" class="form-control" id="idJab" name="idJab" value="<?= $row['idJab'] ?> " readonly />
                                <input type="text" class="form-control" id="jaB" name="jaB" value="<?= $row['jaB'] ?> - <?= $row['bAg'] ?>" readonly />
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
                                <Select class="form-control" name="sT" id="sT">
                                    <option <?php if ($row['sT'] == "Diajukan") {
                                                echo "Selected";
                                            } ?>>Diajukan</option>
                                    <option <?php if ($row['sT'] == "Diterima") {
                                                echo "Selected";
                                            } ?>>Diterima</option>
                                    <option <?php if ($row['sT'] == "Ditolak") {
                                                echo "Selected";
                                            } ?>>Ditolak</option>
                                    <option <?php if ($row['sT'] == "Perbaikan") {
                                                echo "Selected";
                                            } ?>>Perbaikan</option>
                                </select>
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
                            <button type="submit" id="simpan" name="snaik" class="btn btn-success">Simpan</button>
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