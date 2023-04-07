<?php
session_start();
include '../../config/conf.php';
// ADD
if (isset($_POST["add_"])) {
    $KodeMenu    = $_POST['KodeMenu'];
    $Order    = $_POST['Order'];
    $FilePHP    = $_POST['FilePHP'];
    $File    = $_POST['File'];
    $Order    = $_POST['Order'];
    $Order    = $_POST['Order'];
    $Order    = $_POST['Order'];
    $profile    = $_FILES['upload']['name'];

    if ($profile == NULL) {
        if ($Gender == 'Pria') {
            $fileUpload = 'male.jpg';
        } else if ($Gender == 'Wanita') {
            $fileUpload = 'female.jpg';
        }
    } else {
        $fileUpload    = $_FILES['upload']['name'];
    }

    // Photo
    $filename = date('d_F_Y') . '_' . date('H_i') . '_' . $FirstName . '_' . $fileUpload;

    $tmpname = $_FILES['upload']['tmp_name'];
    $sizename = $_FILES['upload']['size'];
    $exp = explode('.', $filename);
    $ext = end($exp);
    $wdot = substr($filename, 0, -4);
    $uniq_file =  $fileUpload;

    if ($profile == NULL) {
        if ($Gender == 'Pria') {
            $newname = 'male.jpg';
        } else if ($Gender == 'Wanita') {
            $newname = 'female.jpg';
        }
    } else {
        $newname =  date('d_F_Y') . '_' . date('H_i') . '_' . $FirstName . '_' . $fileUpload;
    }

    $config['upload_path'] = '../../assets/apps/user/';
    $config['allowed_types'] = "PNG|JPG|JPEG";
    $config['max_size'] = '2000000';
    $config['file_name'] = $newname;

    $Qcheck = $db->query("SELECT * FROM tb_users WHERE username='$Email'");
    $Rcheck = mysqli_fetch_array($Qcheck);

    if ($Rcheck == NULL) {

        if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {

            move_uploaded_file($tmpname, "../../assets/apps/user/" . $newname);

            // FOR LOG
            $NAME                 = $_POST['FirstName'] . '' . $_POST['MiddleName'] . '' . $_POST['LastName'];
            $InputUsername        = $_SESSION['username'];
            $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
            $InputModul           = 'Users';
            $InputDescription     = $InputName . " Add: " .  $NAME . ", Save Data as Log Users";
            $InputAction          = 'Add';
            $InputDate            = date('Y-m-d h:m:i');

            $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

            $query .= $db->query("INSERT INTO tb_users
                            (id,photo,username,password,first,middle,last,role,email,telp,address,jk,department,jabatan,job,created_by,created_date,status)
                            VALUES
                            ('','" . $newname . "','" . $Email . "','" . $Password . "','" . $FirstName . "','" . $MiddleName . "','" . $LastName . "','" . $Role . "','" . $Email . "','" . $Telepone . "','" . $Address . "','" . $Gender . "','" . $Department . "','" . $Jabatan . "','" . $Job . "','" . $InputUsername . "','" . $InputDate . "','Active')
                            ");
            if ($query) {
                echo '<script>alert("Add Successfully");location.href = "../../index.php?m=users&s=index&AddSuccess"</script>';
            } else {
                echo '<script>alert("Add Unsuccessfully");location.href = "../../index.php?m=users&s=index&AddFailed"</script>';
            }
        } else {
            echo '<script>alert("Check File Type!");location.href = "../../index.php?m=users&s=index&Type"</script>';
        }
    } else {
        echo '<script>alert("Duplicate Data!");location.href = "../../index.php?m=users&s=index&Duplicate"</script>';
    }
}

// UPDATE
if (isset($_POST["update_"])) {

    $IDUNIQ         = $_POST['IDUNIQ'];
    $KodeMenu       = $_POST['KodeMenu'];
    $Order          = $_POST['Order'];
    $Menu           = $_POST['Menu'];
    $Description    = $_POST['Description'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Menu';
    $InputDescription     = $InputName . " Update Data: " .  $Menu . ", Save Data as Log Menu";
    $InputAction          = 'Update';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("UPDATE tb_menu SET kdmenu='$KodeMenu',
                                             sorder='$Order',
                                             menu='$Menu',
                                             description='$Description'
                                             WHERE id='$IDUNIQ'");
    if ($query) {
        echo '<script>alert("Update Successfully");location.href = "../../index.php?m=menu&s=index&UpdateSuccess"</script>';
        // echo "<script>window.location.href='index.php?m=menu&s=index?UpdateSuccess=true';</script>";
    } else {
        echo '<script>alert("Update Unsuccessfully");location.href = "../../index.php?m=menu&s=index&UpdateFailed"</script>';
        // echo "<script>window.location.href='index.php?m=menu&s=index?UpdateFailed=true';</script>";
    }
}

// DELETE
if (isset($_POST["delete_"])) {

    $IDUNIQ     = $_POST['IDUNIQ'];
    $Menu       = $_POST['KodeMenu'] . '/' . $_POST['Order'] . '/' . $_POST['Menu'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Menu';
    $InputDescription     = $InputName . " Delete Data: " .  $Menu . ", Save Data as Log Menu";
    $InputAction          = 'Delete';
    $InputDate            = date('Y-m-d h:m:i');

    $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

    $query .= $db->query("DELETE FROM tb_menu WHERE id='$IDUNIQ'");

    if ($query) {
        echo '<script>alert("Delete Successfully");location.href = "../../index.php?m=menu&s=index&DeleteSuccess"</script>';
    } else {
        echo '<script>alert("Delete Unsuccessfully");location.href = "../../index.php?m=menu&s=index&DeleteFailed"</script>';
    }
}
