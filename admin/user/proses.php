<?php
include_once '../../config/config.php';
if (isset($_POST['simpan'])) {
    $idPeg  = $_POST['idPeg'];
    $nAma   = $_POST['nAma'];
    $uSr    = $_POST['uSr'];
    $pAss   = $_POST['pAss'];
    $lVl    = $_POST['lVl'];
    $sTs    = $_POST['sTs'];
    $pass = md5($pAss);

    $tambah = $link->query("INSERT INTO tpegawai (idPeg, nAma, uSr, pAss, lVl, sTs) VALUES ('$idPeg', '$nAma', '$uSr', '$pass', '$lVl', '$sTs' )");


    if ($tambah) {
        echo "<script>alert('Data berhasil disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
} elseif (isset($_POST['ubah'])) {
    $idPeg  = $_POST['idPeg'];
    $nAma   = $_POST['nAma'];
    $uSr    = $_POST['uSr'];
    $pAss   = $_POST['pAss'];
    $lVl    = $_POST['lVl'];
    $sTs    = $_POST['sTs'];
    $pass = md5($pAss);

    $ubah = $link->query("UPDATE tpegawai SET nAma = '$nAma', uSr = '$uSr', pAss = '$pass', lVl = '$lVl', sTs = '$sTs' WHERE idPeg = '$idPeg'");

    if ($ubah) {
        echo "<script>alert('Data berhasil diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
}
