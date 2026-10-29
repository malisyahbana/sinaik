<?php
include_once "../header.php";

?>
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Tambah Pegawai Pensiun</h3>
                <p>Data Pegawai / <a href="#">Dinas Pendidikan</a> / <a href="<?= base_url() ?>/admin/dashboard/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="pensiun.php" class="btn btn-danger"><i class="icon-reply"></i> Kembali</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- konten -->
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <!-- <h4>Responsive Table</h4> -->
            </div>
            <div class="panel-body">
                <form id="menuForm" method="POST" action="proses.php" enctype="multipart/form-data">
                    <?php
                    $query = mysqli_query($link, "SELECT max(idPen) as kodeTerbesar FROM tpensiun");
                    $data = mysqli_fetch_array($query);
                    $kodeMenu = $data['kodeTerbesar'];
                    $urutan = (int) substr($kodeMenu, 3);
                    $urutan++;
                    $huruf = "PEN";
                    $kodeM = $huruf . sprintf($urutan);
                    ?>
                    <?php
                    $carikode = mysqli_query($link, "SELECT max(noSur) FROM tpensiun ");
                    $datakode = mysqli_fetch_array($carikode);
                    if ($datakode) {
                        $nilaikode = substr($datakode[0], 1);
                        $kode = (int)$nilaikode;

                        $kode = $kode + 1;
                        $kodeotomatis = str_pad($kode, 3, "0", STR_PAD_LEFT);
                    } else {
                        $kodeotomatis = "001";
                    }
                    $f = 'SK-P';
                    $c = 'KDG';
                    $d = array('', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII');
                    $e = date('Y');
                    $idOto = $kodeotomatis . '/' . $f . '/' . $c . '/' . $d[date('n')] . '/' . $e;
                    ?>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Kode Pensiun</label>
                                <input type="text" class="form-control" id="idPen" name="idPen" value="<?= $kodeM ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Nomor Surat</label>
                                <!-- <input type="hidden" class="form-control" id="idPen" name="idPen" value="<?= $kodeM ?>" readonly /> -->
                                <input type="text" class="form-control" id="noSur" name="noSur" value="<?= $idOto ?>" readonly />
                                <input type="hidden" class="form-control" id="jNs" name="jNs" value="Pensiun" readonly />
                            </div>
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Tanggal Surat</label>
                                    <input type="date" class="form-control" id="tglSur" name="tglSur" required="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Tanggal Pensiun</label>
                                    <input type="date" class="form-control" id="tglPen" name="tglPen" required="" />
                                </div>
                            </div>
                        </div>
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
                                    <label class="control-label">NIP Pegawai</label>
                                    <input type="text" class="form-control" id="nIp" value="<?= $row['nIp'] ?>" name="nIp" required="" />
                                    <input type="hidden" class="form-control" id="idPeg" name="idPeg" value="<?= $row['idPeg'] ?>" required="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Nama Pegawai</label>
                                    <input type="text" class="form-control" value="<?= $row['nAma'] ?>" id="nAma" name="nAma" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Tanggal Lahir</label>
                                    <input type="text" class="form-control" value="<?= $row['tgLhr'] ?>" id="tgLhr" name="tgLhr" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Pangkat</label>
                                    <input type="text" class="form-control" value="<?= $row['tKt'] ?>" id="tKt" name="tKt" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Golongan</label>
                                    <input type="text" class="form-control" value="<?= $row['sBt'] ?>" id="sBt" name="sBt" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Jabatan</label>
                                    <input type="text" class="form-control" value="<?= $row['jaB'] ?>" id="jaB" name="jaB" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Alamat Pensiun</label>
                                    <input type="text" class="form-control" id="aLmt" name="aLmt" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Keterangan Pensiun</label>
                                    <input type="text" class="form-control" id="kEt" name="kEt" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">*Bila Tidak Tersimpan Silahkan Rubah Kode Pensiun</label>
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
                                <button type="submit" id="sel" name="simpan" class="btn btn-success">Simpan</button>
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