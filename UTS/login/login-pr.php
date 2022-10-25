<?php
session_start();

include 'koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$login = mysqli_query($conn,"select * from akun where (username='$user' or email='$user') and pass='$pass'");

$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    if($data['level']=="admin"){
        $_SESSION['username'] = $user;
        $_SESSION['level'] = "admin";

        header("location:../admin/halaman_admin.php");
    } else if($data['level']=="user"){
        $_SESSION['username'] = $user;
        $_SESSION['level'] = "user";

        header("location:../user/halaman.php?cat=all");
    } else {
        header("location:halaman.php?pesan=gagal");
    }
} else{
    header("location:halaman.php?pesan=gagal");
}

// alter table akun add column email varchar(50) not null unique after username; 