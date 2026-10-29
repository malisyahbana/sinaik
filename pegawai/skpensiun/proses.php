<?php
include_once '../../config/config.php';
if (isset($_POST['simpan'])) {
    $idPen = $_POST['idPen'];
    $tglTtd = $_POST['tglTtd'];
    $nmKep = $_POST['nmKep'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;

    if (move_uploaded_file($tmp_name, $path)) {

        $tambah = $link->query("INSERT INTO skpen (idSk, idPen, tglTtd, nmKep, tTd) VALUES ('', '$idPen', '$tglTtd', '$nmKep', '$fotobaru')");

        if ($tambah) {
            echo "<script>alert('Data berhasil disimpan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        } else {
            echo "Data anda gagal disimpan. Ulangi sekali lagi";
            echo "<meta http-equiv='refresh' content='0; url=add.php'>";
        }
    }
}
