<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Marketplace</title>
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

    .form-text {
        color: #ffffff;
    }

    /* form{
        width: 450px;
        background: blanchedalmond;
        /* margin: 80px auto; */
    /* padding: 30px 20px;*/
    /* box-shadow: 0px 0px 100px 4px #d6d6d6; */
    /* } */
    </style>
</head>

<body>
    <div class="mt-4 p-5 bg-dark text-white rounded-3">
        <form action="login-pr.php" method="POST">
            <div class="col-sm-15">
                <div class="mb-3">
                <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan']=="gagal"){
                        echo "<div class='alert alert-danger'>Username atau Password tidak sesuai !</div>";
                    }
                }
                ?>
                    <h2>Login</h2>
                </div>
                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username/Email">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="form-text">Belum punya akun? <a href="registrasi.php">Sign up</a></div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Masuk</button>
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