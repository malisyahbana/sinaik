<?php
include_once "../header.php";
?>
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Tambah Akun Pegawai</h3>
                <p>Data Akun / <a href="#">Akun</a> / <a href="<?= base_url() ?>/admin/dashboard/index.php">Home</a></p>
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
                    $query = mysqli_query($link, "SELECT max(idPeg) as kodeTerbesar FROM tpegawai");
                    $data = mysqli_fetch_array($query);
                    $kodeMenu = $data['kodeTerbesar'];
                    $urutan = (int) substr($kodeMenu, 3);
                    $urutan++;
                    $huruf = "315";
                    $kodeM = $huruf . sprintf($urutan);
                    ?>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Nama Pegawai</label>
                                <input type="hidden" class="form-control" id="idPeg" name="idPeg" value="<?= $kodeM; ?>" />
                                <input type="text" class="form-control" id="nAma" name="nAma" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Username</label>
                                <input type="text" class="form-control" id="uSr" name="uSr" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Password</label>
                                <input type="password" class="form-control" id="pAss" name="pAss" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">PIlih Level Pengguna</label>
                                <Select class="form-control" name="lVl" id="lVl">
                                    <option value=""> -->Level Pengguna<-- </option>
                                    <option value="Admin">Administrator</option>
                                    <option value="Pegawai">Pegawai</option>
                                    <option value="KADIS">KADIS</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Keterangan Status</label>
                                <input type="text" class="form-control" id="sTs" name="sTs" />
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