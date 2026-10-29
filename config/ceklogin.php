<?php

include 'config.php';

if (isset($_POST['login'])) {
    $user = $link->real_escape_string($_POST['username']);
    $pass = $link->real_escape_string($_POST['password']);

    $pass = md5($pass);
    $query = $link->query("SELECT * FROM tpegawai WHERE uSr = '$user' AND pAss = '$pass' ");
    $data = $query->fetch_array();
    $username = $data['uSr'];
    $password = $data['pAss'];
    $usr = $data['nAma'];
    $nama = $data['nAma'];
    $nip  = $data['nIp'];
    $idPeg  = $data['idPeg'];
    $level    = $data['lVl'];
    $uMr = $data['uMr'];


    if ($user == $username && $pass == $password) {
        // session_start();
        $_SESSION['eMail'] = $username;
        $_SESSION['nAma'] = $usr;
        $_SESSION['nIp'] = $nip;
        $_SESSION['idPeg'] = $idPeg;
        $_SESSION['lVl']    = $level;
        $_SESSION['uMr'] = $uMr;
        if ($level == 'Admin') {
            echo "<script>alert('Anda berhasil login. Sebagai : $usr');</script>";
            echo "<meta http-equiv='refresh' content='0; url=../admin/dashboard/index.php'>";
        } elseif ($level == 'Pegawai') {
            echo "<script>alert('Anda berhasil login. Sebagai : $usr');</script>";
            echo "<meta http-equiv='refresh' content='0; url=../pegawai/dashboard/index.php'>";
        } elseif ($level == 'KADIS') {
            echo "<script>alert('Anda berhasil login. Sebagai : $usr');</script>";
            echo "<meta http-equiv='refresh' content='0; url=../kepala/dashboard/index.php'>";
        } else {
            echo "<script>alert('Username dan Password Tidak Ditemukan');</script>";
            echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
        }
    }
}
