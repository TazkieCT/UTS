<?php 
session_start();

include 'koneksi.php';

$nama = $_POST['namaLengkap'];
$hp = $_POST['noHP'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$tglLahir = $_POST['tl'];

mysqli_query($conn, "INSERT INTO datadiri (nama, tgllahir, jk, alamat, noHP) VALUES ('$nama', '$tglLahir','$jk','$alamat','$hp')");


header("location:login.php?success");
?>