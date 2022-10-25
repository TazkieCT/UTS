<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/6017dc73ea.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <section NAV>
        <div class="container-fluid">
            <nav class="navbar navbar-light">
                <ul id="nav1-left">
                    <li><a href="#">Customer Service</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Find our shop</a></li>
                </ul>

                <!-- <a class="navbar-brand" id="logo"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-a-k9t_4hIKeo-FH2_6U3oy1XJt-4jDV3Ew&usqp=CAU"
                     width="200" alt=""></a> -->

                <form class="d-flex">
                    <ul id="nav1-right">
                        <li><a href="../login/logout.php">Log out</a></li>
                        <li><a href="#">Favourite</a></li>
                        <li id="endnav1"><a href="#">Cart</a></li>
                    </ul>
            </nav>
        </div>

        <nav class="nav flex flex-sm-row border border justify-content-center mb-4">
            <a class="text-sm-center text-dark nav-link" href="halaman.php?cat=all">ALL</a>
            <a class="text-sm-center text-dark nav-link" href="halaman.php?cat=men">MEN</a>
            <a class="text-sm-center text-dark nav-link" href="halaman.php?cat=women">WOMEN</a>
        </nav>
    </section>

    <?php
    include "koneksi.php";

    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM produk WHERE id_barang = '$id'");
    $produk = mysqli_fetch_array($query)
    ?>
    <section KONTEN>
        <h1 align="center">Shopping Bag</h1>
        <div class="container my-5">
            <div class="row col-md-12 col-lg-12 col-sm-12">
                <div class="col-2">
                    <img src="../fotoproduk/<?php echo $produk['foto']?>" width="200px" alt="">
                </div>
                <div class="col-5 p-5">
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
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                        <option value="xll">XXL</option>
                    </select>
                </div>

                <script>
                    var jumlah = document.getElementById("jumlah").value
           
                </script>

                <div class="col-5 bg-light p-5 justify-content-between">
                    <div>
                        <div class="row">
                            <div class="col-9 ">
                                <a>Order Value</a><br>
                                <a>Delivery</a><br>
                                <a>Tax</a>
                            </div>
                            <div class="col-3 ">
                                <a>Rp. 900000</a><br>
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
                            <div class="col-9">
                                <a>Total</a>
                            </div>
                            <div class="col-3">
                                <a>Rp. 900000</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary mt-5">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section FOOTER>
        <footer>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna
                <br> aliqua. Volutpat consequat mauris nunc congue. Arcu ac tortor dignissim convallis aenean. <br>
                Morbi enim nunc faucibus a pellentesque sit amet.
            </p>
            <a id="closing">All made by Inner Journey Tazkie Ciputra Tangguh</a>
        </footer>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>