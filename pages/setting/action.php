<?php
session_start();
include '../../config/conf.php';

// SETTING
if (isset($_POST["update_setting_"])) {

    $ID             = '1';
    $Title          = $_POST['Title'];
    $AppName        = $_POST['AppName'];
    $Company        = $_POST['Company'];
    $Description    = $_POST['Description'];
    $Tag            = $_POST['Tag'];
    $URL            = $_POST['URL'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content';
    $InputDescription     = $InputName . " Update Setting, Save Data as Log Setting";
    $InputAction          = 'Update';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_setting SET title='$Title',
                                                app_name='$AppName',
                                                company='$Company',
                                                seodesc='$Description',
                                                tag='$Tag',
                                                url='$URL'
                                            WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=setting&s=index&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=setting&s=index&UpdateFailed'</script>";
    }
}

// ICON
if (isset($_POST["update_icon_"])) {
    $ID             = '1';
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'Icon' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'Icon' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/apps/icon/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'SVG' || $ext == 'svg') {

        move_uploaded_file($tmpname, "../../assets/apps/icon/" . $newname);

        // FOR LOG
        $Log                  = $fileUpload;
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content Menu';
        $InputDescription     = $InputName . " Change Icon: " .  $Log . ", Save Data as Log Setting";
        $InputAction          = 'Change Photo';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("UPDATE tb_setting SET icon='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=setting&s=index&UploadSuccessIcon'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=setting&s=index&UploadFailedIcon'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=setting&s=index&TypeIcon'</script>";
    }
}

// LOGO
if (isset($_POST["update_logo_"])) {
    $ID             = '1';
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'Logo' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'Logo' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/apps/logo/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'SVG' || $ext == 'svg') {

        move_uploaded_file($tmpname, "../../assets/apps/logo/" . $newname);

        // FOR LOG
        $Log                  = $fileUpload;
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content Menu';
        $InputDescription     = $InputName . " Change Logo: " .  $Log . ", Save Data as Log Setting";
        $InputAction          = 'Change Photo';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("UPDATE tb_setting SET logo='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=setting&s=index&UploadSuccessLogo'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=setting&s=index&UploadFailedLogo'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=setting&s=index&TypeLogo'</script>";
    }
}

// BG LOGIN
if (isset($_POST["update_bg_login_"])) {
    $ID             = '1';
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'BG-Login' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'BG-Login' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/apps/bg-login/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'SVG' || $ext == 'svg') {

        move_uploaded_file($tmpname, "../../assets/apps/bg-login/" . $newname);

        // FOR LOG
        $Log                  = $fileUpload;
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content Menu';
        $InputDescription     = $InputName . " Change Background Login: " .  $Log . ", Save Data as Log Setting";
        $InputAction          = 'Change Photo';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("UPDATE tb_setting SET bg_login='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=setting&s=index&UploadSuccessBgLogin'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=setting&s=index&UploadFailedBgLogin'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=setting&s=index&TypeBgLogin'</script>";
    }
}

// BG PAGE
if (isset($_POST["update_bg_page_"])) {
    $ID             = '1';
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'BG-Page' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'BG-Page' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/apps/bg-page/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'SVG' || $ext == 'svg') {

        move_uploaded_file($tmpname, "../../assets/apps/bg-page/" . $newname);

        // FOR LOG
        $Log                  = $fileUpload;
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content Menu';
        $InputDescription     = $InputName . " Change Background Page: " .  $Log . ", Save Data as Log Setting";
        $InputAction          = 'Change Photo';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("UPDATE tb_setting SET bg_page='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=setting&s=index&UploadSuccessBgPage'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=setting&s=index&UploadFailedBgPage'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=setting&s=index&TypeBgPage'</script>";
    }
}

// BG FOOTER TOP
if (isset($_POST["update_bg_footer_top_"])) {
    $ID             = '1';
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'BG-Footer-Top' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'BG-Footer-Top' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/apps/bg-footer-top/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'SVG' || $ext == 'svg') {

        move_uploaded_file($tmpname, "../../assets/apps/bg-footer-top/" . $newname);

        // FOR LOG
        $Log                  = $fileUpload;
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content Menu';
        $InputDescription     = $InputName . " Change Background Footer Top: " .  $Log . ", Save Data as Log Setting";
        $InputAction          = 'Change Photo';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("UPDATE tb_setting SET bg_footer_top='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=setting&s=index&UploadSuccessBgFooterTop'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=setting&s=index&UploadFailedBgFooterTop'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=setting&s=index&TypeBgFooterTop'</script>";
    }
}

// BG HEADER
if (isset($_POST["update_bg_header_"])) {
    $ID             = '1';
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'BG-Header' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'BG-Header' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/apps/bg-header/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'SVG' || $ext == 'svg') {

        move_uploaded_file($tmpname, "../../assets/apps/bg-header/" . $newname);

        // FOR LOG
        $Log                  = $fileUpload;
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content Menu';
        $InputDescription     = $InputName . " Change Background Header: " .  $Log . ", Save Data as Log Setting";
        $InputAction          = 'Change Photo';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("UPDATE tb_setting SET bg_header='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=setting&s=index&UploadSuccessBgHeader'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=setting&s=index&UploadFailedBgHeader'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=setting&s=index&TypeBgHeader'</script>";
    }
}

// LOADER
if (isset($_POST["update_loader_"])) {
    $ID             = '1';
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'Loader' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'Loader' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/apps/loader/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'SVG' || $ext == 'svg' || $ext == 'GIF' || $ext == 'gif') {

        move_uploaded_file($tmpname, "../../assets/apps/loader/" . $newname);

        // FOR LOG
        $Log                  = $fileUpload;
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content Menu';
        $InputDescription     = $InputName . " Change Loader: " .  $Log . ", Save Data as Log Setting";
        $InputAction          = 'Change Photo';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("UPDATE tb_setting SET loader='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=setting&s=index&UploadSuccessLoader'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=setting&s=index&UploadFailedLoader'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=setting&s=index&TypeLoader'</script>";
    }
}

// BG FOOTER 
if (isset($_POST["update_bg_footer_"])) {
    $ID             = '1';
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'BG-Footer' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'BG-Footer' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/apps/bg-footer/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'SVG' || $ext == 'svg') {

        move_uploaded_file($tmpname, "../../assets/apps/bg-footer/" . $newname);

        // FOR LOG
        $Log                  = $fileUpload;
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content Menu';
        $InputDescription     = $InputName . " Change Background Footer Top: " .  $Log . ", Save Data as Log Setting";
        $InputAction          = 'Change Photo';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("UPDATE tb_setting SET bg_footer='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=setting&s=index&UploadSuccessBgFooter'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=setting&s=index&UploadFailedBgFooter'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=setting&s=index&TypeBgFooter'</script>";
    }
}
