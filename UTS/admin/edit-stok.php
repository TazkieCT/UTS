<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk - Marketplace</title>
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

    </style>
</head>

<body>
    <div class="mt-4 p-5 bg-dark text-white rounded-3">
        <form action="ed-stok.php" method="POST" enctype="multipart/form-data">
            <div class="col-sm-15">
                <?php 
                include "koneksi.php";

                $id = $_GET['id'];
                $query = mysqli_query($conn, "SELECT * FROM produk WHERE id_barang = '$id'");
                $produk = mysqli_fetch_array($query)
                ?>
                <div class="mb-3">
                    <h2>Edit Barang</h2>
                </div>
                <div class="mb-3">
                    <label for="stokBarang" class="form-label">Stok Baru:</label>
                    <input type="number" name="stok" class="form-control" value="<?php echo $produk['stok']?>">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $produk['id_barang']?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="halaman_admin.php" class="btn btn-dark">Kembali</a>
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