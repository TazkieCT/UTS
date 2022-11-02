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
        margin-bottom: 7%;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-image: url(https://cache.desktopnexus.com/cropped-wallpapers/898/898023-1536x864-[DesktopNexus.com].jpg?st=X5Tzj8cDP-MZlrePJxFgqw&e=1666542050);
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
                    <h1>Make Your Account!</h1>
                    <form action="regis-pr.php" method="POST">
                        <div class="col-sm-10">
                            <div class="mb-3">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <div class="form-text text-dark text-start">Sudah punya akun? <a href="halaman.php">Log in</a></div>
                            </div>
                            <button type="submit" class="btn btn-primary col-5">Sign Up</button>
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