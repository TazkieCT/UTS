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
    <?php 
    include "nav.php";
    ?>

    <div class="container" id="CAROUSELANDTEXT">
        <div id="desk">
        <?php
        $cat = $_GET['cat'];
        if($cat == "men"){
            echo "<h1 align='center'>Men's Clothing</h1>
            <p> Check out all the freshest styles your wardrobe needs in our men's clothing range. You'll find a roundup of everyday essentials, including tops and T-Shirts, as well as comfy lounge sets and underwear. Formal event coming up? Scroll no further than our men's blazers and suits for the sharpest looks and nail the dress code. When it comes to men's trousers, there's chinos, joggers and cargo styles in all the staple colours. Dreaming of denim? Our men's jeans offer a range of fits to suit your style, <span id='dots'>...</span><span id='more'>including skinny, straight and tapered, to name just a few. Wear yours with a trendy oversized shirt or a classic denim number from our men's shirts edit. And when it comes to chilly weather, our men's jackets and coats have you covered - we've got puffer jackets and trench coats, as well as leather jackets and bomber jackets in year-round colours.</p>
            <a href='' onclick='myFunction()' id='myBtn' class='text-dark'>Read more</a>";
        } else if($cat == "women"){
            echo "<h1 align='center'>Women's Clothing</h1>
            <p> Refresh your daily rotation with our women's clothing range. With the freshest styles available all in one place, you can expect everyday basics, like women's tops and skirts, as well as must-have knitwear and cosy loungewear for downtime days. Plans to go out? Our women's dresses line up mini, midi and maxi styles that were made for summer evenings, while our stylish jeans and trousers offer something to flatter every silhouette. Solve your wardrobe woes on busy days with cool co-ords, and <span id='dots'>...</span><span id='more'> wrap up to stay warm in our women's jackets and coats when extra layers are required. Finish off your favourite new looks with an array of trendy accessories, and don't forget to scroll for statement footwear in our women's shoes range. Discover more women's fashion by scrolling our Conscious collection, which has been crafted with the planet in mind - think sustainably sourced materials, including organic cotton and recycled polyester.</p>
            <a href='' onclick='myFunction()' id='myBtn' class='text-dark'>Read more</a>";
        } else{
            echo "<div id='carouselExampleControls' class='carousel slide' data-bs-ride='carousel'>
            <div class='carousel-inner'>
              <div class='carousel-item active'>
                <img src='../fotoproduk/banner.jpg' class='d-block w-100' alt='...'>
              </div>
              <div class='carousel-item'>
                <img src='../fotoproduk/banner2.jpg' class='d-block w-100' alt='...'>
              </div>
              <div class='carousel-item'>
                <img src='../fotoproduk/banner3.jpg' class='d-block w-100' alt='...'>
              </div>
            </div>
            <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleControls' data-bs-slide='prev'>
              <span class='carousel-control-prev-icon' aria-hidden='true'></span>
              <span class='visually-hidden'>Previous</span>
            </button>
            <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleControls' data-bs-slide='next'>
              <span class='carousel-control-next-icon' aria-hidden='true'></span>
              <span class='visually-hidden'>Next</span>
            </button>
          </div>";
        }
        ?>
        </div>

        <script>
        function myFunction() {
            event.preventDefault()
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
        </script>
    </div>

    <section KONTEN>
        <div class="container mb-5">
            <div class="row">
                <?php
            include "koneksi.php";
            if($cat == "men" || $cat == "women"){
                $sql = "SELECT * FROM produk where gender = '$cat'";
            } else{
                $sql = "SELECT * FROM produk";
            }
            $query = mysqli_query($conn, $sql);
            while ($produk = mysqli_fetch_array($query)) {
            ?>
                <div class="col-md-6 col-lg-3 col-sm-12">
                    <div class="card" style="width: 21rem;">
                        <img src="../fotoproduk/<?php echo $produk['foto']?>" class="card-img-top" alt="produk">
                        <div class="card-body">
                            <h5 class="card-title"><a href="produk_tampil.php"
                                    class="text-decoration-none text-dark"><?php echo $produk['namaproduk'] ?></a></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo "Rp. ", $produk['harga'], ",00" ?></h6>
                            <!-- <p class="card-text"><?php echo $produk['desbarang'] ?></p> -->
                            <h6 class="card-subtitle mb-2 text-muted ">Stok: <?php echo $produk['stok'] ?></h6>
                            <?php
                            // echo "<a href='#?id=" . $produk['id_barang'] . "'class='btn btn-primary'>Wishlist</a> ";
                            echo "<a href='halaman2.php?id=" . $produk['id_barang'] . "'class='btn btn-outline-dark'>Buy</a> ";
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            </div>
        </div>
    </section>

    <?php 
    include "footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>