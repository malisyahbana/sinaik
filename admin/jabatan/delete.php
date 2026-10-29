<?php
include '../../config/config.php';

$id = $_GET['id'];
$query = $link->query(" DELETE FROM tjabatan WHERE idJab = '$id' ");
if ($query) {
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
} else {
    echo "<script>alert('Data Gagal dihapus')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
