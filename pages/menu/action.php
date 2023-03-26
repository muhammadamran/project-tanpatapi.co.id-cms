<?php
session_start();
include '../../config/conf.php';
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
        echo '<script>alert("Update Successfully");location.href = "../../index.php?m=menu&s=index&UpdateFailed"</script>';
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
        echo '<script>alert("Delete Successfully");location.href = "../../index.php?m=menu&s=index&DeleteFailed"</script>';
    }
}
