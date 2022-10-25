<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand text-light fw-bold" href="#">MarketPlace</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light active" aria-current="page" href="halaman_admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="produk_list.php">Produk</a>
                    </li>

                </ul>
                <div class="d-flex" role="search">
                    <a href="../login/logout.php" class="btn btn-danger">LogOut</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- <h2 align="center" class="mt-5">Daftar Produk</h2> -->

    <section id="produk">
        <div class="container">
            <div class="row text-center mt-4">
                <div class="col">
                    <h1>Produk</h1>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php
    include "koneksi.php";
    $sql = "SELECT * FROM produk";
    $query = mysqli_query($conn, $sql);
    while ($produk = mysqli_fetch_array($query)) {
        ?>
                    <div class="col-md-6 col-lg-3 col-sm-12">
                        <div class="card my-4" style="width: 18rem;">
                            <img src="../fotoproduk/<?php echo $produk['foto']?>" class="card-img-top" alt="produk">
                            <div class="card-body">
                                <h5 class="card-title"><a href="produk_tampil.php"
                                        class="text-decoration-none text-dark"><?php echo $produk['namaproduk'] ?></a>
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo "Rp. ", $produk['harga'], ",00" ?>
                                </h6>
                                <p class="card-text"><?php echo $produk['color'] ?></p>
                                <h6 class="card-subtitle mb-2 text-muted ">Stok: <?php echo $produk['stok'] ?></h6>
                                <?php
                                echo "<a href='edit-stok.php?id=" . $produk['id_barang'] . "'class='btn btn-primary'>Edit Stok</a> ";
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
        }
        ?>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>