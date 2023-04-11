<?php
session_start();
include '../../config/conf.php';

// ICON
if (isset($_POST["update_icon_"])) {
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
