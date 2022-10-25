<?php
include("koneksi.php");
if( isset($_GET['id']) ){
    // ambil id dari query string
    $no = $_GET['id'];
    // buat query hapus
    $sql = "DELETE FROM produk WHERE id_barang='$no'";
    $query = mysqli_query($conn, $sql);
    // apakah query hapus berhasil?
    if( $query ){
        header('Location: produk_list.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}