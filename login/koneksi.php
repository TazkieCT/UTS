<?php
$conn = mysqli_connect("localhost","root","","marketplace");

if (mysqli_connect_errno()){
    echo "Error: Koneksi database" . mysqli_connect_error();
}