<?php
include_once "../header.php";
?>
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Tambah SK Kenaikan Pangkat</h3>
                <p>Data SK / <a href="#">SK</a> / <a href="<?= base_url() ?>/admin/dashboard/index.php">Home</a></p>
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
                    $carikode = mysqli_query($link, "SELECT max(id_pinjam) FROM tb_pinjam ");
                    $datakode = mysqli_fetch_array($carikode);
                    if ($datakode) {
                        $nilaikode = substr($datakode[0], 1);
                        $kode = (int)$nilaikode;

                        $kode = $kode + 1;
                        $kodeotomatis = str_pad($kode, 3, "0", STR_PAD_LEFT);
                    } else {
                        $kodeotomatis = "001";
                    }


                    $c = 'FTI';
                    $d = array('', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII');
                    $e = date('Y');
                    $idOto = $kodeotomatis . '-' .  $c . '-' . $d[date('n')] . '-' . $e;
                    ?>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Nomor SK Kenaikan Pangkat</label>
                                <input type="text" class="form-control" id="noSk" name="noSk" value="<?= $idOto; ?>" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Kode Pengajuan</label>
                                <input type="text" class="form-control pencarian" id="idPeng" name="idPeng" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">NIP Pegawai</label>
                                <input type="text" class="form-control" id="idPeg" name="idPeg" readonly />
                                <input type="text" class="form-control" id="nIp" name="nIp" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Nama Pegawai</label>
                                <input type="text" class="form-control" id="nAma" name="nAma" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Golongan</label>
                                <input type="text" class="form-control" id="idGol" name="idGol" readonly />
                                <input type="text" class="form-control" id="tKt" name="tKt" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Sebutan Golongan</label>
                                <input type="text" class="form-control" id="sBt" name="sBt" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Jabatan</label>
                                <input type="text" class="form-control" id="jaB" name="jaB" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Tanggal SK Naik Pangkat</label>
                                <input type="date" class="form-control" id="tglNaik" name="tglNaik" />
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

<div class="modal fade pencarian" id="laporan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel1"><b>Cari Pegawai</b></h2>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal<i class="icon-cancel"></i> </a>
                </div>
                <?php
                $no = '1';
                $query = "SELECT tpengajuan.idPeng, tpegawai.nIp, tpegawai.idPeg, tpegawai.nAma, og.tKt AS tKt1,og.sBt AS sBt1, oj.jaB AS jaB1, ig.tKt AS tKt2, ig.sBt AS sBt2, ij.jaB AS jaB2, tpengajuan.tglP, tpengajuan.cTt, tpengajuan.sT FROM tpengajuan JOIN tpegawai ON tpengajuan.idPeg = tpegawai.idPeg JOIN tgolongan AS og ON og.idGol=tpengajuan.outGol JOIN tgolongan AS ig ON ig.idGol=tpengajuan.inGol JOIN tjabatan AS oj ON tpengajuan.outJab=oj.idJab JOIN tjabatan AS ij ON tpengajuan.inJab=ij.idJab WHERE tpengajuan.sT = 'Diterima'";
                $result = mysqli_query($link, $query);
                ?>
                <div class="modal-body">
                    <div class="row gutter">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-blue">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">No</th>
                                                    <th rowspan="2">NIP Pegawai</th>
                                                    <th rowspan="2">Nama Pegawai</th>
                                                    <th colspan="2" align="center">Golongan Awal</th>
                                                    <th rowspan="2">Jabatan Awal</th>
                                                </tr>
                                                <tr>
                                                    <th>Tingkat</th>
                                                    <th>Sebutan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                                    <tr id="data merk cc" onClick="masuk(this,'<?= $row['idPeng'] ?>', '<?= $row['idPeg'] ?>', '<?= $row['nIp'] ?>', '<?= $row[''] ?>' )" href="javascript:void(0)">
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?= $row['Mken'] ?></td>
                                                        <td><?= $row['Cc'] ?></td>
                                                        <td><?= $row['Thbeli'] ?></td>
                                                        <td><?= $row['Npol'] ?></td>
                                                        <td><?= $row['Bpkb'] ?></td>
                                                    </tr>
                                                <?php endwhile; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        //focusin berfungsi ketika cursor berada di dalam textbox modal langsung aktif
        $(".pencarian").focusin(function() {
            $("#laporan").modal('show'); // ini fungsi untuk menampilkan modal
        });
        $('#example').DataTable(); // fungsi ini untuk memanggil datatable
    });

    function masuk(txt, data, merk, cc) {
        document.getElementById('Idken').value = data; // ini berfungsi mengisi value  yang ber id textbox
        document.getElementById('Mken').value = merk; // ini berfungsi mengisi value  yang ber id 
        document.getElementById('Cc').value = cc; // ini berfungsi mengisi value  yang ber id 
        $("#laporan").modal('hide'); // ini berfungsi untuk menyembunyikan modal
    }
</script>

<script type="text/javascript">
    <?php echo $jsArray; ?>

    function changeValue(id) {
        document.getElementById('Npeg').value = peg[id].nama;
        document.getElementById('Jab').value = peg[id].jab;
        document.getElementById('Ins').value = peg[id].ins;
        document.getElementById('Idpeg').value = peg[id].id;
    };
</script>
<script>
    function myFunction() {
        window.open("../laporan/lappk.php");
    }
</script>

<?php
include_once "../footer.php";
?>