<?php
session_start();
include '../../config/conf.php';
// ADD
if (isset($_POST["add_"])) {

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

// RESET
if (isset($_POST["reset_"])) {

    $IDUNIQ             = $_POST['IDUNIQ'];
    $NAME               = $_POST['NAME'];
    $NewPassword        = $_POST['NewPassword'];
    $ConfirmPassword    = $_POST['ConfirmPassword'];

    // FOR LOG
    $InputUsername        = $_SESSION['username'];
    $InputName            = $_SESSION['first'] . ' ' . $_SESSION['last'];
    $InputModul           = 'Users';
    $InputDescription     = $InputName . " Reset Password: " .  $NAME . ", Save Data as Log Users";
    $InputAction          = 'Reset Password';
    $InputDate            = date('Y-m-d h:m:i');

    if ($NewPassword == $ConfirmPassword) {

        $Generate = md5($NewPassword);

        $query = $db->query("INSERT INTO tb_log
                        (id,username,date_log,module,activity,crud)
                        VALUES
                        ('','$InputUsername','$InputDate','$InputModul','$InputDescription','$InputAction')");

        $query .= $db->query("UPDATE tb_users SET password='$Generate'
                                              WHERE id='$IDUNIQ'");
        if ($query) {
            echo '<script>alert("Reset Password Successfully");location.href = "../../index.php?m=users&s=index&ResetPasswordSuccess"</script>';
        } else {
            echo '<script>alert("Reset Password Unsuccessfully");location.href = "../../index.php?m=users&s=index&ResetPasswordFailed"</script>';
        }
    } else {
        echo '<script>alert("Password Not Match!");location.href = "../../index.php?m=users&s=index&ResetPasswordNM"</script>';
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
