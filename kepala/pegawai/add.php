<?php
include_once "../header.php";

?>
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Tambah Data Pegawai</h3>
                <p>Data Pegawai / <a href="#">Dinas Pendidikan</a> / <a href="<?= base_url() ?>/admin/dashboard/index.php">Home</a></p>
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
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <!-- <h4>Responsive Table</h4> -->
            </div>
            <div class="panel-body">
                <form id="menuForm" method="POST" action="proses.php" enctype="multipart/form-data">
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
                                <label class="control-label">Kode Akun</label>
                                <input type="text" class="form-control" id="idPeg" name="idPeg" value="<?= $kodeM ?>" readonly />
                            </div>
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">NIP Pegawai</label>
                                    <input type="text" class="form-control" id="nAma" name="nAma" required="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Nama Pegawai</label>
                                    <input type="text" class="form-control" id="nAma" name="nAma" required="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgLhr" name="tgLhr" required="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Alamat</label>
                                    <input type="text" class="form-control" id="Brg" name="Brg" required="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Jenis Kelamin</label>
                                    <Select class="form-control" name="jK" id="jK">
                                        <option value="">-->Jenis Kelamin<-- </option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Pendidikan Terakhir</label>
                                    <input type="text" class="form-control" id="penD" name="penD" required="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Nomor Telpon</label>
                                    <input type="text" class="form-control" id="noPe" name="noPe" required="" />
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- batas bagian kiri dan kanan -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="panel panel-blue">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Pilih Golongan</label>
                            <Select class="form-control" name="idGol">
                                <option value="0">Golongan - Formasi</option>
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
                            <label class="control-label">Pilih Jabatan</label>
                            <Select class="form-control" name="idGol">
                                <option value="0">Jabatan</option>
                                <?php
                                $result = mysqli_query($link, "SELECT * FROM tjabatan");
                                while ($data = mysqli_fetch_assoc($result)) :
                                ?>
                                    <option value="<?= $data['idJab'] ?>"><?= $data['jaB'] ?></option>
                                <?php endwhile ?>
                            </Select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Pas Foto Pegawai</label>
                            <input type="file" class="form-control" name="gbr" id="gbr" accept='image/*' onchange='readURL(event)' /> <br>
                            <img src="" alt="" id="output" height="150" width="150">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Keterangan Data Pegawai</label>
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
                        <button type="submit" id="sel" name="simpan" class="btn btn-success">Simpan</button>
                        <button type="reset" name="reset" class="btn btn-warning">Batal</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var readURL = function(event) {
        var input = event.target;

        var reader = new FileReader();
        reader.onload = function() {
            var dataURL = reader.result;
            var output = document.getElementById('output');
            output.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
    };
</script>
<script type="text/javascript">

</script>
<?php
include_once "../footer.php";
?>