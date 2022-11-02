<?php
include "koneksi.php";

$stok = $_POST['stok'];
$id = $_POST['id'];

$query = mysqli_query($conn,"UPDATE produk SET stok='$stok' WHERE id_barang='$id'");

header("location:halaman_admin.php?success");

?>