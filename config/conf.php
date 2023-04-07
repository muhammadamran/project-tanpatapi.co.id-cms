<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tanpatapi";

$db = new mysqli($servername, $username, $password, $dbname);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

date_default_timezone_set("Asia/Jakarta");

// LOAD SETTING
$QloadConfig    = $db->query("SELECT * FROM tb_setting WHERE status='Active'");
$loadConfig     = mysqli_fetch_array($QloadConfig);

if ($loadConfig == NULL) {
    $id = '0';
    $icon = 'icon.svg';
    $logoOne = 'APP';
    $logoTwo = 'CMS';
    $loader = 'aa';
    $title = ' | Content Managemen System';
    $app_name = '-';
    $company = 'Hellos<sup>ID</sup>';
    $telp = '+62';
    $email = 'info@hellosid.com';
    $seodesc = 'Apps,CMS, Content Managemen System';
    $address = 'Address';
    $facebook = '';
    $twitter = '';
    $instagram = '';
    $youtube = '';
    $url = '';
    $created_by = '';
    $created_date = '';
    $status = '';
    $btnColor = '#050D28';
    $btnColorHover = '#213475';
} else {
    $id = $loadConfig['id'];
    $icon = $loadConfig['icon'];
    $logoOne = $loadConfig['logoOne'];
    $logoTwo = $loadConfig['logoTwo'];
    $loader = $loadConfig['loader'];
    $title = $loadConfig['title'];
    $app_name = $loadConfig['app_name'];
    $company = $loadConfig['company'];
    $telp = $loadConfig['telp'];
    $email = $loadConfig['email'];
    $seodesc = $loadConfig['seodesc'];
    $address = $loadConfig['address'];
    $facebook = $loadConfig['facebook'];
    $twitter = $loadConfig['twitter'];
    $instagram = $loadConfig['instagram'];
    $youtube = $loadConfig['youtube'];
    $url = $loadConfig['url'];
    $created_by = $loadConfig['created_by'];
    $created_date = $loadConfig['created_date'];
    $status = $loadConfig['status'];
    $btnColor = $loadConfig['btnColor'];
    $btnColorHover = $loadConfig['btnColorHover'];
}
// END LOAD SETTING

class helpers
{
    function dateIndonesia($date)
    {
        $result = '';
        if (!empty($date) && $date !== '0000-00-00') {
            $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
            $tahun = substr($date, 0, 4);
            $bulan = substr($date, 5, 2);
            $tgl   = substr($date, 8, 2);

            $result = $tgl . " " . $BulanIndo[(int)$bulan - 1] . " " . $tahun;
        }
        return $result;
    }

    function dateTimeIndonesia($date)
    {
        $result = '';
        if (!empty($date) && $date !== '0000-00-00 00:00:00') {
            $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
            $tahun = substr($date, 0, 4);
            $bulan = substr($date, 5, 2);
            $tgl   = substr($date, 8, 2);

            $result = $tgl . " " . $BulanIndo[(int)$bulan - 1] . " " . $tahun . ' - ' . substr($date, 11, 19);
        }
        return $result;
    }

    function berita($content)
    {
        $isi = strip_tags($content);
        if (strlen($isi) > 80) {
            $berita = substr($isi, 0, 80) . ' ...';
        } else {
            $berita = $content;
        }

        return $berita;
    }
}

$helpers = new helpers();



function hargaRupiah($harga)
{
    return "Rp. " . number_format($harga, 0, ',', '.');
}
