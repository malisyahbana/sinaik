<?php
include_once '../../config/config.php';
$id = $_GET['id'];
$query = mysqli_query($link, "SELECT idPen FROM subpen WHERE idSub = '$id'");
$data = mysqli_fetch_array($query);
$idp = $data[0];
$hapus = $link->query(" DELETE FROM subpen WHERE idSub = '$id' ");

if ($hapus) {
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<meta http-equiv='refresh' content='0; url=berkas.php?id=$idp'>";
} else {
    echo "Data anda gagal dihapus. Ulangi sekali lagi";
    echo "<meta http-equiv='refresh' content='0; url=berkas.php?id=$idp'>";
}
