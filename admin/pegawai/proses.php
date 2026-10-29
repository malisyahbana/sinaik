<?php
include_once '../../config/config.php';
if (isset($_POST['simpan'])) {
    $idPeg          = $_POST['idPeg'];
    $nIp            = $_POST['nIp'];
    $nAma           = $_POST['nAma'];
    $tgLhr          = $_POST['tgLhr'];
    $aLt            = $_POST['aLt'];
    $jK             = $_POST['jK'];
    $penD           = $_POST['penD'];
    $noPe           = $_POST['noPe'];
    $idGol          = $_POST['idGol'];
    $idJab          = $_POST['idJab'];
    $sTs            = $_POST['sTs'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, $path)) {

        $tambah = $link->query("INSERT INTO tpenD (idPeg, nIp, nAma, tgLhr, aLt, jK, penD, idGol, idJab, noPe, Foto, sTs) VALUES ('$idPeg', '$nIp', '$nAma', '$tgLhr', '$aLt', '$jK', '$penD', '$idGol', '$idJab', '$noPe', '$fotobaru', '$sTs')");

        if ($tambah) {
            echo "<script>alert('Data berhasil disimpan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        } else {
            echo "Data anda gagal disimpan. Ulangi sekali lagi";
            echo "<meta http-equiv='refresh' content='0; url=add.php'>";
        }
    }
} elseif (isset($_POST['ubah'])) {
    $idPeg          = $_POST['idPeg'];
    $nIp            = $_POST['nIp'];
    $nAma           = $_POST['nAma'];
    $tgLhr          = $_POST['tgLhr'];
    $uMr            = $_POST['uMr'];
    $aLt            = $_POST['aLt'];
    $jK             = $_POST['jK'];
    $penD           = $_POST['penD'];
    $noPe           = $_POST['noPe'];
    $idGol          = $_POST['idGol'];
    $idJab          = $_POST['idJab'];
    $sTs            = $_POST['sTs'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, '../../img/' . $fotobaru)) {
        $query = $link->query("SELECT * FROM tpegawai WHERE idPeg = '$idPeg'");
        $data = $query->fetch_array();
        if (is_file("../../img/" . $data['Foto']))
            unlink("../../img/" . $data['Foto']);
    }

    if (isset($_POST['ubah_foto'])) {
        $edit = $link->query(" UPDATE tpegawai SET nIp = '$nIp', nAma = '$nAma', tgLhr = '$tgLhr', uMr = '$uMr', aLt = '$aLt', jK = '$jK', penD = '$penD', noPe = '$noPe', idGol = '$idGol', idJab = '$idJab', Foto = '$fotobaru', sTs = '$sTs' WHERE idPeg = '$idPeg'");

        if ($edit) {
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        } else {
            echo "Data gagal diubah. Ulangi sekali lagi";
            echo "<meta http-equiv='refresh' content='0; url=update.php'>";
        }
    }

    $edit = $link->query("UPDATE tpegawai SET nIp = '$nIp', nAma = '$nAma', tgLhr = '$tgLhr', uMr = '$uMr', aLt = '$aLt', jK = '$jK', penD = '$penD', noPe = '$noPe', idGol = '$idGol', idJab = '$idJab', Foto = '$fotobaru', sTs = '$sTs' WHERE idPeg = '$idPeg'");

    if ($edit) {
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "Data anda gagal disimpan. Ulangi sekali lagi";
        echo "<meta http-equiv='refresh' content='0; url=update.php'>";
    }
}
