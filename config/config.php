<?php
date_default_timezone_set('Asia/jakarta');

session_start();

// Konfigurasi DataBase
include_once "database.php";
$link = mysqli_connect($con['host'], $con['user'], $con['pass'], $con['db']);
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
}

// Konfigurasi baseurl
function base_url($url = null)
{
    $base_url = "http://localhost/sinaik";
    if ($url != null) {
        return $base_url . "/" . $url;
    } else {
        return $base_url;
    }
}
?>
<?php
?>