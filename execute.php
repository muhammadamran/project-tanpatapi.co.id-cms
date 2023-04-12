<!-- Script -->
<?php
session_start();
include "config/conf.php";

function login($data)
{
    if ($data['password_hash'] == $data['password']) {
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['telp'] = $data['telp'];
        $_SESSION['address'] = $data['address'];
        $_SESSION['jabatan'] = $data['jabatan'];
        $_SESSION['department'] = $data['department'];
        $_SESSION['created_by'] = $data['created_by'];
        $_SESSION['created_date'] = $data['created_date'];
        $_SESSION['first'] = $data['first'];
        $_SESSION['middle'] = $data['middle'];
        $_SESSION['last'] = $data['last'];
        $_SESSION['nik'] = $data['nik'];
        $_SESSION['job'] = $data['job'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['photo'] = $data['photo'];
        $_SESSION['jk'] = $data['jk'];
        return 2;
    } else return 1;
}

if (isset($_POST["username"])) {
    $username_ = $db->real_escape_string($_POST["username"]);
} else {
    $username_ = "";
}
if (isset($_POST["password"])) {
    $password_ = $db->real_escape_string($_POST["password"]);
} else {
    $password_ = "";
}

$user = $db->query("SELECT * FROM tb_users WHERE username='" . $username_ . "' AND password='" . md5($password_) . "'", 0);
$result = $user->fetch_assoc();
$id = $result['id'];
$username = $result['username'];
$password = $result['password'];
$role = $result['role'];
$email = $result['email'];
$telp = $result['telp'];
$address = $result['address'];
$jabatan = $result['jabatan'];
$department = $result['department'];
$created_by = $result['created_by'];
$created_date = $result['created_date'];
$first = $result['first'];
$middle = $result['middle'];
$last = $result['last'];
$nik = $result['nik'];
$job = $result['job'];
$status = $result['status'];
$photo = $result['photo'];
$jk = $result['jk'];

if ($role == 'admin') {
    $data = [
        'id' => $id,
        'username' => $username,
        'password' => $password,
        'password_hash' => md5($password_),
        'first' => $first,
        'middle' => $middle,
        'last' => $last,
        'role' => $role,
        'email' => $email,
        'telp' => $telp,
        'address' => $address,
        'jabatan' => $jabatan,
        'department' => $department,
        'created_by' => $created_by,
        'created_date' => $created_date,
        'nik' => $nik,
        'job' => $job,
        'status' => $status,
        'photo' => $photo,
        'jk' => $jk,
    ];

    $loginarea = login($data);

    if ($loginarea == 2) {
        echo '<script>alert("Hai, ' . $first . ' ' . $last . '. you have successfully logged in");location.href = "index.php"</script>';
    } else if ($loginarea == 1) {
        echo '<script>alert("Failed Login");window.history.go(-1);</script>';
    }
} else {
    echo '<script>alert("Failed Login, You dont have access");window.history.go(-1);</script>';
}
?>
<!-- End Script -->