<?php
include_once '../../config/config.php';
if (isset($_POST['simpan'])) {
    $idPen = $_POST['idPen'];
    $noSur = $_POST['noSur'];
    $jNs = $_POST['jNs'];
    $tglPen = $_POST['tglPen'];
    $tglSur = $_POST['tglSur'];
    $idPeg = $_POST['idPeg'];
    $aLmt = $_POST['aLmt'];
    // $noPgr = $_POST['noPgr'];
    // $noRek = $_POST['noRek'];
    $kEt = $_POST['kEt'];

    $tambah = $link->query("INSERT INTO tpensiun (idPen, idPeg, noSur, tglPen, tglSur, aLmt, jNs, kEt) VALUES ('$idPen', '$idPeg', '$noSur', '$tglPen', '$tglSur', '$aLmt', '$jNs', '$kEt')");


    if ($tambah) {
        echo "<script>alert('Data berhasil disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=pensiun.php'>";
    } else {
        echo "<script>alert('Data gagal disimpan 
        *Bila Tidak Tersimpan Silahkan Rubah Kode Pensiun')</script>";
        echo "<meta http-equiv='refresh' content='0; url=addpensiun.php'>";
    }
} elseif (isset($_POST['ubah'])) {
    $idPen = $_POST['idPen'];
    $noSur = $_POST['noSur'];
    $jNs = $_POST['jNs'];
    $tglPen = $_POST['tglPen'];
    $tglSur = $_POST['tglSur'];
    $idPeg = $_POST['idPeg'];
    $aLmt = $_POST['aLmt'];
    $noPgr = $_POST['noPgr'];
    $noRek = $_POST['noRek'];
    $kEt = $_POST['kEt'];

    $ubah = $link->query("UPDATE tpensiun SET idPeg = '$idPeg', noSur = '$noSur', tglPen = '$tglPen', tglSur = '$tglSur', aLmt = '$aLmt', noPgr = '$noPgr', noRek = '$noRek', jNs = '$jNs', kEt = '$kEt' WHERE idPen = '$idPen'");

    if ($ubah) {
        echo "<script>alert('Data berhasil diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=pensiun.php'>";
    } else {
        echo "<script>alert('Data gagal diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=upensiun.php'>";
    }
} elseif (isset($_POST['sdini'])) {
    $idPen = $_POST['idPen'];
    $noSur = $_POST['noSur'];
    $jNs = $_POST['jNs'];
    $tglPen = $_POST['tglPen'];
    $tglSur = $_POST['tglSur'];
    $idPeg = $_POST['idPeg'];
    $aLmt = $_POST['aLmt'];
    $noPgr = $_POST['noPgr'];
    $noRek = $_POST['noRek'];
    $kEt = $_POST['kEt'];

    $tambah = $link->query("INSERT INTO tpensiun (idPen, idPeg, noSur, tglPen, tglSur, aLmt, noPgr, noRek, jNs, kEt) VALUES ('$idPen', '$idPeg', '$noSur', '$tglPen', '$tglSur', '$aLmt', '$noPgr', '$noRek', '$jNs', '$kEt')");


    if ($tambah) {
        $query = mysqli_query($link, "SELECT idPen FROM tpensiun WHERE idPen = '$idPen'");
        $data = mysqli_fetch_array($query);
        $idp = $data[0];
        echo "<script>alert('Data berhasil disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=berkas.php?id=$idp'>";
    } else {
        echo "<script>alert('Data gagal disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=adddini.php'>";
    }
} elseif (isset($_POST['udini'])) {
    $idPen = $_POST['idPen'];
    $noSur = $_POST['noSur'];
    $jNs = $_POST['jNs'];
    $tglPen = $_POST['tglPen'];
    $tglSur = $_POST['tglSur'];
    $idPeg = $_POST['idPeg'];
    $aLmt = $_POST['aLmt'];
    $noPgr = $_POST['noPgr'];
    $noRek = $_POST['noRek'];
    $kEt = $_POST['kEt'];

    $ubah = $link->query("UPDATE tpensiun SET idPeg = '$idPeg', noSur = '$noSur', tglPen = '$tglPen', tglSur = '$tglSur', aLmt = '$aLmt', noPgr = '$noPgr', noRek = '$noRek', jNs = '$jNs', kEt = '$kEt' WHERE idPen = '$idPen'");

    if ($ubah) {
        echo "<script>alert('Data berhasil diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=dini.php'>";
    } else {
        echo "<script>alert('Data gagal diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=udini.php'>";
    }
} elseif (isset($_POST['sub'])) {
    //TAMBAH FILE PDF
    $idPen = $_POST['idPen'];
    $noSer = htmlentities($_POST['noSer'], ENT_QUOTES);
    $ekstensi_diperbolehkan = array('pdf');
    $file = $_FILES['berKas']['name'];
    $x = explode('.', $file);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['berKas']['size'];
    $file_tmp = $_FILES['berKas']['tmp_name'];
    $folder = "../../file/$file";

    // cek apakah ekstensi nya berupa PDF
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        // maka tambahkan ke folder assets
        if (move_uploaded_file($file_tmp, "$folder")) {
            $tambah = mysqli_query($link, "INSERT INTO subpen (idSub, idPen, noSer, berKas) VALUES('', '$idPen', '$noSer', '$file')");
            if ($tambah) {
                $query = mysqli_query($link, "SELECT idPen FROM tpensiun WHERE idPen = '$idPen'");
                $data = mysqli_fetch_array($query);
                $idp = $data[0];
                echo '<script>
    alert("File berhasil di upload!");
</script>';
                echo "
<meta http-equiv='refresh' content='0; url=berkas.php?id=$idp'>";
            }
        }
        // Cek jika bukan file pdf yang di masukkan
    } else {
        // beri pesan ke user lalu alihkan tetap ke halaman tambah.php
        $query = mysqli_query($link, "SELECT idPen FROM tpensiun WHERE idPen = '$idPen'");
        $data = mysqli_fetch_array($query);
        $idp = $data[0];
        echo "<script>
    alert('Ekstensi harus berupa PDF!');
    document.location.href = 'berkas.php?id=$idp';
</script>";
    }
} elseif (isset($_POST['back'])) {

    echo "<script>alert('Selesai Pengajuan')</script>";
    echo "<meta http-equiv='refresh' content='0; url=dini.php'>";
}
