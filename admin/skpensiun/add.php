<?php
include_once "../header.php";
?>
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Tambah SK Kenaikan Pensiun</h3>
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
                <form id="menuForm" method="POST" action="proses.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Nomor SK Kenaikan Pangkat</label>
                                <input type="text" class="form-control pencarian" id="noSur" name="noSur" readonly />
                                <input type="hidden" class="form-control " id="idPen" name="idPen" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">NIP Pegawai</label>
                                <input type="text" class="form-control" id="nIp" name="nIp" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Nama Pegawai Pegawai</label>
                                <input type="text" class="form-control" id="nAma" name="nAma" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Tanggal Pensiun</label>
                                <input type="text" class="form-control" id="tglPen" name="tglPen" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Pengajuan</label>
                                <input type="text" class="form-control" id="jNs" name="jNs" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Tanggal Persetujuan</label>
                                <input type="date" class="form-control" id="tglTtd" name="tglTtd" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Pemberi Persetujuan</label>
                                <input type="text" class="form-control" id="nmKep" name="nmKep" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">TTD Elektrronik Persetujuan</label>
                                <input type="file" class="form-control" name="gbr" id="gbr" accept='image/*' onchange='readURL(event)' /> <br>
                                <img src="" alt="" id="output" height="150" width="150">
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
                <h2 class="modal-title" id="exampleModalLabel1"><b>Cari Pengajuan Pensiun</b></h2>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal<i class="icon-cancel"></i> </a>
                </div>
                <?php
                $no = '1';
                $query = "SELECT * FROM tpensiun LEFT JOIN tpegawai ON tpensiun.idPeg = tpegawai.idPeg JOIN tgolongan ON tgolongan.idGol = tpegawai.idGol JOIN tjabatan ON tjabatan.idJab = tpegawai.idJab ORDER BY idPen ASC";
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
                                                    <th rowspan="2">Nomor Pemsiun</th>
                                                    <th rowspan="2">Tangal Pensiun</th>
                                                    <th rowspan="2">NIP Pegawai</th>
                                                    <th rowspan="2">Nama Pegawai</th>
                                                    <th rowspan="2">Pengajuan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                                    <tr id="idp nmr nip nama tgl  jns" onClick="masuk(this,'<?= $row['idPen'] ?>', '<?= $row['noSur'] ?>', '<?= $row['nIp'] ?>', '<?= $row['nAma'] ?>', '<?= $row['tglPen'] ?>', '<?= $row['jNs'] ?>' )" href="javascript:void(0)">
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?= $row['noSur'] ?></td>
                                                        <td><?= $row['tglPen'] ?></td>
                                                        <td><?= $row['nIp'] ?></td>
                                                        <td><?= $row['nAma'] ?></td>
                                                        <td><?= $row['jNs'] ?></td>
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

    function masuk(txt, idp, nmr, nip, nama, tgl, jns) {
        document.getElementById('idPen').value = idp; // ini berfungsi mengisi value  yang ber id textbox
        document.getElementById('noSur').value = nmr; // ini berfungsi mengisi value  yang ber id 
        document.getElementById('nIp').value = nip; // ini berfungsi mengisi value  yang ber id 
        document.getElementById('nAma').value = nama; // ini berfungsi mengisi value  yang ber id textbox
        document.getElementById('tglPen').value = tgl; // ini berfungsi mengisi value  yang ber id 
        document.getElementById('jNs').value = jns; // ini berfungsi mengisi value  yang ber id 
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
<script>
    function myFunction() {
        window.open("../laporan/lappk.php");
    }
</script>

<?php
include_once "../footer.php";
?>