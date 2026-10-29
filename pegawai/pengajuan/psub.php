<?php
include_once '../../config/config.php';
if (isset($_POST['sub'])) {
    //TAMBAH FILE PDF
    $idPeng = $_POST['idPeng'];
    $nmSer = htmlentities($_POST['nmSer'], ENT_QUOTES);
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
            $tambah = mysqli_query($link, "INSERT INTO tpendukung (idDukung, idPeng, nmSer, berKas) VALUES('', '$idPeng', '$nmSer', '$file')");
            if ($tambah) {
                $query = mysqli_query($link, "SELECT idPeng FROM tpengajuan WHERE idPeng = '$idPeng'");
                $data = mysqli_fetch_array($query);
                $idp = $data[0];
                echo '<script>
    alert("File berhasil di upload!");
</script>';
                echo "
<meta http-equiv='refresh' content='0; url=pendukung.php?id=$idp'>";
            }
        }
        // Cek jika bukan file pdf yang di masukkan
    } else {
        // beri pesan ke user lalu alihkan tetap ke halaman tambah.php
        echo "<script>
    alert('Ekstensi harus berupa PDF!');
    document.location.href = 'tambah.php';
</script>";
    }
} elseif (isset($_POST['back'])) {

    echo "<script>alert('Selesai Pengajuan')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
