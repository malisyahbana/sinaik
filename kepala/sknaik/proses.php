<?php
include_once '../../config/config.php';
if (isset($_POST['edit'])) {
    $idNaik = $_POST['idNaik'];
    $noSk = $_POST['noSk'];
    $tglNaik = $_POST['tglNaik'];
    $nmTtd = $_POST['nmTtd'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;

    if (move_uploaded_file($tmp_name, '../../img/' . $fotobaru)) {
        $query = $link->query("SELECT * FROM tnaik WHERE idNaik = '$idPeg'");
        $data = $query->fetch_array();
        if (is_file("../../img/" . $data['tTd']))
            unlink("../../img/" . $data['tTd']);
    }

    // if (isset($_POST['ubah_foto'])) {
    //     $edit = $link->query(" UPDATE tpegawai SET nIp = '$nIp', nAma = '$nAma', tgLhr = '$tgLhr', uMr = '$uMr', aLt = '$aLt', jK = '$jK', penD = '$penD', noPe = '$noPe', idGol = '$idGol', idJab = '$idJab', Foto = '$fotobaru', sTs = '$sTs' WHERE idPeg = '$idPeg'");

    //     if ($edit) {
    //         echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    //     } else {
    //         echo "Data gagal diubah. Ulangi sekali lagi";
    //         echo "<meta http-equiv='refresh' content='0; url=update.php'>";
    //     }
    // }

    $ubah = $link->query("UPDATE tnaik SET noSk = '$noSk', tglNaik = '$tglNaik', nmTtd = '$nmTtd', tTd = '$fotobaru' WHERE idNaik = '$idNaik'");

    if ($ubah) {
        echo "<script>
    alert('Data berhasil diedit')
</script>";
        echo "
<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>
    alert('Data gagal diedit')
</script>";
        echo "
<meta http-equiv='refresh' content='0; url=add.php'>";
    }
}
