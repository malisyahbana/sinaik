<?php
session_start();
$_SESSION["Npeg"];
$_SESSION["username"];


unset($_SESSION["Npeg"]);
unset($_SESSION["username"]);
session_unset();

session_destroy();

header("Location: login.php");
exit();
