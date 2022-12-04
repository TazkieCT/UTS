<?php
session_start();

include 'koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];

mysqli_query($conn, "INSERT INTO akun (username, email, pass, level) VALUES ('$user', '$email','$pass','user')");

header("location:datadiri.php?success");

