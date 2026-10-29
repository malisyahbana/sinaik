<?php
include_once '../../config/config.php';
if (isset($_POST['simpan'])) {
    $idPeng     = $_POST['idPeng'];
    $idPeg      = $_POST['idPeg'];
    $outGol     = $_POST['outGol'];
    $outJab     = $_POST['outJab'];
    $inGol      = $_POST['inGol'];
    $inJab      = $_POST['inJab'];
    $tglP       = $_POST['tglP'];
    $sT     = $_POST['sT'];

    $tambah = $link->query("INSERT INTO tpengajuan (idPeng, idPeg, outGol, outJab, inGol, inJab, tglP, sT) VALUES ('$idPeng', '$idPeg', '$outGol', '$outJab', '$inGol', '$inJab', '$tglP', '$sT')");


    if ($tambah) {
        $query = mysqli_query($link, "SELECT idPeng FROM tpengajuan WHERE idPeng = '$idPeng'");
        $data = mysqli_fetch_array($query);
        $idp = $data[0];
        echo "<script>alert('Data berhasil disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=pendukung.php?id=$idp'>";
    } else {
        echo "<script>alert('Data gagal disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
} elseif (isset($_POST['ubah'])) {
    $idPeng     = $_POST['idPeng'];
    $idPeg      = $_POST['idPeg'];
    $outGol     = $_POST['outGol'];
    $outJab     = $_POST['outJab'];
    $inGol      = $_POST['inGol'];
    $inJab      = $_POST['inJab'];
    $tglP       = $_POST['tglP'];
    $cTt        = $_POST['cTt'];
    $sT         = $_POST['sT'];

    $ubah = $link->query("UPDATE tpengajuan SET idPeg = '$idPeg', outGol = '$outGol', outJab = '$outJab', inGol = '$inGol', inJab = '$inJab', tglP = '$tglP', cTt = '$cTt', sT = '$sT' WHERE idPeng = '$idPeng'");

    if ($ubah) {
        echo "<script>alert('Data berhasil diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
}
