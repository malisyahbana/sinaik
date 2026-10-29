<?php
require_once "config/config.php";

if (!isset($_SESSION['user'])) {
    echo "<script> alert('Silahkan Login Terlebih Dahulu'); </script>";
    echo "<meta http-equiv='refresh' content='0; url=" . base_url() . "/login.php'>";
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="Ponsel" content="Ponsel" />
        <link rel="shortcut icon" href="<?= base_url() ?>/assets/img/logo-hss.png">
        <title>SINAIK</title>

        <!-- Bootstrap CSS -->
        <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" media="screen" />

        <!-- Main CSS -->
        <link href="<?= base_url() ?>/assets/css/main.css" rel="stylesheet" media="screen" />

        <!-- Ion Icons -->
        <link href="<?= base_url() ?>/assets/fonts/icomoon/icomoon.css" rel="stylesheet" />

        <!-- Data Tables -->
        <link rel="stylesheet" href="<?= base_url() ?>/assets/css/datatables/dataTables.bs.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>/assets/css/datatables/autoFill.bs.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>/assets/css/datatables/fixedHeader.bs.css">
        <link href="<?= base_url() ?>/assets/css/users.css" rel="stylesheet" media="screen" />
        <!-- Tambahan -->
        <link href="<?= base_url() ?>/assets/css/alertify/core.css" rel="stylesheet">
        <link href="<?= base_url() ?>/assets/css/alertify/default.css" rel="stylesheet">


    </head>

    <body>

        <!-- Header starts -->
        <header>

            <!-- Logo starts -->
            <a href="<?= base_url() ?>/admin" class="logo">
                <img src="<?= base_url() ?>/assets/img/disdik2.png" alt="Arise Admin Dashboard Logo" />
            </a>
            <!-- Logo ends -->

            <!-- Header actions starts -->
            <ul id="header-actions" class="clearfix">
                <li class="list-box user-admin hidden-xs dropdown">
                    <div class="admin-details">
                        <!-- <?php
                                $nama = $_SESSION['nama'];
                                ?> -->
                        <!-- <div class="name"><?php echo $nama; ?></div> -->
                        <div class="designation">System Admin</div>
                    </div>
                    <a id="drop4" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-user"></i>
                    </a>
                    <ul class="dropdown-menu sm">
                        <li class="dropdown-content">
                            <!-- <a href="profile.html">Edit Profile</a>
                        <a href="forgot-pwd.html">Change Password</a> -->
                            <a href="<?= base_url() ?>/config/menu/data.php">Settings Menu</a>
                            <a href="<?= base_url() ?>/logout.php">Logout</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button" id="toggleMenu" class="toggle-menu">
                        <i class="collapse-menu-icon"></i>
                    </button>
                </li>
            </ul>
            <!-- Header actions ends -->


        </header>
        <!-- Header ends -->

        <!-- Left sidebar start -->
        <div class="vertical-nav">

            <!-- Collapse menu starts -->
            <button class="collapse-menu">
                <i class="icon-menu2"></i>
            </button>
            <!-- Collapse menu ends -->

            <!-- Current user starts -->
            <div class="user-details clearfix">
                <a href="profile.html" class="user-img">
                    <img src="<?= base_url() ?>/assets/img/logo-hss.png" height="200" width="200" alt="User Info">
                    <!-- <span class="likes-info">9</span> -->
                    <!-- <?php
                            $nama = $_SESSION['nama'];
                            ?> -->
                </a>
                <h5 class="user-name" value="">DISDIK KAB. HSS</h5>
            </div>
            <!-- Current user ends -->

            <!-- Sidebar menu starts -->
            <ul class="menu clearfix">
                <?php
                $mainMenu = mysqli_query($link, "SELECT * FROM menu WHERE isMainMenu = '0'");
                foreach ($mainMenu as $main) {
                    $id = $main['noId'];
                    $subMenu = mysqli_query($link, "SELECT * FROM menu WHERE isMainMenu = '$id'");
                    if (mysqli_num_rows($subMenu) > 0) {
                ?>
                        <li>
                            <a href="#">
                                <i class="<?= $main['icon'] ?>"></i>
                                <span class="menu-item"><?= $main['menu'] ?></span>
                                <span class="down-arrow"></span>
                            </a>
                            <ul>
                                <?php while ($sub = mysqli_fetch_array($subMenu)) { ?>
                                    <li>
                                        <a href='<?= base_url(), '/', $sub['link'] ?>'><?= $sub['menu'] ?></a>
                                    </li>
                                <?php

                                }
                                ?>
                            </ul>
                        </li>
                    <?php

                    } else {
                    ?>
                        <li>
                            <a href="<?= base_url(), '/', $main['link'] ?>">
                                <i class="<?= $main['icon'] ?>"></i>
                                <span class="menu-item"><?= $main['menu'] ?></span>
                            </a>
                        </li>
                <?php

                    }
                }
                ?>
            </ul>
            <!-- Sidebar menu ends -->
        </div>
        <!-- Left sidebar end -->
    <?php } ?>
    <!-- Dashboard Wrapper Start -->
    <div class="dashboard-wrapper dashboard-wrapper-lg">

        <!-- Container fluid Starts -->
        <div class="container-fluid">