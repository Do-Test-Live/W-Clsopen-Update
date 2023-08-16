<?php
session_start();
include('include/dbController.php');
$db_handle = new DBController();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $row_count = $db_handle->numRows("SELECT * FROM userlogin where email='$email' and password='$password'");
    $data = $db_handle->runQuery("SELECT * FROM userlogin where email='$email' and password='$password'");
    if($row_count>0){
        $_SESSION['userid']=$data[0]['id'];
        echo "<script>
                alert('Login Successful.');
                window.location.href='index.php';
                </script>";
    }else{
        echo "<script>
                alert('Incorrect Data.');
                window.location.href='account.php';
                </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel='stylesheet'
              href='https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
        <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    </head>
</head>
<body style="background: url('assets/images/10sec/BG.jpg'); background-repeat: no-repeat; background-position: top;background-size: cover; height: 100%">

<header class="head-back">
    <div class="container-fluid text-center">
        <p class="navHeading-text">消費滿$500, 即送轉盤1次</p>
    </div>
</header>


<nav>
    <ul>
        <li><img class="img-fluid" src="assets/images/10sec/Logo.png"></li>
        <li><img class="img-fluid" src="assets/images/navbar/magnifier.png"></li>
        <li><img class="img-fluid" src="assets/images/navbar/game-controller.png"></li>
        <li>
            <a href="account.php">
                <img class="img-fluid" src="assets/images/navbar/account.png">
            </a>
        </li>
        <li><img class="img-fluid" src="assets/images/navbar/menu.png"></li>
    </ul>
</nav>

<section class="main">
    <div class="row mb-5"
         style="background: url('assets/images/home/2.png'); background-repeat: no-repeat; background-position: center;background-size: cover; height: 50vh">
        <div class="col-12 text-center">
            <h1 class="banner-section-heading">Login</h1>
            <div class="container">
                <div class="card p-3" style="background: white">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                    <div class="mb-3">
                        <a href="signup.php" class="text-decoration-none">Create account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function () {
        $('.slider').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    });
</script>
</body>
</html>
