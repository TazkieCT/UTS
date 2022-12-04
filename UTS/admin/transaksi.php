<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk - Admin</title>
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
                        <a class="nav-link text-muted" aria-current="page" href="halaman_admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="produk_list.php">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="transaksi.php">Transaksi</a>
                    </li>

                </ul>
                <div class="d-flex" role="search">
                    <a href="../login/logout.php" class="btn btn-danger">LogOut</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- 
   -->
    <!-- class="col-sm-12 col-md-12 col-md-offset-0" -->
    <section id="">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h1>Daftar Transaksi</h1>
                </div>
                <div class="col-12 border border p-2"> <?php include "koneksi.php"; ?>
                    <br>
                    <table class="table table-responsive text-center">
                        <thead>
                            <tr class="d-flex">
                                <th class="col-1">No</th>
                                <th class="col-1">Time</th>
                                <th class="col-2">Nama</th>
                                <th class="col-2">Alamat</th>
                                <th class="col-1">Total</th>
                                <th class="col-1">Produk</th>
                                <th class="col-1">Size</th>
                                <th class="col-1">Status</th>
                                <th class="col-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT * FROM penjualan";
                        $query = mysqli_query($conn, $sql);
                        $no = 1;
                        while ($transaksi = mysqli_fetch_array($query)) {
                            echo '<tr class="d-flex">';
                            echo "<td class='col-1'>" . "$no" . "</td>";
                            echo "<td class='col-1'>" . $transaksi['time'] . "</td>";
                            echo "<td class='col-2'>" . $transaksi['nama'] . "</td>";
                            echo "<td class='col-2'>" . $transaksi['alamat'] . "</td>";
                            echo "<td class='col-1'>" . "Rp " , $transaksi['total'] , ",00". "</td>";
                            echo "<td class='col-1'>" . $transaksi['produk'] . "</td>";
                            echo "<td class='col-1'>" . $transaksi['size'] . "</td>";
                            echo "<td class='col-1'>" . $transaksi['status'] . "</td>";
                            echo "<td class='col-2'><a href='transaksi-pr.php?id=" . $transaksi['idpenjualan'] . "'class='btn btn-success'>Edit</a> ";
                            echo "<a href='produk-hapus.php?idtrans=" . $transaksi['idpenjualan'] . "'class='btn btn-danger'>Hapus</a> ";
                            echo "</td>";
                            $no++;
                        }
                        ?>
                        </tbody>
                    </table>
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