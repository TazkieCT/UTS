<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Transaction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/6017dc73ea.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM produk WHERE id_barang = '$id'");
    $produk = mysqli_fetch_array($query);
    
    $jumlah = $_POST['jumlah'];
    $nama = $_POST['nama'];
    $size = $_POST['size'];
    $alamat = $_POST['alamat'];
    $harga = $produk['harga'];
    $namaprod = $produk['namaproduk'];
    $stok = $produk['stok'];

    $total = $jumlah * $harga;
    ?>
    <section KONTEN>
        <div class="container my-5">
            <a class="col-2 btn btn-outline-dark text-sm-start mt-3" href="halaman2.php?id=<?=$_GET['id'];?>">BACK</a>
            <h1 align="center" class="mb-5">Transaction</h1>
            <div class="row col-md-12 col-lg-12 col-sm-12">
                <div class="col-2">
                    <img src="../fotoproduk/<?php echo $produk['foto']?>" width="200px" alt="">
                </div>
                <div class="col-5 p-5">
                    <form action="beli-pr.php" method="POST">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
                        <input type="hidden" class="form-control" name="nama" value="<?php echo $nama ?>">
                        <input type="hidden" class="form-control" name="alamat" value="<?php echo $alamat ?>">
                        <input type="hidden" class="form-control" name="size" value="<?php echo $size ?>">
                        <input type="hidden" class="form-control" name="jumlah" value="<?php echo $jumlah ?>">
                        <input type="hidden" class="form-control" name="total" value="<?php echo $total ?>">
                        <input type="hidden" class="form-control" name="namaprod" value="<?php echo $namaprod ?>">
                        <input type="hidden" class="form-control" name="stok" value="<?php echo $stok ?>">
                        <a><?php echo $produk['namaproduk']?></a><br>
                        <a><?php echo $produk['color']?></a><br>
                        <a id="harga"><?php echo "Rp. ", $produk['harga'], ",00 / item"?></a><br>
                        <label>Unit:</label>
                        <a><?php echo $jumlah?></a><br>
                        <label>Size:</label>
                        <a><?php echo $size?></a><br><br>
                        <a><?php echo $nama , " - " , $alamat ?></a>
                </div>

                <div class="col-5 bg-light p-5 justify-content-between">
                    <div>
                        <div class="row">
                            <div class="col-7 ">
                                <a>Order Value</a><br>
                                <a>Delivery</a><br>
                                <a>Tax</a>
                            </div>
                            <div class="col-5 text-end">
                                <a><?php echo "Rp. ", $produk['harga'], ",00 x ", $jumlah?></a><br>
                                <a>Free</a><br>
                                <a>Free</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <a>Total</a>
                            </div>
                            <div class="col-5 text-end">
                                <a><?php echo "Rp. ", $total, ",00"?></a>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-primary mt-5">Checkout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>