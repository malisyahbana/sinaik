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
                                <label class="control-label">Nomor Surat</label>
                                <input type="hidden" class="form-control" id="idPen" name="idPen" value="<?= $kodeM ?>" readonly />
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
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">NIP Pegawai</label>
                                    <input type="text" class="form-control pencarian" id="nIp" name="nIp" required="" />
                                    <input type="hidden" class="form-control pencarian" id="idPeg" name="idPeg" required="" />
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
                                    <label class="control-label">Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="tgLhr" name="tgLhr" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Pangkat</label>
                                    <input type="text" class="form-control" id="tKt" name="tKt" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Golongan</label>
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
<!-- Tabel -->
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
                $query = "SELECT * FROM tpegawai LEFT JOIN 
tgolongan ON tgolongan.idGol = tpegawai.idGol LEFT JOIN 
tjabatan ON tjabatan.idJab = tpegawai.idJab WHERE NOT nAma = 'Administrator' ORDER BY idPeg ASC";
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
                                                    <th rowspan="2">Tanggal Lahir</th>
                                                    <th colspan="2" align="center">Golongan</th>
                                                    <th rowspan="2">Jabatan</th>
                                                </tr>
                                                <tr>
                                                    <th>Tingkat</th>
                                                    <th>Sebutan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($row = mysqli_fetch_array($result)) : ?>
                                                    <tr id="data nama tgl tkt gol jab ik" onClick="masuk(this,'<?= $row['nIp'] ?>', '<?= $row['nAma'] ?>', '<?= $row['tgLhr'] ?>', '<?= $row['tKt'] ?>', '<?= $row['sBt'] ?>', '<?= $row['jaB'] ?>', '<?= $row['idPeg'] ?>' )" href="javascript:void(0)">
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?= $row['nIp'] ?></td>
                                                        <td><?= $row['nAma'] ?></td>
                                                        <td><?= $row['tgLhr'] ?></td>
                                                        <td><?= $row['tKt'] ?></td>
                                                        <td><?= $row['sBt'] ?></td>
                                                        <td><?= $row['jaB'] ?></td>
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

    function masuk(txt, data, nama, tgl, tkt, gol, jab, ik) {
        document.getElementById('nIp').value = data; // ini berfungsi mengisi value  yang ber id textbox
        document.getElementById('nAma').value = nama; // ini berfungsi mengisi value  yang ber id 
        document.getElementById('tgLhr').value = tgl; // ini berfungsi mengisi value  yang ber id 
        document.getElementById('tKt').value = tkt; // ini berfungsi mengisi value  yang ber id 
        document.getElementById('sBt').value = gol; // ini berfungsi mengisi value  yang ber id 
        document.getElementById('jaB').value = jab; // ini berfungsi mengisi value  yang ber id 
        document.getElementById('idPeg').value = ik; // ini berfungsi mengisi value  yang ber id 
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