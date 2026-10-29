<?php
include_once '../../config/config.php';
if (isset($_POST['simpan'])) {
    $idJab = $_POST['idJab'];
    $jaB = $_POST['jaB'];
    $bAg = $_POST['bAg'];


    $tambah = $link->query("INSERT INTO tjabatan (idJab, jaB, bAg) VALUES ('$idJab', '$jaB', '$bAg')");


    if ($tambah) {
        echo "<script>alert('Data berhasil disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
} elseif (isset($_POST['ubah'])) {
    $idJab = $_POST['idJab'];
    $jaB = $_POST['jaB'];
    $bAg = $_POST['bAg'];

    $ubah = $link->query("UPDATE tjabatan SET jaB = '$jaB', bAg = '$bAg' WHERE idJab = '$idJab'");

    if ($ubah) {
        echo "<script>alert('Data berhasil diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
}
