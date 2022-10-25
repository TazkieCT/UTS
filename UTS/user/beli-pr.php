<?php
include "koneksi.php";
include "checkout.php";

$id = $_POST['id'];
$stok = $_POST['stok'];
$jumlah = $_POST['jumlah'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$harga = $_POST['harga'];
$namaprod = $_POST['namaprod'];

$stoksisa = $stok - $jumlah;
$jumlah2 = $_POST['jumlah'];
date_default_timezone_set("Asia/Jakarta");
$time = date("Y-m-d h:i:sa");
$total = $jumlah * $harga;
        
$query = mysqli_query($conn,"UPDATE produk SET stok='$stoksisa' WHERE id_barang='$id'");
mysqli_query($conn, "INSERT INTO penjualan (nama, time, jumlah, total, produk, alamat) VALUES ('$nama', '$time','$jumlah2','$total', '$namaprod','$alamat')");

header("location:halaman_user.php?id=$id");

?>