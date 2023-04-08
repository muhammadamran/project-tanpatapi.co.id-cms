<?php
session_start();
include '../../config/conf.php';
// SIGNATURE
// ADD
if (isset($_POST["add_signature_"])) {

    $Title          = $_POST['Title'];
    $Page           = $_POST['Page'];
    $Subtitle       = $_POST['Subtitle'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content';
    $InputDescription     = $InputName . " Add Data: " .  $Log . ", Save Data as Log Content";
    $InputAction          = 'Add';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("INSERT INTO tb_signature
                        (id,title,subtitle,description,status)
                        VALUES
                        ('','$Title','$Subtitle','$Description','1')");

    if ($query) {
        echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=1&n=" . $Page . "&AddSuccess'</script>";
    } else {
        echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=1&n=" . $Page . "&AddFailed'</script>";
    }
}
// UPDATE
if (isset($_POST["update_signature_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content';
    $InputDescription     = $InputName . " Update Data: " .  $Log . ", Save Data as Log Content";
    $InputAction          = 'Update';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_signature SET title='$Title',
                                                  subtitle='$Subtitle',
                                                  description='$Description'
                                                  WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=1&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=1&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// DELETE
if (isset($_POST["delete_signature_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content';
    $InputDescription     = $InputName . " Delete Data: " .  $Log . ", Save Data as Log Content";
    $InputAction          = 'Delete';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("DELETE FROM tb_signature WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=1&n=" . $Page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=1&n=" . $Page . "&DeleteFailed'</script>";
    }
}
// ENABLED
if (isset($_POST["enabled_signature_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content';
    $InputDescription     = $InputName . " Enabled Data: " .  $Log . ", Save Data as Log Content";
    $InputAction          = 'Enabled';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_signature SET status='1'
                                                  WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Enabled Successfully');location.href = '../../index.php?m=content&s=1&n=" . $Page . "&EnabledSuccess'</script>";
    } else {
        echo "<script>alert('Enabled Unsuccessfully');location.href = '../../index.php?m=content&s=1&n=" . $Page . "&EnabledFailed'</script>";
    }
}
// DISABLED
if (isset($_POST["disabled_signature_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content';
    $InputDescription     = $InputName . " Disabled Data: " .  $Log . ", Save Data as Log Content";
    $InputAction          = 'Disabled';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_signature SET status='2'
                                                  WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Disabled Successfully');location.href = '../../index.php?m=content&s=1&n=" . $Page . "&DisabledSuccess'</script>";
    } else {
        echo "<script>alert('Disabled Unsuccessfully');location.href = '../../index.php?m=content&s=1&n=" . $Page . "&DisabledFailed'</script>";
    }
}

// MENU
// ADD
if (isset($_POST["add_signature_menu_"])) {
    // RP
    $Harga          = str_replace("Rp. ", "", $_POST['Price']);

    $Title          = $_POST['Title'];
    $Page           = $_POST['Page'];
    $Description    = $_POST['Description'];
    $Price          = str_replace(".", "", $Harga);
    $Sequence       = $_POST['Sequence'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'Siganture' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'Siganture' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/menu/signature/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/menu/signature/" . $newname);

        // FOR LOG
        $Log                  = $_POST['Title'] . '/' . $_POST['Price'];
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content Menu';
        $InputDescription     = $InputName . " Add: " .  $Log . ", Save Data as Log Content Menu";
        $InputAction          = 'Add';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("INSERT INTO tb_signature_menu
                            (id,title,description,prices,pictures,rorder,status)
                            VALUES
                            ('','" . $Title . "','" . $Description . "','" . $Price . "','" . $newname . "','" . $Sequence . "','1')
                            ");
        if ($query) {
            echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=1-menu&n=" . $Page . "&AddSuccess'</script>";
        } else {
            echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=1-menu&n=" . $Page . "&AddFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=1-menu&n=" . $Page . "&Type'</script>";
    }
}
// CHANGE PHOTO
if (isset($_POST["upload_signature_menu_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'ReSiganture' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'ReSiganture' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/menu/signature/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/menu/signature/" . $newname);

        // FOR LOG
        $Log                  = $_POST['Title'] . '/' . $_POST['Price'];
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content Menu';
        $InputDescription     = $InputName . " Change Photo: " .  $Log . ", Save Data as Log Content Menu";
        $InputAction          = 'Change Photo';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("UPDATE tb_signature_menu SET pictures='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=content&s=1-menu&n=" . $Page . "&UploadSuccess'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=content&s=1-menu&n=" . $Page . "&UploadFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=1-menu&n=" . $Page . "&Type'</script>";
    }
}
// UPDATE
if (isset($_POST["update_signature_menu_"])) {
    // RP
    $Harga          = str_replace("Rp. ", "", $_POST['Price']);

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Price          = str_replace(".", "", $Harga);
    $Sequence       = $_POST['Sequence'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Price'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content Menu';
    $InputDescription     = $InputName . " Update Data: " .  $Log . ", Save Data as Log Content Menu";
    $InputAction          = 'Update';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_signature_menu SET title='$Title',
                                                    prices='$Price',
                                                    rorder='$Sequence',
                                                    description='$Description'
                                                    WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=1-menu&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=1-menu&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// DELETE
if (isset($_POST["delete_signature_menu_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Price          = $_POST['Price'];
    $Log            = $_POST['Title'] . '/' . $_POST['Price'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content Menu';
    $InputDescription     = $InputName . " Delete Data: " .  $Log . ", Save Data as Log Content Menu";
    $InputAction          = 'Delete';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("DELETE FROM tb_signature_menu WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=1-menu&n=" . $Page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=1-menu&n=" . $Page . "&DeleteFailed'</script>";
    }
}
// ENABLED
if (isset($_POST["enabled_signature_menu_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Price          = $_POST['Price'];
    $Log            = $_POST['Title'] . '/' . $_POST['Price'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content Menu';
    $InputDescription     = $InputName . " Enabled Data: " .  $Log . ", Save Data as Log Content Menu";
    $InputAction          = 'Enabled';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_signature_menu SET status='1'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Enabled Successfully');location.href = '../../index.php?m=content&s=1-menu&n=" . $Page . "&EnabledSuccess'</script>";
    } else {
        echo "<script>alert('Enabled Unsuccessfully');location.href = '../../index.php?m=content&s=1-menu&n=" . $Page . "&EnabledFailed'</script>";
    }
}
// DISABLED
if (isset($_POST["disabled_signature_menu_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Price          = $_POST['Price'];
    $Log            = $_POST['Title'] . '/' . $_POST['Price'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content Menu';
    $InputDescription     = $InputName . " Disabled Data: " .  $Log . ", Save Data as Log Content Menu";
    $InputAction          = 'Disabled';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_signature_menu SET status='2'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Disabled Successfully');location.href = '../../index.php?m=content&s=1-menu&n=" . $Page . "&DisabledSuccess'</script>";
    } else {
        echo "<script>alert('Disabled Unsuccessfully');location.href = '../../index.php?m=content&s=1-menu&n=" . $Page . "&DisabledFailed'</script>";
    }
}
// END SIGNATURE

// KHAS
// ADD
if (isset($_POST["add_khas_"])) {

    $Title          = $_POST['Title'];
    $Page           = $_POST['Page'];
    $Subtitle       = $_POST['Subtitle'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content';
    $InputDescription     = $InputName . " Add Data: " .  $Log . ", Save Data as Log Content";
    $InputAction          = 'Add';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("INSERT INTO tb_khas
                        (id,title,subtitle,description,status)
                        VALUES
                        ('','$Title','$Subtitle','$Description','1')");

    if ($query) {
        echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=2&n=" . $Page . "&AddSuccess'</script>";
    } else {
        echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=2&n=" . $Page . "&AddFailed'</script>";
    }
}
// UPDATE
if (isset($_POST["update_khas_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content';
    $InputDescription     = $InputName . " Update Data: " .  $Log . ", Save Data as Log Content";
    $InputAction          = 'Update';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_khas SET title='$Title',
                                                  subtitle='$Subtitle',
                                                  description='$Description'
                                                  WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=2&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=2&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// DELETE
if (isset($_POST["delete_khas_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content';
    $InputDescription     = $InputName . " Delete Data: " .  $Log . ", Save Data as Log Content";
    $InputAction          = 'Delete';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("DELETE FROM tb_khas WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=2&n=" . $Page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=2&n=" . $Page . "&DeleteFailed'</script>";
    }
}
// ENABLED
if (isset($_POST["enabled_khas_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content';
    $InputDescription     = $InputName . " Enabled Data: " .  $Log . ", Save Data as Log Content";
    $InputAction          = 'Enabled';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_khas SET status='1'
                                                  WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Enabled Successfully');location.href = '../../index.php?m=content&s=2&n=" . $Page . "&EnabledSuccess'</script>";
    } else {
        echo "<script>alert('Enabled Unsuccessfully');location.href = '../../index.php?m=content&s=2&n=" . $Page . "&EnabledFailed'</script>";
    }
}
// DISABLED
if (isset($_POST["disabled_khas_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content';
    $InputDescription     = $InputName . " Disabled Data: " .  $Log . ", Save Data as Log Content";
    $InputAction          = 'Disabled';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_khas SET status='2'
                                                  WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Disabled Successfully');location.href = '../../index.php?m=content&s=2&n=" . $Page . "&DisabledSuccess'</script>";
    } else {
        echo "<script>alert('Disabled Unsuccessfully');location.href = '../../index.php?m=content&s=2&n=" . $Page . "&DisabledFailed'</script>";
    }
}

// MENU 1
// ADD
if (isset($_POST["add_khas_menu_"])) {
    // RP
    $Harga          = str_replace("Rp. ", "", $_POST['Price']);

    $Title          = $_POST['Title'];
    $Page           = $_POST['Page'];
    $Description    = $_POST['Description'];
    $Price          = str_replace(".", "", $Harga);
    $Sequence       = $_POST['Sequence'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'Khas' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'Khas' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/menu/khas/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/menu/khas/" . $newname);

        // FOR LOG
        $Log                  = $_POST['Title'] . '/' . $_POST['Price'];
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content Menu';
        $InputDescription     = $InputName . " Add: " .  $Log . ", Save Data as Log Content Menu";
        $InputAction          = 'Add';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("INSERT INTO tb_khas_menu
                            (id,title,description,prices,pictures,rorder,type,status)
                            VALUES
                            ('','" . $Title . "','" . $Description . "','" . $Price . "','" . $newname . "','" . $Sequence . "','1','1')
                            ");
        if ($query) {
            echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=2-menu-1&n=" . $Page . "&AddSuccess'</script>";
        } else {
            echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=2-menu-1&n=" . $Page . "&AddFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=2-menu-1&n=" . $Page . "&Type'</script>";
    }
}
// CHANGE PHOTO
if (isset($_POST["upload_khas_menu_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'ReKhas' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'ReKhas' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/menu/khas/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/menu/khas/" . $newname);

        // FOR LOG
        $Log                  = $_POST['Title'] . '/' . $_POST['Price'];
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content Menu';
        $InputDescription     = $InputName . " Change Photo: " .  $Log . ", Save Data as Log Content Menu";
        $InputAction          = 'Change Photo';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("UPDATE tb_khas_menu SET pictures='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=content&s=2-menu-1&n=" . $Page . "&UploadSuccess'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=content&s=2-menu-1&n=" . $Page . "&UploadFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=2-menu-1&n=" . $Page . "&Type'</script>";
    }
}
// UPDATE
if (isset($_POST["update_khas_menu_"])) {
    // RP
    $Harga          = str_replace("Rp. ", "", $_POST['Price']);

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Price          = str_replace(".", "", $Harga);
    $Sequence       = $_POST['Sequence'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Price'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content Menu';
    $InputDescription     = $InputName . " Update Data: " .  $Log . ", Save Data as Log Content Menu";
    $InputAction          = 'Update';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_khas_menu SET title='$Title',
                                                    prices='$Price',
                                                    rorder='$Sequence',
                                                    description='$Description'
                                                    WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=2-menu-1&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=2-menu-1&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// DELETE
if (isset($_POST["delete_khas_menu_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Price          = $_POST['Price'];
    $Log            = $_POST['Title'] . '/' . $_POST['Price'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content Menu';
    $InputDescription     = $InputName . " Delete Data: " .  $Log . ", Save Data as Log Content Menu";
    $InputAction          = 'Delete';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("DELETE FROM tb_khas_menu WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=2-menu-1&n=" . $Page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=2-menu-1&n=" . $Page . "&DeleteFailed'</script>";
    }
}
// ENABLED
if (isset($_POST["enabled_khas_menu_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Price          = $_POST['Price'];
    $Log            = $_POST['Title'] . '/' . $_POST['Price'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content Menu';
    $InputDescription     = $InputName . " Enabled Data: " .  $Log . ", Save Data as Log Content Menu";
    $InputAction          = 'Enabled';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_khas_menu SET status='1'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Enabled Successfully');location.href = '../../index.php?m=content&s=2-menu-1&n=" . $Page . "&EnabledSuccess'</script>";
    } else {
        echo "<script>alert('Enabled Unsuccessfully');location.href = '../../index.php?m=content&s=2-menu-1&n=" . $Page . "&EnabledFailed'</script>";
    }
}
// DISABLED
if (isset($_POST["disabled_khas_menu_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Price          = $_POST['Price'];
    $Log            = $_POST['Title'] . '/' . $_POST['Price'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content Menu';
    $InputDescription     = $InputName . " Disabled Data: " .  $Log . ", Save Data as Log Content Menu";
    $InputAction          = 'Disabled';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_khas_menu SET status='2'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Disabled Successfully');location.href = '../../index.php?m=content&s=2-menu-1&n=" . $Page . "&DisabledSuccess'</script>";
    } else {
        echo "<script>alert('Disabled Unsuccessfully');location.href = '../../index.php?m=content&s=2-menu-1&n=" . $Page . "&DisabledFailed'</script>";
    }
}

// MENU 2
// ADD
if (isset($_POST["add_khas_menu_flat_"])) {
    // RP
    $Harga          = str_replace("Rp. ", "", $_POST['Price']);

    $Title          = $_POST['Title'];
    $Page           = $_POST['Page'];
    $Description    = $_POST['Description'];
    $Price          = str_replace(".", "", $Harga);
    $Sequence       = $_POST['Sequence'];


    // FOR LOG
    $Log                  = $_POST['Title'] . '/' . $_POST['Price'];
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content Menu';
    $InputDescription     = $InputName . " Add: " .  $Log . ", Save Data as Log Content Menu";
    $InputAction          = 'Add';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("INSERT INTO tb_khas_menu
                            (id,title,description,prices,pictures,rorder,type,status)
                            VALUES
                            ('','" . $Title . "','" . $Description . "','" . $Price . "','-','" . $Sequence . "','2','1')
                            ");
    if ($query) {
        echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=2-menu-2&n=" . $Page . "&AddSuccess'</script>";
    } else {
        echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=2-menu-2&n=" . $Page . "&AddFailed'</script>";
    }
}
// UPDATE
if (isset($_POST["update_khas_menu_flat_"])) {
    // RP
    $Harga          = str_replace("Rp. ", "", $_POST['Price']);

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Price          = str_replace(".", "", $Harga);
    $Sequence       = $_POST['Sequence'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Price'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content Menu';
    $InputDescription     = $InputName . " Update Data: " .  $Log . ", Save Data as Log Content Menu";
    $InputAction          = 'Update';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_khas_menu SET title='$Title',
                                                    prices='$Price',
                                                    rorder='$Sequence',
                                                    description='$Description'
                                                    WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=2-menu-2&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=2-menu-2&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// DELETE
if (isset($_POST["delete_khas_menu_flat_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Price          = $_POST['Price'];
    $Log            = $_POST['Title'] . '/' . $_POST['Price'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content Menu';
    $InputDescription     = $InputName . " Delete Data: " .  $Log . ", Save Data as Log Content Menu";
    $InputAction          = 'Delete';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("DELETE FROM tb_khas_menu WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=2-menu-2&n=" . $Page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=2-menu-2&n=" . $Page . "&DeleteFailed'</script>";
    }
}
// ENABLED
if (isset($_POST["enabled_khas_menu_flat_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Price          = $_POST['Price'];
    $Log            = $_POST['Title'] . '/' . $_POST['Price'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content Menu';
    $InputDescription     = $InputName . " Enabled Data: " .  $Log . ", Save Data as Log Content Menu";
    $InputAction          = 'Enabled';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_khas_menu SET status='1'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Enabled Successfully');location.href = '../../index.php?m=content&s=2-menu-2&n=" . $Page . "&EnabledSuccess'</script>";
    } else {
        echo "<script>alert('Enabled Unsuccessfully');location.href = '../../index.php?m=content&s=2-menu-2&n=" . $Page . "&EnabledFailed'</script>";
    }
}
// DISABLED
if (isset($_POST["disabled_khas_menu_flat_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Price          = $_POST['Price'];
    $Log            = $_POST['Title'] . '/' . $_POST['Price'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content Menu';
    $InputDescription     = $InputName . " Disabled Data: " .  $Log . ", Save Data as Log Content Menu";
    $InputAction          = 'Disabled';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_khas_menu SET status='2'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Disabled Successfully');location.href = '../../index.php?m=content&s=2-menu-2&n=" . $Page . "&DisabledSuccess'</script>";
    } else {
        echo "<script>alert('Disabled Unsuccessfully');location.href = '../../index.php?m=content&s=2-menu-2&n=" . $Page . "&DisabledFailed'</script>";
    }
}
// END KHAS
