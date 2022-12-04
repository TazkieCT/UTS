<?php
include "koneksi.php";

$status = $_POST['status'];
$id = $_POST['id'];

mysqli_query($conn,"UPDATE penjualan SET status='$status' WHERE idpenjualan='$id'");

header("location:transaksi.php?success");

?>