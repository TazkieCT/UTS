<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/6017dc73ea.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .row {
        background: white;
        border-radius: 30px;
        box-shadow: 5px 5px 22px;
    }

    .login img {
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
    }

    .login h1 {
        font-size: 4rem;
        font-weight: 300;
        font-family: 'Pacifico', cursive;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-image: url(https://i.pinimg.com/originals/43/d6/d8/43d6d8fdedcc0c95f70f2012232d3e4d.jpg);
    }

    h1 {
        margin-top: 15vh;
        margin-right: 18vh;
    }
    </style>
</head>

<body>

    <section class="login py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-5">
                    <img src="https://i.pinimg.com/564x/b2/ab/82/b2ab824741b4dbfe0362ace56e1668ea.jpg" height="600px"
                        alt="">
                </div>
                <div class="col-lg-7 text-center py-5s">
                    <h1>Welcome back!</h1>
                    <form action="login-pr.php" method="POST">
                        <div class="col-sm-15">
                            <div class="mb-5">
                                <?php
                                    if(isset($_GET['pesan'])){
                                        if($_GET['pesan']=="gagal"){
                                            echo "<div class='col-10 alert alert-danger'>Username atau Password tidak sesuai !</div>";
                                        }
                                    }
                                    ?>
                            </div>
                            <div class="col-10 mb-3 mt-5">
                                <input type="text" name="username" class="form-control" placeholder="Username/Email">
                            </div>
                            <div class="col-10 mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <div class="form-text">Belum punya akun? <a href="registrasi.php">Sign up</a></div>
                                <button type="submit" class="col-5 btn btn-primary my-3">Masuk</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>