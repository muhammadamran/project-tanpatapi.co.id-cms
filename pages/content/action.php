<?php
session_start();
include '../../config/conf.php';
// SIGNATURE
if (isset($_POST["add_signature_"])) {

    $Title          = $_POST['Title'];
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
        echo '<script>alert("Add Successfully");location.href = "../../index.php?m=content&s=1&AddSuccess"</script>';
    } else {
        echo '<script>alert("Add Unsuccessfully");location.href = "../../index.php?m=content&s=1&AddFailed"</script>';
    }
}

if (isset($_POST["update_signature_"])) {

    $ID             = $_POST['ID'];
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
        echo '<script>alert("Update Successfully");location.href = "../../index.php?m=content&s=1&UpdateSuccess"</script>';
    } else {
        echo '<script>alert("Update Unsuccessfully");location.href = "../../index.php?m=content&s=1&UpdateFailed"</script>';
    }
}

// MENU
// ADD
if (isset($_POST["add_signature_menu_"])) {
    $Title          = $_POST['Title'];
    $Description    = $_POST['Description'];
    $Harga          = $_POST['Harga'];
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
        $Log                  = $_POST['Title'] . '/' . $_POST['Harga'];
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
                            (id,title,description,prices,pictures,status)
                            VALUES
                            ('','" . $Title . "','" . $Description . "','" . $Harga . "','" . $newname . "','1')
                            ");
        if ($query) {
            echo '<script>alert("Add Successfully");location.href = "../../index.php?m=content&s=1-menu&AddSuccess"</script>';
        } else {
            echo '<script>alert("Add Unsuccessfully");location.href = "../../index.php?m=content&s=1-menu&AddFailed"</script>';
        }
    } else {
        echo '<script>alert("Check File Type!");location.href = "../../index.php?m=content&s=1-menu&Type"</script>';
    }
}

if (isset($_POST["update_signature_menu_"])) {

    $ID             = $_POST['ID'];
    $Title          = $_POST['Title'];
    $Harga          = $_POST['Harga'];
    $Description    = $_POST['Description'];
    $Log            = $_POST['Title'] . '/' . $_POST['Harga'];

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
                                                    prices='$Harga',
                                                    description='$Description'
                                                    WHERE id='$ID'");

    if ($query) {
        echo '<script>alert("Update Successfully");location.href = "../../index.php?m=content&s=1-menu&UpdateSuccess"</script>';
    } else {
        echo '<script>alert("Update Unsuccessfully");location.href = "../../index.php?m=content&s=1-menu&UpdateFailed"</script>';
    }
}

if (isset($_POST["upload_signature_menu_"])) {
    $ID          = $_POST['ID'];
    $Title       = $_POST['Title'];
    $Harga       = $_POST['Harga'];
    $fileUpload  = $_FILES['upload']['name'];

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
        $Log                  = $_POST['Title'] . '/' . $_POST['Harga'];
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
                            (id,title,description,prices,pictures,status)
                            VALUES
                            ('','" . $Title . "','" . $Description . "','" . $Harga . "','" . $newname . "','1')
                            ");
        if ($query) {
            echo '<script>alert("Add Successfully");location.href = "../../index.php?m=content&s=1-menu&AddSuccess"</script>';
        } else {
            echo '<script>alert("Add Unsuccessfully");location.href = "../../index.php?m=content&s=1-menu&AddFailed"</script>';
        }
    } else {
        echo '<script>alert("Check File Type!");location.href = "../../index.php?m=content&s=1-menu&Type"</script>';
    }
}
// END SIGNATURE
