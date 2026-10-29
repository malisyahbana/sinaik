<?php require_once "../config.php";

if (isset($_POST['add'])) {
    $query = "INSERT INTO menu VALUE ('$_POST[noId]', '$_POST[namaMenu]', '$_POST[link]', '$_POST[icon]', '$_POST[isMainMenu]','$_POST[role]')";
    $insert = mysqli_query($link, $query);
    if ($insert) {
        echo "<meta http-equiv='refresh' content='0; url=data.php'>";
    } else {
        echo "<script>window.alert('Data Gagal Disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
} elseif (isset($_POST['edit'])) {
    $query = "UPDATE menu SET noId='$_POST[noId]', menu='$_POST[namaMenu]', link='$_POST[link]', icon='$_POST[icon]', isMainMenu='$_POST[isMainMenu]' WHERE noId = '$_POST[noId]'";
    $update = mysqli_query($link, $query);
    if ($update) {
        echo "<meta http-equiv='refresh' content='0; url=data.php'>";
    } else {
        echo "<script>window.alert('Data Gagal Disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=edit.php'>";
    }
}
