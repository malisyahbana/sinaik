<?php
include_once '../../config/config.php';
if (isset($_POST['simpan'])) {
    $idPeg = $_POST['idPeg'];
    $iSi = $_POST['iSi'];


    $tambah = $link->query("INSERT INTO tpesan (idPsn, idPeg, iSi) VALUES ('', '$idPeg', '$iSi')");


    if ($tambah) {
        echo "<script>alert('Data berhasil disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
} elseif (isset($_POST['ubah'])) {
    $idPsn = $_POST['idPsn'];
    $idPeg = $_POST['idPeg'];
    $iSi = $_POST['iSi'];

    $ubah = $link->query("UPDATE tpesan SET idPeg = '$idPeg', iSi = '$iSi' WHERE idPsn = '$idPsn'");

    if ($ubah) {
        echo "<script>alert('Data berhasil diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=update.php'>";
    }
}
