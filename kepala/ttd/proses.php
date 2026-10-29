<?php
include_once '../../config/config.php';
if (isset($_POST['simpan'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;

    if (move_uploaded_file($tmp_name, $path)) {

        $tambah = $link->query("INSERT INTO ttd (nip, nama, ttd) VALUES ('$nip', '$nama', '$fotobaru')");

        if ($tambah) {
            echo "<script>alert('Data berhasil disimpan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        } else {
            echo "Data anda gagal disimpan. Ulangi sekali lagi";
            echo "<meta http-equiv='refresh' content='0; url=add.php'>";
        }
    }
} elseif (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;

    if (move_uploaded_file($tmp_name, $path)) {

        $tambah = $link->query("UPDATE ttd SET nip = '$nip', nama = '$nama', ttd = '$fotobaru' WHERE id ='$id' ");

        if ($tambah) {
            echo "<script>alert('Data berhasil disimpan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        } else {
            echo "Data anda gagal disimpan. Ulangi sekali lagi";
            echo "<meta http-equiv='refresh' content='0; url=update.php?id=$id'>";
        }
    }
}
