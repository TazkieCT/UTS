<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi - Marketplace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body {
        height: 100vh;
        display: flex;
        align-items: center;

        justify-content: center;
    }

    a {
        text-decoration: none;
    }

    textarea {
        resize: none;
    }
    </style>
</head>

<body>
    <div class="mt-4 p-5 bg-dark text-white rounded-3">
        <form action="checkout.php?id=<?=$_GET['id'];?>" method="POST">
            <div class="col">
                <?php 
                include "koneksi.php";

                $id = $_GET['id'];
                $query = mysqli_query($conn, "SELECT * FROM produk WHERE id_barang = '$id'");
                $produk = mysqli_fetch_array($query)
                ?>
                <div class="mb-3">
                    <h2>Beli Barang</h2>
                </div>
                <div class="mb-3">
                    <label for="namaproduk" class="form-label">Nama Barang:</label><br>
                    <?php echo $produk['namaproduk']?>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $produk['id_barang']?>">
                    <input type="hidden" name="namaprod" class="form-control"
                        value="<?php echo $produk['namaproduk']?>">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Per Barang:</label><br>
                    <?php echo "Rp. ", $produk['harga'], ",00" ?>
                    <input type="hidden" name="harga" class="form-control" value="<?php echo $produk['harga']?>">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok Barang:</label><br>
                    <?php echo $produk['stok']?>
                    <input type="hidden" name="stok" class="form-control" value="<?php echo $produk['stok']?>">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Nama:</label><br>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Jumlah:</label>
                    <?php 
                    if ($produk['stok'] < 100){
                        echo '<input type="number" min="1" max="$produk["stok"]" name="jumlah" class="form-control" value="1">';
                    } else {
                        echo '<input type="number" min="1" max="99" name="jumlah" class="form-control" value="1">';
                    }
                    ?>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Alamat:</label>
                    <textarea type="textarea" name="alamat" class="form-control"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Beli</button>
            <a href="halaman_user.php" class="btn btn-dark">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>















<div class="mt-4 p-5 bg-dark text-white rounded-3">
    <form action="regis-pr.php" method="POST">
        <div class="col-sm-15">
            <div class="mb-3">
                <h2>Buat Akun</h2>
            </div>
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <div class="form-text text-white">Sudah punya akun? <a href="login.php">Log in</a></div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>