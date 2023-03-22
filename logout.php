<?php
ini_set('display_errors', 0);
ini_set('max_execution_time', 0);
date_default_timezone_set("Asia/Jakarta");
session_start();
session_destroy();
include "config/conf.php";
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['role']);
unset($_SESSION['email']);
unset($_SESSION['telp']);
unset($_SESSION['address']);
unset($_SESSION['jabatan']);
unset($_SESSION['department']);
unset($_SESSION['created_by']);
unset($_SESSION['created_date']);
unset($_SESSION['first']);
unset($_SESSION['middle']);
unset($_SESSION['last']);
unset($_SESSION['nik']);
unset($_SESSION['job']);
unset($_SESSION['status']);

header('Location: index.php');
