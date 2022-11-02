<?php
include "koneksi.php";

$id = $_POST['id'];
$stok = $_POST['stok'];
$jumlah = $_POST['jumlah'];
$size = $_POST['size'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$harga = $_POST['harga'];
$produk = $_POST['namaprod'];
$total = $_POST['total'];

$stoksisa = $stok - $jumlah;
date_default_timezone_set("Asia/Jakarta");
$time = date("Y-m-d h:i:sa");
        
mysqli_query($conn,"UPDATE produk SET stok='$stoksisa' WHERE id_barang='$id'");
mysqli_query($conn, "INSERT INTO penjualan (nama, time, jumlah, total, produk, size, alamat, status) VALUES ('$nama', '$time','$jumlah','$total', '$produk', '$size', '$alamat', 'baru')");

header("location:halaman.php?cat=all");

?>