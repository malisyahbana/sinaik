<?php
include_once '../../_config/config.php';
$id = $_GET['d'];
$query = mysqli_query($link, "SELECT idPeng FROM tpendukung WHERE idDukung = '$id'");
$data = mysqli_fetch_array($query);
$idp = $data[0];
$hapus = $link->query(" DELETE FROM sub_pinjam WHERE id_sub = '$id' ");

if ($hapus) {
    echo "Data berhasil dihapus";
    echo "<meta http-equiv='refresh' content='0; url=pendukung.php?id=$idp'>";
} else {
    echo "Data anda gagal dihapus. Ulangi sekali lagi";
    echo "<meta http-equiv='refresh' content='0; url=pendukung.php?id=$idp'>";
}
