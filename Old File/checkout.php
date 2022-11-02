<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    #konten {
        margin-top: 10vh;
    }

    #sec-konten {
        height: 500px;
    }

    #produk {
        width: 100%;
        height: 100%;
    }
    </style>
</head>

<body>
    <?php 
    include "koneksi.php";
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jumlah = $_POST['jumlah'];
    $query = mysqli_query($conn, "SELECT * FROM produk WHERE id_barang = '$id'");
    $produk = mysqli_fetch_array($query);
    $total = $jumlah * $produk['harga'];
    ?>

    <div class="container" id="konten">
        <div class="row">
            <div class="col-7 border border-success">
                <h1>Konfirmasi Pembelian</h1><br>
                <label>Nama Produk:</label><br>
                <label><?php echo $produk['namaproduk'];?></label><br>
                <label>Jumlah Produk:</label><br>
                <label><?php echo $jumlah , " x Rp. " , $produk['harga'];?></label><br>
                <label>Nama Pembeli:</label><br>
                <label><?php echo $nama?></label><br>
                <label>Alamat:</label><br>
                <div class="form-floating">
                    <input class="form-control" id="floatingTextarea2" value="<?php echo $alamat?>" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                </div>
                <div class="row">
                    <div class="col-12 border border-danger py-3 px-5 my-5" id="button">
                        <p>Harga total: <?php echo $total?></p>
                        <a href='beli-pr.php?id=<?=$produk['id_barang']?> ' class='btn btn-success'>Konfirmasi</a>
                    </div>
                </div>
            </div>
            <div class="col-5 border border-dark" id="sec-konten">
                <div class="d-flex justify-content-center">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>