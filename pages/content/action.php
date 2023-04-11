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

// TUMPENG
// ADD
if (isset($_POST["add_tumpeng_"])) {
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Page           = $_POST['Page'];
    $Description    = $_POST['Description'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'Tumpeng' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'Tumpeng' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/menu/tumpeng/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/menu/tumpeng/" . $newname);

        // FOR LOG
        $Log                  = $_POST['Title'] . '/' . $_POST['Subtitle'];
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content';
        $InputDescription     = $InputName . " Add: " .  $Log . ", Save Data as Log Content";
        $InputAction          = 'Add';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("INSERT INTO tb_tumpeng
                            (id,title,subtitle,description,pictures,status)
                            VALUES
                            ('','" . $Title . "','" . $Subtitle . "','" . $Description . "','" . $newname . "','1')
                            ");
        if ($query) {
            echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=3&n=" . $Page . "&AddSuccess'</script>";
        } else {
            echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=3&n=" . $Page . "&AddFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=3&n=" . $Page . "&Type'</script>";
    }
}
// CHANGE PHOTO
if (isset($_POST["upload_tumpeng_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'ReTumpeng' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'ReTumpeng' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/menu/tumpeng/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/menu/tumpeng/" . $newname);

        // FOR LOG
        $Log                  = $_POST['Title'] . '/' . $_POST['Subtitle'];
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content';
        $InputDescription     = $InputName . " Change Photo: " .  $Log . ", Save Data as Log Content";
        $InputAction          = 'Change Photo';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("UPDATE tb_tumpeng SET pictures='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=content&s=3&n=" . $Page . "&UploadSuccess'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=content&s=3&n=" . $Page . "&UploadFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=3&n=" . $Page . "&Type'</script>";
    }
}
// UPDATE
if (isset($_POST["update_tumpeng_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

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

    $query .= $db->query("UPDATE tb_tumpeng SET title='$Title',
                                                    subtitle='$Subtitle',
                                                    description='$Description'
                                                    WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=3&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=3&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// DELETE
if (isset($_POST["delete_tumpeng_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
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

    $query .= $db->query("DELETE FROM tb_tumpeng WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=3&n=" . $Page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=3&n=" . $Page . "&DeleteFailed'</script>";
    }
}
// ENABLED
if (isset($_POST["enabled_tumpeng_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
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

    $query .= $db->query("UPDATE tb_tumpeng SET status='1'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Enabled Successfully');location.href = '../../index.php?m=content&s=3&n=" . $Page . "&EnabledSuccess'</script>";
    } else {
        echo "<script>alert('Enabled Unsuccessfully');location.href = '../../index.php?m=content&s=3&n=" . $Page . "&EnabledFailed'</script>";
    }
}
// DISABLED
if (isset($_POST["disabled_tumpeng_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
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

    $query .= $db->query("UPDATE tb_tumpeng SET status='2'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Disabled Successfully');location.href = '../../index.php?m=content&s=3&n=" . $Page . "&DisabledSuccess'</script>";
    } else {
        echo "<script>alert('Disabled Unsuccessfully');location.href = '../../index.php?m=content&s=3&n=" . $Page . "&DisabledFailed'</script>";
    }
}

// LIST
// ADD
if (isset($_POST["add_tumpeng_list_"])) {

    $Title          = $_POST['Title'];
    $Page           = $_POST['Page'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'];

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

    $query .= $db->query("INSERT INTO tb_tumpeng
                        (id,title,description,type,status)
                        VALUES
                        ('','$Title','$Description','1','1')");

    if ($query) {
        echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=3-list&n=" . $Page . "&AddSuccess'</script>";
    } else {
        echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=3-list&n=" . $Page . "&AddFailed'</script>";
    }
}
// UPDATE
if (isset($_POST["update_tumpeng_list_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'];

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

    $query .= $db->query("UPDATE tb_tumpeng SET title='$Title',
                                                description='$Description'
                                                WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=3-list&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=3-list&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// DELETE
if (isset($_POST["delete_tumpeng_list_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Log            = $_POST['Title'];

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

    $query .= $db->query("DELETE FROM tb_tumpeng WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=3-list&n=" . $Page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=3-list&n=" . $Page . "&DeleteFailed'</script>";
    }
}
// ENABLED
if (isset($_POST["enabled_tumpeng_list_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Log            = $_POST['Title'];

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

    $query .= $db->query("UPDATE tb_tumpeng SET status='1'
                                                WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Enabled Successfully');location.href = '../../index.php?m=content&s=3-list&n=" . $Page . "&EnabledSuccess'</script>";
    } else {
        echo "<script>alert('Enabled Unsuccessfully');location.href = '../../index.php?m=content&s=3-list&n=" . $Page . "&EnabledFailed'</script>";
    }
}
// DISABLED
if (isset($_POST["disabled_tumpeng_list_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Log            = $_POST['Title'];

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

    $query .= $db->query("UPDATE tb_tumpeng SET status='2'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Disabled Successfully');location.href = '../../index.php?m=content&s=3-list&n=" . $Page . "&DisabledSuccess'</script>";
    } else {
        echo "<script>alert('Disabled Unsuccessfully');location.href = '../../index.php?m=content&s=3-list&n=" . $Page . "&DisabledFailed'</script>";
    }
}

// PAX
// ADD
if (isset($_POST["add_tumpeng_pax_"])) {
    // RP
    $Harga          = str_replace("Rp. ", "", $_POST['Price']);

    $Pax            = $_POST['Pax'];
    $Page           = $_POST['Page'];
    $Price          = str_replace(".", "", $Harga);
    $Log            = $_POST['Pax'] . '/' . $Price;

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

    $query .= $db->query("INSERT INTO tb_tumpeng_list
                        (id,pax,prices,status)
                        VALUES
                        ('','$Pax','$Price','1')");

    if ($query) {
        echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=3-list&n=" . $Page . "&AddSuccessPax'</script>";
    } else {
        echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=3-list&n=" . $Page . "&AddFailedPax'</script>";
    }
}
// UPDATE
if (isset($_POST["update_tumpeng_pax_"])) {
    // RP
    $Harga          = str_replace("Rp. ", "", $_POST['Price']);

    $ID             = $_POST['ID'];
    $Pax            = $_POST['Pax'];
    $Page           = $_POST['Page'];
    $Price          = str_replace(".", "", $Harga);
    $Log            = $_POST['Pax'] . '/' . $Price;

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

    $query .= $db->query("UPDATE tb_tumpeng_list SET pax='$Pax',
                                                     prices='$Price'
                                                 WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=3-list&n=" . $Page . "&UpdateSuccessPax'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=3-list&n=" . $Page . "&UpdateFailedPax'</script>";
    }
}
// DELETE
if (isset($_POST["delete_tumpeng_pax_"])) {
    $Harga          = str_replace("Rp. ", "", $_POST['Price']);

    $ID             = $_POST['ID'];
    $Pax            = $_POST['Pax'];
    $Page           = $_POST['Page'];
    $Price          = str_replace(".", "", $Harga);
    $Log            = $_POST['Pax'] . '/' . $Price;

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

    $query .= $db->query("DELETE FROM tb_tumpeng_list WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=3-list&n=" . $Page . "&DeleteSuccessPax'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=3-list&n=" . $Page . "&DeleteFailedPax'</script>";
    }
}

// MENU
// ADD
if (isset($_POST["add_tumpeng_menu_"])) {
    // RP
    $Harga          = str_replace("Rp. ", "", $_POST['Price']);

    $Title          = $_POST['Title'];
    $Page           = $_POST['Page'];
    $Description    = $_POST['Description'];
    $Price          = str_replace(".", "", $Harga);
    $Sequence       = $_POST['Sequence'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'TumpengMini' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'TumpengMini' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/menu/tumpeng/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/menu/tumpeng/" . $newname);

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

        $query .= $db->query("INSERT INTO tb_tumpeng_menu
                            (id,title,description,prices,pictures,rorder,status)
                            VALUES
                            ('','" . $Title . "','" . $Description . "','" . $Price . "','" . $newname . "','" . $Sequence . "','1')
                            ");
        if ($query) {
            echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=3-menu&n=" . $Page . "&AddSuccess'</script>";
        } else {
            echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=3-menu&n=" . $Page . "&AddFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=3-menu&n=" . $Page . "&Type'</script>";
    }
}
// CHANGE PHOTO
if (isset($_POST["upload_tumpeng_menu_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'ReTumpengMini' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'ReTumpengMini' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/menu/tumpeng/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/menu/tumpeng/" . $newname);

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

        $query .= $db->query("UPDATE tb_tumpeng_menu SET pictures='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=content&s=3-menu&n=" . $Page . "&UploadSuccess'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=content&s=3-menu&n=" . $Page . "&UploadFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=3-menu&n=" . $Page . "&Type'</script>";
    }
}
// UPDATE
if (isset($_POST["update_tumpeng_menu_"])) {
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

    $query .= $db->query("UPDATE tb_tumpeng_menu SET title='$Title',
                                                    prices='$Price',
                                                    rorder='$Sequence',
                                                    description='$Description'
                                                    WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=3-menu&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=3-menu&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// DELETE
if (isset($_POST["delete_tumpeng_menu_"])) {

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

    $query .= $db->query("DELETE FROM tb_tumpeng_menu WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=3-menu&n=" . $Page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=3-menu&n=" . $Page . "&DeleteFailed'</script>";
    }
}
// ENABLED
if (isset($_POST["enabled_tumpeng_menu_"])) {
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

    $query .= $db->query("UPDATE tb_tumpeng_menu SET status='1'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Enabled Successfully');location.href = '../../index.php?m=content&s=3-menu&n=" . $Page . "&EnabledSuccess'</script>";
    } else {
        echo "<script>alert('Enabled Unsuccessfully');location.href = '../../index.php?m=content&s=3-menu&n=" . $Page . "&EnabledFailed'</script>";
    }
}
// DISABLED
if (isset($_POST["disabled_tumpeng_menu_"])) {
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

    $query .= $db->query("UPDATE tb_tumpeng_menu SET status='2'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Disabled Successfully');location.href = '../../index.php?m=content&s=3-menu&n=" . $Page . "&DisabledSuccess'</script>";
    } else {
        echo "<script>alert('Disabled Unsuccessfully');location.href = '../../index.php?m=content&s=3-menu&n=" . $Page . "&DisabledFailed'</script>";
    }
}
// END TUMPENG

// SNACKBOX
// ADD
if (isset($_POST["add_snackbox_"])) {
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Page           = $_POST['Page'];
    $Description    = $_POST['Description'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'Snackbox' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'Snackbox' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/menu/snackbox/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/menu/snackbox/" . $newname);

        // FOR LOG
        $Log                  = $_POST['Title'] . '/' . $_POST['Subtitle'];
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content';
        $InputDescription     = $InputName . " Add: " .  $Log . ", Save Data as Log Content";
        $InputAction          = 'Add';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("INSERT INTO tb_snackbox
                            (id,title,subtitle,description,pictures,status)
                            VALUES
                            ('','" . $Title . "','" . $Subtitle . "','" . $Description . "','" . $newname . "','1')
                            ");
        if ($query) {
            echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=4&n=" . $Page . "&AddSuccess'</script>";
        } else {
            echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=4&n=" . $Page . "&AddFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=4&n=" . $Page . "&Type'</script>";
    }
}
// CHANGE PHOTO
if (isset($_POST["upload_snackbox_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'ReSnackbox' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'ReSnackbox' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/menu/snackbox/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/menu/snackbox/" . $newname);

        // FOR LOG
        $Log                  = $_POST['Title'] . '/' . $_POST['Subtitle'];
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content';
        $InputDescription     = $InputName . " Change Photo: " .  $Log . ", Save Data as Log Content";
        $InputAction          = 'Change Photo';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("UPDATE tb_snackbox SET pictures='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=content&s=4&n=" . $Page . "&UploadSuccess'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=content&s=4&n=" . $Page . "&UploadFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=4&n=" . $Page . "&Type'</script>";
    }
}
// UPDATE
if (isset($_POST["update_snackbox_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

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

    $query .= $db->query("UPDATE tb_snackbox SET title='$Title',
                                                    subtitle='$Subtitle',
                                                    description='$Description'
                                                    WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=4&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=4&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// DELETE
if (isset($_POST["delete_snackbox_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
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

    $query .= $db->query("DELETE FROM tb_snackbox WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=4&n=" . $Page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=4&n=" . $Page . "&DeleteFailed'</script>";
    }
}
// ENABLED
if (isset($_POST["enabled_snackbox_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
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

    $query .= $db->query("UPDATE tb_snackbox SET status='1'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Enabled Successfully');location.href = '../../index.php?m=content&s=4&n=" . $Page . "&EnabledSuccess'</script>";
    } else {
        echo "<script>alert('Enabled Unsuccessfully');location.href = '../../index.php?m=content&s=4&n=" . $Page . "&EnabledFailed'</script>";
    }
}
// DISABLED
if (isset($_POST["disabled_snackbox_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
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

    $query .= $db->query("UPDATE tb_snackbox SET status='2'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Disabled Successfully');location.href = '../../index.php?m=content&s=4&n=" . $Page . "&DisabledSuccess'</script>";
    } else {
        echo "<script>alert('Disabled Unsuccessfully');location.href = '../../index.php?m=content&s=4&n=" . $Page . "&DisabledFailed'</script>";
    }
}

// SWEET
// ADD
if (isset($_POST["add_snackbox_sweet_"])) {
    $Page           = $_POST['Page'];
    $Name           = $_POST['Name'];
    $Qty            = $_POST['Qty'];
    $Log            = $Name . '/' . $Qty;

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

    $query .= $db->query("INSERT INTO tb_ss
                        (id,name,pcs,type,status)
                        VALUES
                        ('','$Name','$Qty','sweet','1')");

    if ($query) {
        echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=4-sweet&n=" . $Page . "&AddSuccess'</script>";
    } else {
        echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=4-sweet&n=" . $Page . "&AddFailed'</script>";
    }
}
// UPDATE
if (isset($_POST["update_snackbox_sweet_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Name           = $_POST['Name'];
    $Qty            = $_POST['Qty'];
    $Log            = $Name . '/' . $Qty;

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

    $query .= $db->query("UPDATE tb_ss SET name='$Name',
                                           pcs='$Qty'
                                        WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=4-sweet&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=4-sweet&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// DELETE
if (isset($_POST["delete_snackbox_sweet_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Name           = $_POST['Name'];
    $Qty            = $_POST['Qty'];
    $Log            = $Name . '/' . $Qty;

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

    $query .= $db->query("DELETE FROM tb_ss WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=4-sweet&n=" . $Page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=4-sweet&n=" . $Page . "&DeleteFailed'</script>";
    }
}

// SAVORY
// ADD
if (isset($_POST["add_snackbox_savory_"])) {
    $Page           = $_POST['Page'];
    $Name           = $_POST['Name'];
    $Qty            = $_POST['Qty'];
    $Log            = $Name . '/' . $Qty;

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

    $query .= $db->query("INSERT INTO tb_ss
                        (id,name,pcs,type,status)
                        VALUES
                        ('','$Name','$Qty','savory','1')");

    if ($query) {
        echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=4-savory&n=" . $Page . "&AddSuccess'</script>";
    } else {
        echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=4-savory&n=" . $Page . "&AddFailed'</script>";
    }
}
// UPDATE
if (isset($_POST["update_snackbox_savory_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Name           = $_POST['Name'];
    $Qty            = $_POST['Qty'];
    $Log            = $Name . '/' . $Qty;

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

    $query .= $db->query("UPDATE tb_ss SET name='$Name',
                                           pcs='$Qty'
                                        WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=4-savory&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=4-savory&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// DELETE
if (isset($_POST["delete_snackbox_savory_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Name           = $_POST['Name'];
    $Qty            = $_POST['Qty'];
    $Log            = $Name . '/' . $Qty;

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

    $query .= $db->query("DELETE FROM tb_ss WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=4-savory&n=" . $Page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=4-savory&n=" . $Page . "&DeleteFailed'</script>";
    }
}
// END SNACKBOX

// TENTANG KAMI
// ADD
if (isset($_POST["add_aboutus_"])) {
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Slogan         = $_POST['Slogan'];
    $Boxtitle       = $_POST['Boxtitle'];
    $Description    = $_POST['Description'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'Aboutus' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'Aboutus' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/about/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/about/" . $newname);

        // FOR LOG
        $Log                  = $_POST['Title'] . '/' . $_POST['Slogan'];
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content';
        $InputDescription     = $InputName . " Add: " .  $Log . ", Save Data as Log Content";
        $InputAction          = 'Add';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("INSERT INTO tb_aboutus
                            (id,title,subtitle,pictures,slogan,boxtitle,description,status)
                            VALUES
                            ('','" . $Title . "','','" . $newname . "','" . $Slogan . "','" . $Boxtitle . "','" . $Description . "','1')
                            ");
        if ($query) {
            echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=5&n=" . $Page . "&AddSuccess'</script>";
        } else {
            echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=5&n=" . $Page . "&AddFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=5&n=" . $Page . "&Type'</script>";
    }
}
// CHANGE PHOTO
if (isset($_POST["upload_aboutus_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'ReAboutus' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'ReAboutus' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/about/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/about/" . $newname);

        // FOR LOG
        $Log                  = $_POST['Title'] . '/' . $_POST['Slogan'];
        $InputUsername        = $_SESSION['username'];
        $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
        $InputModul           = 'Content';
        $InputDescription     = $InputName . " Change Photo: " .  $Log . ", Save Data as Log Content";
        $InputAction          = 'Change Photo';
        $InputDate            = date('Y-m-d h:m:i');

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("UPDATE tb_aboutus SET pictures='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=content&s=5&n=" . $Page . "&UploadSuccess'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=content&s=5&n=" . $Page . "&UploadFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=5&n=" . $Page . "&Type'</script>";
    }
}
// UPDATE
if (isset($_POST["update_aboutus_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Slogan         = $_POST['Slogan'];
    $Boxtitle       = $_POST['Boxtitle'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Slogan'];

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

    $query .= $db->query("UPDATE tb_aboutus SET title='$Title',
                                                slogan='$Slogan',
                                                boxtitle='$Boxtitle',
                                                description='$Description'
                                                WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=5&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=5&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// DELETE
if (isset($_POST["delete_aboutus_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Slogan         = $_POST['Slogan'];
    $Boxtitle       = $_POST['Boxtitle'];
    $Log            = $_POST['Title'] . '/' . $_POST['Slogan'];

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

    $query .= $db->query("DELETE FROM tb_aboutus WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=5&n=" . $Page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=5&n=" . $Page . "&DeleteFailed'</script>";
    }
}
// ENABLED
if (isset($_POST["enabled_aboutus_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Slogan         = $_POST['Slogan'];
    $Boxtitle       = $_POST['Boxtitle'];
    $Log            = $_POST['Title'] . '/' . $_POST['Slogan'];

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

    $query .= $db->query("UPDATE tb_aboutus SET status='1'
                                            WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Enabled Successfully');location.href = '../../index.php?m=content&s=5&n=" . $Page . "&EnabledSuccess'</script>";
    } else {
        echo "<script>alert('Enabled Unsuccessfully');location.href = '../../index.php?m=content&s=5&n=" . $Page . "&EnabledFailed'</script>";
    }
}
// DISABLED
if (isset($_POST["disabled_aboutus_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Slogan         = $_POST['Slogan'];
    $Boxtitle       = $_POST['Boxtitle'];
    $Log            = $_POST['Title'] . '/' . $_POST['Slogan'];

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

    $query .= $db->query("UPDATE tb_aboutus SET status='2'
                                                WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Disabled Successfully');location.href = '../../index.php?m=content&s=5&n=" . $Page . "&DisabledSuccess'</script>";
    } else {
        echo "<script>alert('Disabled Unsuccessfully');location.href = '../../index.php?m=content&s=5&n=" . $Page . "&DisabledFailed'</script>";
    }
}
// END TENTANG KAMI

// PROMO & UPDATE
// ADD
if (isset($_POST["add_promo_update_"])) {
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Page           = $_POST['Page'];
    $Description    = $_POST['Description'];

    // FOR LOG
    $Log                  = $_POST['Title'] . '/' . $_POST['Subtitle'];
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content';
    $InputDescription     = $InputName . " Add: " .  $Log . ", Save Data as Log Content";
    $InputAction          = 'Add';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("INSERT INTO tb_promonupdate
                            (id,title,subtitle,description,status)
                            VALUES
                            ('','" . $Title . "','" . $Subtitle . "','" . $Description . "','1')
                            ");
    if ($query) {
        echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=6&n=" . $Page . "&AddSuccess'</script>";
    } else {
        echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=6&n=" . $Page . "&AddFailed'</script>";
    }
}
// UPDATE
if (isset($_POST["update_promo_update_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

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

    $query .= $db->query("UPDATE tb_promonupdate SET title='$Title',
                                                    subtitle='$Subtitle',
                                                    description='$Description'
                                                    WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=6&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=6&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// DELETE
if (isset($_POST["delete_promo_update_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
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

    $query .= $db->query("DELETE FROM tb_promonupdate WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=6&n=" . $Page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=6&n=" . $Page . "&DeleteFailed'</script>";
    }
}
// ENABLED
if (isset($_POST["enabled_promo_update_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
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

    $query .= $db->query("UPDATE tb_promonupdate SET status='1'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Enabled Successfully');location.href = '../../index.php?m=content&s=6&n=" . $Page . "&EnabledSuccess'</script>";
    } else {
        echo "<script>alert('Enabled Unsuccessfully');location.href = '../../index.php?m=content&s=6&n=" . $Page . "&EnabledFailed'</script>";
    }
}
// DISABLED
if (isset($_POST["disabled_promo_update_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
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

    $query .= $db->query("UPDATE tb_promonupdate SET status='2'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Disabled Successfully');location.href = '../../index.php?m=content&s=6&n=" . $Page . "&DisabledSuccess'</script>";
    } else {
        echo "<script>alert('Disabled Unsuccessfully');location.href = '../../index.php?m=content&s=6&n=" . $Page . "&DisabledFailed'</script>";
    }
}

// PROMO
// ADD
if (isset($_POST["add_promo_"])) {
    $Title          = $_POST['Title'];
    $Page           = $_POST['Page'];
    $Description    = $_POST['Description'];
    $Datein         = date('Y-m-d h:m:i');
    $Sequence       = $_POST['Sequence'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'Promo' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'Promo' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/menu/promo/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/menu/promo/" . $newname);

        // FOR LOG
        $Log                  = $_POST['Title'] . '/' . $Datein;
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

        $query .= $db->query("INSERT INTO tb_promo
                            (id,title,description,datein,pictures,rorder,status)
                            VALUES
                            ('','" . $Title . "','" . $Description . "','" . $Datein . "','" . $newname . "','" . $Sequence . "','1')
                            ");
        if ($query) {
            echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=6-promo&n=" . $Page . "&AddSuccess'</script>";
        } else {
            echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=6-promo&n=" . $Page . "&AddFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=6-promo&n=" . $Page . "&Type'</script>";
    }
}
// CHANGE PHOTO
if (isset($_POST["upload_promo_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'RePromo' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'RePromo' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/menu/promo/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/menu/promo/" . $newname);

        // FOR LOG
        $Log                  = $_POST['Title'] . '/' . date('Y-m-d h:m:i');;
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

        $query .= $db->query("UPDATE tb_promo SET pictures='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=content&s=6-promo&n=" . $Page . "&UploadSuccess'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=content&s=6-promo&n=" . $Page . "&UploadFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=6-promo&n=" . $Page . "&Type'</script>";
    }
}
// UPDATE
if (isset($_POST["update_promo_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Datein         = date('Y-m-d h:m:i');;
    $Sequence       = $_POST['Sequence'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $Datein;

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

    $query .= $db->query("UPDATE tb_promo SET title='$Title',
                                                    datein='$Datein',
                                                    rorder='$Sequence',
                                                    description='$Description'
                                                    WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=6-promo&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=6-promo&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// DELETE
if (isset($_POST["delete_promo_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Datein         = date('Y-m-d h:m:i');
    $Log            = $_POST['Title'] . '/' . $Datein;

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

    $query .= $db->query("DELETE FROM tb_promo WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=6-promo&n=" . $Page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=6-promo&n=" . $Page . "&DeleteFailed'</script>";
    }
}
// ENABLED
if (isset($_POST["enabled_promo_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Datein         = date('Y-m-d h:m:i');
    $Log            = $_POST['Title'] . '/' . $Datein;

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

    $query .= $db->query("UPDATE tb_promo SET status='1'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Enabled Successfully');location.href = '../../index.php?m=content&s=6-promo&n=" . $Page . "&EnabledSuccess'</script>";
    } else {
        echo "<script>alert('Enabled Unsuccessfully');location.href = '../../index.php?m=content&s=6-promo&n=" . $Page . "&EnabledFailed'</script>";
    }
}
// DISABLED
if (isset($_POST["disabled_promo_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Datein         = date('Y-m-d h:m:i');
    $Log            = $_POST['Title'] . '/' . $Datein;

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

    $query .= $db->query("UPDATE tb_promo SET status='2'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Disabled Successfully');location.href = '../../index.php?m=content&s=6-promo&n=" . $Page . "&DisabledSuccess'</script>";
    } else {
        echo "<script>alert('Disabled Unsuccessfully');location.href = '../../index.php?m=content&s=6-promo&n=" . $Page . "&DisabledFailed'</script>";
    }
}
// UPDATE
// ADD
if (isset($_POST["add_update_"])) {
    $Title          = $_POST['Title'];
    $Page           = $_POST['Page'];
    $Description    = $_POST['Description'];
    $Datein         = date('Y-m-d h:m:i');
    $Sequence       = $_POST['Sequence'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'Update' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'Update' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/menu/update/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/menu/update/" . $newname);

        // FOR LOG
        $Log                  = $_POST['Title'] . '/' . $Datein;
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

        $query .= $db->query("INSERT INTO tb_update
                            (id,title,description,datein,pictures,rorder,status)
                            VALUES
                            ('','" . $Title . "','" . $Description . "','" . $Datein . "','" . $newname . "','" . $Sequence . "','1')
                            ");
        if ($query) {
            echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=6-update&n=" . $Page . "&AddSuccess'</script>";
        } else {
            echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=6-update&n=" . $Page . "&AddFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=6-update&n=" . $Page . "&Type'</script>";
    }
}
// CHANGE PHOTO
if (isset($_POST["upload_update_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'ReUpdate' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'ReUpdate' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/menu/update/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/menu/update/" . $newname);

        // FOR LOG
        $Log                  = $_POST['Title'] . '/' . date('Y-m-d h:m:i');;
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

        $query .= $db->query("UPDATE tb_update SET pictures='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=content&s=6-update&n=" . $Page . "&UploadSuccess'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=content&s=6-update&n=" . $Page . "&UploadFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=6-update&n=" . $Page . "&Type'</script>";
    }
}
// UPDATE
if (isset($_POST["update_update_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Datein         = date('Y-m-d h:m:i');;
    $Sequence       = $_POST['Sequence'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $Datein;

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

    $query .= $db->query("UPDATE tb_update SET title='$Title',
                                                    datein='$Datein',
                                                    rorder='$Sequence',
                                                    description='$Description'
                                                    WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=6-update&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=6-update&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// DELETE
if (isset($_POST["delete_update_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Datein         = date('Y-m-d h:m:i');
    $Log            = $_POST['Title'] . '/' . $Datein;

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

    $query .= $db->query("DELETE FROM tb_update WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=6-update&n=" . $Page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=6-update&n=" . $Page . "&DeleteFailed'</script>";
    }
}
// ENABLED
if (isset($_POST["enabled_update_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Datein         = date('Y-m-d h:m:i');
    $Log            = $_POST['Title'] . '/' . $Datein;

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

    $query .= $db->query("UPDATE tb_update SET status='1'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Enabled Successfully');location.href = '../../index.php?m=content&s=6-update&n=" . $Page . "&EnabledSuccess'</script>";
    } else {
        echo "<script>alert('Enabled Unsuccessfully');location.href = '../../index.php?m=content&s=6-update&n=" . $Page . "&EnabledFailed'</script>";
    }
}
// DISABLED
if (isset($_POST["disabled_update_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Datein         = date('Y-m-d h:m:i');
    $Log            = $_POST['Title'] . '/' . $Datein;

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

    $query .= $db->query("UPDATE tb_update SET status='2'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Disabled Successfully');location.href = '../../index.php?m=content&s=6-update&n=" . $Page . "&DisabledSuccess'</script>";
    } else {
        echo "<script>alert('Disabled Unsuccessfully');location.href = '../../index.php?m=content&s=6-update&n=" . $Page . "&DisabledFailed'</script>";
    }
}
// END PROMO & UPDATE

// GALLERY
// ADD
if (isset($_POST["add_gallery_"])) {
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Page           = $_POST['Page'];
    $Sequence       = $_POST['Sequence'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'Gallery' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'Gallery' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/gallery/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/gallery/" . $newname);

        // FOR LOG
        $Log                  = $_POST['Title'] . '/' . $_POST['Subtitle'];
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

        $query .= $db->query("INSERT INTO tb_gallery
                            (id,title,subtitle,pictures,rorder,status)
                            VALUES
                            ('','" . $Title . "','" . $Subtitle . "','" . $newname . "','" . $Sequence . "','1')
                            ");
        if ($query) {
            echo "<script>alert('Add Successfully');location.href = '../../index.php?m=content&s=7&n=" . $Page . "&AddSuccess'</script>";
        } else {
            echo "<script>alert('Add Unsuccessfully');location.href = '../../index.php?m=content&s=7&n=" . $Page . "&AddFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=7&n=" . $Page . "&Type'</script>";
    }
}
// CHANGE PHOTO
if (isset($_POST["upload_gallery_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $fileUpload     = $_FILES['upload']['name'];

    // Photo
    $filename = 'ReGallery' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;
    $newname =  'ReGallery' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
    $config['upload_path'] = '../../assets/gallery/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

        move_uploaded_file($tmpname, "../../assets/gallery/" . $newname);

        // FOR LOG
        $Log                  = $_POST['Title'] . '/' . $_POST['Subtitle'];
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

        $query .= $db->query("UPDATE tb_gallery SET pictures='$newname' WHERE id='$ID'");
        if ($query) {
            echo "<script>alert('Upload Successfully');location.href = '../../index.php?m=content&s=7&n=" . $Page . "&UploadSuccess'</script>";
        } else {
            echo "<script>alert('Upload Unsuccessfully');location.href = '../../index.php?m=content&s=7&n=" . $Page . "&UploadFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../index.php?m=content&s=7&n=" . $Page . "&Type'</script>";
    }
}
// UPDATE
if (isset($_POST["update_gallery_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Sequence       = $_POST['Sequence'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

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

    $query .= $db->query("UPDATE tb_gallery SET title='$Title',
                                                    subtitle='$Subtitle',
                                                    rorder='$Sequence'
                                                    WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=7&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=7&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// DELETE
if (isset($_POST["delete_gallery_"])) {

    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

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

    $query .= $db->query("DELETE FROM tb_gallery WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Delete Successfully');location.href = '../../index.php?m=content&s=7&n=" . $Page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>alert('Delete Unsuccessfully');location.href = '../../index.php?m=content&s=7&n=" . $Page . "&DeleteFailed'</script>";
    }
}
// ENABLED
if (isset($_POST["enabled_gallery_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

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

    $query .= $db->query("UPDATE tb_gallery SET status='1'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Enabled Successfully');location.href = '../../index.php?m=content&s=7&n=" . $Page . "&EnabledSuccess'</script>";
    } else {
        echo "<script>alert('Enabled Unsuccessfully');location.href = '../../index.php?m=content&s=7&n=" . $Page . "&EnabledFailed'</script>";
    }
}
// DISABLED
if (isset($_POST["disabled_gallery_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Subtitle       = $_POST['Subtitle'];
    $Log            = $_POST['Title'] . '/' . $_POST['Subtitle'];

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

    $query .= $db->query("UPDATE tb_gallery SET status='2'
                                                   WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Disabled Successfully');location.href = '../../index.php?m=content&s=7&n=" . $Page . "&DisabledSuccess'</script>";
    } else {
        echo "<script>alert('Disabled Unsuccessfully');location.href = '../../index.php?m=content&s=7&n=" . $Page . "&DisabledFailed'</script>";
    }
}
// END GALLERY

// CONTACT
// UPDATE
if (isset($_POST["update_contact_"])) {
    $ID             = $_POST['ID'];
    $Page           = $_POST['Page'];
    $Title          = $_POST['Title'];
    $Description    = $_POST['Description'];
    $Telephone      = $_POST['Telephone'];
    $Whatsapp       = $_POST['Whatsapp'];
    $Instagram      = $_POST['Instagram'];
    $Email          = $_POST['Email'];
    $Address        = $_POST['Address'];
    $Log            = $_POST['Title'] . '/' . $_POST['Whatsapp'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Content Contact';
    $InputDescription     = $InputName . " Update Data: " .  $Log . ", Save Data as Log Content Contact";
    $InputAction          = 'Update';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_contact SET title='$Title',
                                                description='$Description',
                                                telephone='$Telephone',
                                                whatsapp='$Whatsapp',
                                                instagram='$Instagram',
                                                email='$Email',
                                                address='$Address'
                                            WHERE id='$ID'");

    if ($query) {
        echo "<script>alert('Update Successfully');location.href = '../../index.php?m=content&s=8&n=" . $Page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>alert('Update Unsuccessfully');location.href = '../../index.php?m=content&s=8&n=" . $Page . "&UpdateFailed'</script>";
    }
}
// END CONTACT