<?php
include_once '../../config/config.php';
$id = $_GET['id'];
$query = mysqli_query($link, "SELECT idPeng FROM tpendukung WHERE idDukung = '$id'");
$data = mysqli_fetch_array($query);
$idp = $data[0];
$hapus = $link->query(" DELETE FROM tpendukung WHERE idDukung = '$id' ");

if ($hapus) {
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<meta http-equiv='refresh' content='0; url=pendukung.php?id=$idp'>";
} else {
    echo "Data anda gagal dihapus. Ulangi sekali lagi";
    echo "<meta http-equiv='refresh' content='0; url=pendukung.php?id=$idp'>";
}
