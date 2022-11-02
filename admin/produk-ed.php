<?php
include "koneksi.php";

$nama = $_POST['namaBarang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$desk = $_POST['desk'];
$id = $_POST['id'];
$gender = $_POST['gender'];
$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
$path = "../fotoproduk/"."_".time().$foto;
$dir = "_".time().$foto;
        
move_uploaded_file($file_tmp, $path);
$query = mysqli_query($conn,"UPDATE produk SET namaproduk='$nama',stok='$stok',gender='$gender',harga='$harga',color='$desk',foto='$dir' WHERE id_barang='$id'");

header("location:produk_list.php?success");

?>