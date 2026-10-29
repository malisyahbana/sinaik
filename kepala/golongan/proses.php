<?php
include_once '../../config/config.php';
if (isset($_POST['simpan'])) {
    $idGol = $_POST['idGol'];
    $tKt = $_POST['tKt'];
    $sBt = $_POST['sBt'];
    $Gaji = $_POST['Gaji'];

    $tambah = $link->query("INSERT INTO tgolongan (idGol, tKt, sBt, Gaji) VALUES ('$idGol', '$tKt', '$sBt', '$Gaji')");


    if ($tambah) {
        echo "<script>alert('Data berhasil disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
} elseif (isset($_POST['ubah'])) {
    $idGol = $_POST['idGol'];
    $tKt = $_POST['tKt'];
    $sBt = $_POST['sBt'];
    $Gaji = $_POST['Gaji'];

    $ubah = $link->query("UPDATE tgolongan SET tKt = '$tKt', sBt = '$sBt', Gaji = '$Gaji' WHERE idGol = '$idGol'");

    if ($ubah) {
        echo "<script>alert('Data berhasil diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
}
