<?php
include_once "../header.php";
?>

<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Data Pegawai DISDIK</h3>
                <p>Data Pegawai / <a href="#">Dinas Pendidikan</a> / <a href="<?= base_url() ?>/kepala/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="#" onclick="myFunction()" class="btn btn-info"><span><i class="icon-download5"></i></span>Cetak Data Pegawai</a>
                </li>
                <!-- <li>
                    <a href="add.php" class="btn btn-success"><i class="icon-add-user"></i> Tambah</a>
                </li> -->
            </ul>
        </div>
    </div>
</div>
<!-- Top Bar Ends -->



<?php
$no = '1';
$query = "SELECT * FROM tpegawai LEFT JOIN 
tgolongan ON tgolongan.idGol = tpegawai.idGol LEFT JOIN 
tjabatan ON tjabatan.idJab = tpegawai.idJab WHERE NOT nAma = 'Administrator' ORDER BY idPeg ASC";
$result = mysqli_query($link, $query);
?>
<!-- Row Konten -->
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-blue">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">NIP Pegawai</th>
                                <th rowspan="2">Nama Pegawai</th>
                                <th rowspan="2">Tanggal Lahir</th>
                                <th rowspan="2">Alamat Pegawai</th>
                                <th rowspan="2">Jenis Kelamin</th>
                                <th rowspan="2">Pendidikan Terakhir</th>
                                <th colspan="2" align="center">Golongan</th>
                                <th rowspan="2">Jabatan</th>
                                <th rowspan="2">Telpon</th>
                                <th rowspan="2">Ketrangan</th>
                                <!-- <th rowspan="2">Action</th> -->
                            </tr>
                            <tr>
                                <th>Tingkat</th>
                                <th>Sebutan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $row['nIp'] ?></td>
                                    <td><?= $row['nAma'] ?></td>
                                    <td><?= $row['tgLhr'] ?></td>
                                    <td><?= $row['aLt'] ?></td>
                                    <td><?= $row['jK'] ?></td>
                                    <td><?= $row['penD'] ?></td>
                                    <td><?= $row['tKt'] ?></td>
                                    <td><?= $row['sBt'] ?></td>
                                    <td><?= $row['jaB'] ?></td>
                                    <td><?= $row['noPe'] ?></td>
                                    <td><?= $row['sTs'] ?></td>
                                    <!-- <td>
                                        <center>
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" aria-expanded="true"><span class="circless animate"></span>Default <span class="caret"></span></button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li><a href="update.php?id=<?php echo $row[0]; ?>">Periksa Data</a></li>
                                                    <li><a href="delete.php?id=<?php echo $row[0]; ?>">Delete</a></li>
                                                </ul>
                                            </div>
                                        </center>
                                    </td> -->
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row Ends -->

<script>
    function myFunction() {
        window.open("lpegawai.php");
    }
</script>

<?php
include_once "../footer.php";
?>