<?php
include_once '../../config/config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tpendukung WHERE idDukung = '$id' ";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tinjau Berkas Pendukung</title>
</head>

<body>

    <h4>Tinjau Berkas Pendukung</h4>
    <embed type="application/pdf" src="<?= base_url() ?>/file/<?= $row['berKas']; ?>" width="600" height="400"></embed>

    <!-- <h4>Contoh menampilkan file pdf dengan tag object</h4>
    <object data="contoh.pdf" width="600" height="400"></object>

    <h4>Contoh menampilkan file pdf dengan tag iframe</h4>
    <iframe src="contoh.pdf" width="600" height="400"></iframe> -->

</body>

</html>