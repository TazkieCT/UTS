<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Bag</title>
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
    $produk = mysqli_fetch_array($query)
    ?>
    <section KONTEN>
        <div class="container my-5">
            <a class="col-2 btn btn-outline-dark text-sm-start mt-3" href="halaman.php?cat=all">BACK</a>
            <h1 align="center" class="mb-5">Shopping Bag</h1>
            <div class="row col-md-12 col-lg-12 col-sm-12">
                <div class="col-2">
                    <img src="../fotoproduk/<?php echo $produk['foto']?>" width="200px" alt="">
                </div>
                <div class="col-5 p-5">
                    <form action="halaman3.php?id=<?php echo $id;?>" method="POST">

                        <a><?php echo $produk['namaproduk']?></a><br>
                        <a><?php echo $produk['color']?></a><br>
                        <a id="harga"><?php echo "Rp. ", $produk['harga'], ",00 / item"?></a><br>
                        <select class="form-select form-select-sm mb-1" name="jumlah" id="jumlah">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>
                        <label>Size</label>
                        <select class="form-select form-select-sm mb-1" name="size">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XLL">XXL</option>
                        </select>
                </div>

                <div class="col-5 bg-light p-5 justify-content-between">
                    <div>
                        <div class="row">
                            <div class="col">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" class=" btn btn-outline-dark mt-5">Checkout</button>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>