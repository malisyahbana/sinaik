<?php
include_once '../../config/config.php';
if (isset($_POST['ubah'])) {
    $idPeng = $_POST['idPeng'];
    $tglP = $_POST['tglP'];
    $cTt = $_POST['cTt'];
    $sT = $_POST['sT'];
    $ubah = $link->query("UPDATE tpengajuan SET tglP = '$tglP', cTt = '$cTt', sT = '$sT' WHERE idPeng = '$idPeng'");

    if ($ubah) {
        // $query = mysqli_query($link, "SELECT idPeng FROM tpengajuan WHERE idPeng = '$idPeng'");
        // $data = mysqli_fetch_array($query);
        // $idp = $data[0];
        echo "<script>alert('Data berhasil diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
} elseif (isset($_POST['snaik'])) {
    $idPeng     = $_POST['idPeng'];
    $idPeg      = $_POST['idPeg'];
    $idGol      = $_POST['idGol'];
    $idJab      = $_POST['idJab'];
    $tglNaik    = $_POST['tglNaik'];
    $noSk       = $_POST['noSk'];

    $tambah = $link->query("INSERT INTO tnaik (idNaik, idPeng, idPeg, idGol, idJab, tglNaik, noSk) VALUES ('', '$idPeng', '$idPeg', '$idGol', '$idJab', '$tglNaik', '$noSk')");
    $ubah = $link->query("UPDATE tpegawai SET idGol = '$idGol', idJab = '$idJab' WHERE idPeg = '$idPeg'");

    if ($tambah . $ubah) {
        // $query = mysqli_query($link, "SELECT idPeng FROM tpengajuan WHERE idPeng = '$idPeng'");
        // $data = mysqli_fetch_array($query);
        // $idp = $data[0];
        echo "<script>alert('Nomor SK Sudah Dibuat')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../sk/index.php'>";
    } else {
        echo "<script>alert('Data gagal diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
}
