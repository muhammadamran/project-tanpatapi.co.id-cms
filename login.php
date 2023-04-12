<?php
// LOAD SETTING
$QloadConfig    = $db->query("SELECT * FROM tb_setting WHERE id='1'");
$loadConfig     = mysqli_fetch_array($QloadConfig);

$id = $loadConfig['id'] != NULL ? $loadConfig['id'] : '0';
$icon = $loadConfig['icon'] != NULL ? $loadConfig['icon'] : 'icon.svg';
$logo = $loadConfig['logo'] != NULL ? $loadConfig['logo'] : 'logo.png';
$loader = $loadConfig['loader'] != NULL ? $loadConfig['loader'] : 'loader.svg';
$title = $loadConfig['title'] != NULL ? $loadConfig['title'] : ' | Content Managemen System';
$app_name = $loadConfig['app_name'] != NULL ? $loadConfig['app_name'] : 'CMS HELLOS<sup>ID</sup>';
$company = $loadConfig['company'] != NULL ? $loadConfig['company'] : 'www.hellos-id.com';
$seodesc = $loadConfig['seodesc'] != NULL ? $loadConfig['seodesc'] : 'Apps,CMS, Content Managemen System';
$tag = $loadConfig['tag'] != NULL ? $loadConfig['tag'] : 'Apps,CMS, Content Managemen System';
$urlWeb = $loadConfig['url'] != NULL ? $loadConfig['url'] : 'https://';
$status = $loadConfig['status'] != NULL ? $loadConfig['status'] : 'Active';
$btnColor = $loadConfig['btnColor'] != NULL ? $loadConfig['btnColor'] : '#050D28';
$btnColorHover = $loadConfig['btnColorHover'] != NULL ? $loadConfig['btnColorHover'] : '#213475';
$bg_login = $loadConfig['bg_login'] != NULL ? $loadConfig['bg_login'] : 'login-bg.svg';
$bg_header = $loadConfig['bg_header'] != NULL ? $loadConfig['bg_header'] : 'header-bg.svg';
$bg_page = $loadConfig['bg_page'] != NULL ? $loadConfig['bg_page'] : 'background.svg';
$bg_footer_top = $loadConfig['bg_footer_top'] != NULL ? $loadConfig['bg_footer_top'] : 'footer-top-bg.svg';
$bg_footer = $loadConfig['bg_footer'] != NULL ? $loadConfig['bg_footer'] : 'footer-bg.svg';
// END LOAD SETTING
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In <?= $title ?></title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="<?= $seodesc; ?>" content="<?= $seodesc; ?>">
    <meta name="<?= $seodesc; ?>" content="<?= $seodesc; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apps/icon/<?= $icon; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/apps/icon/<?= $icon; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/apps/icon/<?= $icon; ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="assets/css/default/app.min.css" rel="stylesheet" />
    <!-- LOAD AMRAN -->
    <!-- Font Poppins -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- FONTAWESON 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/solid.css" integrity="sha384-DhmF1FmzR9+RBLmbsAts3Sp+i6cZMWQwNTRsew7pO/e4gvzqmzcpAzhDIwllPonQ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/fontawesome.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous" />
</head>

<style>
    body {
        font-family: Poppins;
    }

    .btn-default {
        color: #fff;
        background-color: <?= $btnColor; ?>;
        border-color: <?= $btnColor; ?>;
        -webkit-box-shadow: 0;
        box-shadow: 0;
    }

    .btn-default:hover {
        color: #fff;
        background-color: <?= $btnColorHover; ?>;
        border-color: <?= $btnColorHover; ?>;
        -webkit-box-shadow: 0;
        box-shadow: 0;
    }

    .login-divider {
        background: #000;
        height: 4px;
        width: calc(60%);
        margin: 0px;
        box-sizing: border-box;
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>

<body class="pace-top">
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>

    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin login -->
        <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image" style="background-image: url(assets/apps/bg-login/<?= $bg_login; ?>)"></div>
                <div class="news-caption">
                    <h4 class="caption-title"><b>CMS</b> <?= $app_name; ?></h4>
                    <p>
                        <?= $seodesc; ?>
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div style="display:flex;justify-content:flex-start;align-items: center;margin-left: -10px;margin-top: -3px;">
                        <div>
                            <img src="assets/apps/icon/<?= $icon; ?>" alt="Icon" style="width: 70px">
                        </div>
                        <div style="display:grid;justify-content:flex-start;align-items: center;">
                            <div>
                                <font style="font-size: 30px;"><b>CMS</b></font>
                            </div>
                            <div style="margin-top: -10px;">
                                <font style="font-size: 16px;">Content Management System</font>
                            </div>
                        </div>
                    </div>
                    <div class="login-divider"></div>
                    <div class="brand">
                        <small>Happy to see you again!</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in-alt"></i>
                    </div>
                </div>
                <div class="login-content">
                    <form action="execute.php" method="POST" class="margin-bottom-0">
                        <div class="form-group m-b-15">
                            <input type="text" class="form-control form-control-lg" name="username" id="username" placeholder="Email Address" required />
                        </div>
                        <div class="form-group m-b-15">
                            <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password" required />
                        </div>
                        <div class="checkbox checkbox-css">
                            <input type="checkbox" id="show_password" value="" onclick="myFunction()" />
                            <label for="show_password">
                                Show Password
                            </label>
                        </div>
                        <div class="checkbox checkbox-css m-b-30">
                            <input type="checkbox" id="remember_me_checkbox" value="" />
                            <label for="remember_me_checkbox">
                                Remember Me
                            </label>
                        </div>
                        <div class="login-buttons">
                            <button type="submit" name="login" class="btn btn-default btn-block btn-lg">Log In</button>
                        </div>
                        <hr />
                        <p class="text-center text-grey-darker mb-0">
                            &copy; Powered by <b>HELLOS<sup>ID</sup></b>
                            <?php if (date('Y') == '2023') { ?>
                                <?= date('Y'); ?>
                            <?php } else { ?>
                                2023 - <?= date('Y'); ?>
                            <?php } ?>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/theme/default.min.js"></script>
    <!-- Show Password -->
    <script type="text/javascript">
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <!-- End Show Password -->
</body>

</html>