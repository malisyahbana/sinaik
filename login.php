<?php
require_once 'config/config.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Arise Admin Panel" />
    <meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Themeforest, Bootstrap" />
    <meta name="author" content="Ramji" />
    <link rel="shortcut icon" href="img/fav.png">
    <title>SINAIK</title>

    <!-- Error CSS -->
    <link href="<?= base_url() ?>/assets/css/login.css" rel="stylesheet" media="screen">

    <!-- Animate CSS -->
    <link href="<?= base_url() ?>/assets/css/animate.css" rel="stylesheet" media="screen">

    <!-- Ion Icons -->
    <link href="<?= base_url() ?>/assets/fonts/icomoon/icomoon.css" rel="stylesheet" />
</head>

<body>
    <form action="config/ceklogin.php" id="wrapper" method="POST">
        <div id="box" class="animated bounceIn">
            <div id="top_header">
                <img src="<?= base_url() ?>/assets/img/logo-hss.png" height="80" width="80" alt="Arise Admin Dashboard Logo" />
                <h5>
                    Silahkan Login<br>
                    SISTEM INFORMASI MENAJEMEN
                    DATA KENAIKAN PANGKAT DAN PENSIUN <br>
                    DINAS PENDIDIKAN HSS
                </h5>
            </div>
            <div id="inputs">
                <div class="form-block">
                    <input type="text" placeholder="Username" name="username">
                    <i class="icon-user-check"></i>
                </div>
                <div class="form-block">
                    <input type="password" placeholder="Password" name="password">
                    <i class="icon-spell-check"></i>
                </div>
                <input type="submit" name="login" value="Sign In">
            </div>
            <div id="bottom" class="clearfix">
                <div class="pull-right">
                    <label class="switch pull-right">
                        <input type="checkbox" class="switch-input" checked>
                        <span class="switch-label" data-on="Yes" data-off="No"></span>
                        <span class="switch-handle"></span>
                    </label>
                </div>
                <div class="pull-right">
                    <span class="cb-label">Remember</span>
                </div>
            </div>
        </div>
    </form>
</body>

</html>