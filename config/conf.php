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
