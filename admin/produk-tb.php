<?php 
include 'koneksi.php';

$nama = $_POST['namaBarang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$desk = $_POST['desk'];
$gender = $_POST['gender'];
$foto = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$path = "../fotoproduk/"."_".time().$foto;
$dir = "_".time().$foto;


move_uploaded_file($file_tmp, $path);
mysqli_query($conn, "INSERT INTO produk (namaproduk, stok, gender, color, harga, foto) VALUES ('$nama', '$stok', '$gender','$desk','$harga', '$dir')");


header("location:produk_list.php?success");
?>