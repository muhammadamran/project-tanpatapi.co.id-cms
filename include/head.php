<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta name="<?= $seodesc; ?>" content="<?= $seodesc; ?>">
    <meta name="<?= $seodesc; ?>" content="<?= $seodesc; ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apps/icon/<?= $icon; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/apps/icon/<?= $icon; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/apps/icon/<?= $icon; ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="assets/css/default/app.min.css" rel="stylesheet" />
    <link href="assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
    <link href="assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
    <!-- LOAD AMRAN -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Font Poppins -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- FONTAWESON 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/solid.css" integrity="sha384-DhmF1FmzR9+RBLmbsAts3Sp+i6cZMWQwNTRsew7pO/e4gvzqmzcpAzhDIwllPonQ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/fontawesome.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous" />
    <!-- dropzone -->
    <link href="assets/plugins/dropzone/dist/min/dropzone.min.css" rel="stylesheet" />
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

    .header .navbar-brand .navbar-logo {
        margin-right: 10px;
        background: #00acac;
        /* border: 10px solid transparent; */
        border: 15px solid transparent;
        border-color: transparent rgba(0, 0, 0, .15) rgba(0, 0, 0, .3);
        position: relative;
        overflow: hidden;
        -webkit-border-radius: 4px;
        border-radius: 4px;
    }

    table {
        font-size: 12px;
    }
</style>

<body>
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">