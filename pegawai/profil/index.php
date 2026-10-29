<?php
include_once "../header.php";
?>
<?php
$idPeg = $_SESSION['idPeg'];
$query = "SELECT * FROM tpegawai LEFT JOIN 
tgolongan ON tgolongan.idGol = tpegawai.idGol LEFT JOIN 
tjabatan ON tjabatan.idJab = tpegawai.idJab WHERE idPeg = $idPeg ";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Selamat Datang Di Dashboard Admin</h3>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="update.php?id=<?php echo $row['idPeg']; ?>" class="btn btn-success"><i class="icon-add-user"></i> Lengkapi Data Diri</a>
                </li>
            </ul>
        </div>
    </div>

</div>
<!-- Top Bar Ends -->

<!-- Row Konten -->
<!-- <div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel height2 panel-bg-one">
            <div class="panel-body">
                <div class="user-profile clearfix">
                    <div class="user-img">
                        <img src="<?= base_url() ?>/img/<?= $row['Foto']; ?>" height="250" width="250">
                    </div>
                    <h3><?= $row['nAma'] ?></h3>
                    <h4>Dinas Pendidikan Hulu Sungai Selatan</h4>
                    <h4>Kabupaten hulu Sungai Selatan</h4>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="panel">
        <div class="panel-heading">
            <h4>Profil Data Diri Pegawai</h4>
        </div>
        <div class="panel-body">
            <form id="paymentForm" method="" action="#">
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">
                                <h4> Nomor Identitas Pegawai : <?= $row['nIp'] ?></h4>
                            </label><br>
                            <label class="control-label">
                                <h4> Nama Lengkap : <?= $row['nAma'] ?></h4>
                            </label><br>
                            <label class="control-label">
                                <h4> Tanggal Lahir : <?= $row['tgLhr'] ?></h4>
                            </label><br>
                            <label class="control-label">
                                <h4> Jenis Kelamin : <?= $row['jK'] ?></h4>
                            </label><br>
                            <label class="control-label">
                                <h4> Alamat : </h4>
                                <h4> <?= $row['aLt'] ?></h4>
                            </label><br>
                            <label class="control-label">
                                <h4> Pendidikan Terakhir : <?= $row['penD'] ?></h4>
                            </label><br>
                            <label class="control-label">
                                <h4> Nomor Telpon : <?= $row['noPe'] ?></h4>
                            </label><br>
                            <label class="control-label">
                                <h4> Status Profil : <?= $row['sTs'] ?></h4>
                            </label><br>
                            <label class="control-label">
                                <h4>Tingkat Golongan : <?= $row['tKt'] ?></h4>
                            </label><br>
                            <label class="control-label">
                                <h4>Formasi Golongan : <?= $row['sBt'] ?></h4>
                            </label> <br>
                            <label class="control-label">
                                <h4>Jabatan : <?= $row['jaB'] ?> - <?= $row['bAg'] ?></h4>
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="panel  lk-bg">
        <div class=" panel-heading">
            <h3> Pas Foto Pegawai</h3>
        </div>
        <div class="panel-body">
            <form id="paymentForm" method="post" action="#">
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <center><img src="<?= base_url() ?>/img/<?= $row['Foto']; ?>" alt="" id="output" height="350" width="350">
                            </center>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?php
include_once "../footer.php";
?>