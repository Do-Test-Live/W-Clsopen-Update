<?php
include('include/dbController.php');
$db_handle = new DBController();
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
        <li><img class="img-fluid" src="assets/images/navbar/account.png"></li>
        <li><img class="img-fluid" src="assets/images/navbar/menu.png"></li>
    </ul>
</nav>

<section class="main">
    <div class="row mb-3">
        <img src="assets/images/home/1.png" class="img-fluid">
    </div>
    <div class="row mb-5"
         style="background: url('assets/images/home/2.png'); background-repeat: no-repeat; background-position: center;background-size: cover; height: 50vh">
        <div class="col-12 text-center">
            <h1 class="banner-section-heading">iphone 14 pro max</h1>
            <div class="container">
                <h2 class="banner-section-heading-two">Latest News & Rumors</h2>
            </div>
        </div>
    </div>
    <div class="row flex align-item-center justify-content-center">
        <div class="col-10">
            <img class="img-fluid main-image-10sec" src="assets/images/10sec/Title.png">
        </div>
    </div>

    <div class="row">
        <div class="col-4 text-end">
            <p class="progress-bar-text">Mode</p>
        </div>
        <div class="col-4">
            <div class="progress">
                <div class="bar" style="width:35%">
                    <p class="percent"></p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <p class="progress-bar-text">10 Sec Challenge</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4 text-end">
            <p class="progress-bar-text">Millisecond</p>
        </div>
        <div class="col-4">
            <div class="progress">
                <div class="bar" style="width:35%">
                    <p class="percent"></p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <p class="progress-bar-text">10.0000</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4 text-end">
            <p class="progress-bar-text">Challenge</p>
        </div>
        <div class="col-4">
            <div class="progress">
                <div class="bar" style="width:35%">
                    <p class="percent"></p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <p class="progress-bar-text">10.0000</p>
        </div>
    </div>

    <div class="row mt-5 container-fluid">
        <div class="col-12">
            <img src="assets/images/new_website/title-bar.png" class="img-fluid">
        </div>
    </div>



    <div class="container-fluid cls-section" style="padding-bottom: 0 !important;">
        <div class="row">
            <div class="slider">
                <div class="card">
                    <div>
                        <img src="assets/images/new_website/toy01.png" alt="Image 1" class="mt-5">
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img src="assets/images/new_website/toy02.png" alt="Image 2" class="mt-5">
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img src="assets/images/new_website/toy01.png" alt="Image 1" class="mt-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <img src="assets/images/new_website/pic07.png" style="width: 100%">
        </div>
    </div>

    <div class="container-fluid cls-section" style="padding-top: 0 !important; margin-top: -45px;">
        <div class="row">
            <div class="slider">
                <div class="card">
                    <div>
                        <img src="assets/images/new_website/toy03.png" alt="Image 1" class="mt-5">
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img src="assets/images/new_website/toy04.png" alt="Image 2" class="mt-5">
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img src="assets/images/new_website/toy03.png" alt="Image 1" class="mt-5">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row mt-5 mb-5 flex align-item-center justify-content-center">
            <div class="col-5 mx-2 gift-box" style="background-color: #fedd1c;">
                <div class="row">
                    <div class="col-4">
                        <img src="assets/images/home/3.png" class="img-fluid">
                    </div>
                    <div class="col-8 text-end mt-5">
                        <h4 class="gift-box-text">會員簽到禮</h4>
                        <button class="price-button">GO</button>
                    </div>
                </div>
            </div>
            <div class="col-5 mx-2 gift-box" style="background-color: #16a8db;">
                <div class="row">
                    <div class="col-4">
                        <img src="assets/images/home/4.png" class="img-fluid">
                    </div>
                    <div class="col-8 text-end mt-5">
                        <h4 class="gift-box-text">|新會員註冊</h4>
                        <button class="price-button">GO</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blind-box">
        <div class="row blind-box-row-image justify-content-center">
            <div class="col-3 text-center">
                <img class="img-fluid" src="assets/images/package_bundle/recharge.png">
            </div>
            <div class="col-3 text-center">
                <img class="img-fluid" src="assets/images/package_bundle/mall.png">
            </div>
            <div class="col-3 text-center">
                <img class="img-fluid" src="assets/images/package_bundle/diy-bilnd-box-icon.png">
            </div>
            <div class="col-3 text-center">
                <img class="img-fluid" src="assets/images/package_bundle/backpack.png">
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-3 text-center">
                <p class="blind-box-text">Recharge</p>
            </div>
            <div class="col-3 text-center">
                <p class="blind-box-text">Mall</p>
            </div>
            <div class="col-3 text-center">
                <p class="blind-box-text">DIY Blind Box</p>
            </div>
            <div class="col-3 text-center">
                <p class="blind-box-text">Backpack</p>
            </div>
        </div>
    </div>


    <div class="diy-blind-box">
        <div class="row">
            <div class="col-2">
                <img src="assets/images/package_bundle/Character.png" class="img-fluid">
            </div>
            <div class="col-10" style="bottom: 0 !important;">
                <h2 class="diy-blind-box-text">CLS開盒系列</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6 text-center">
                <img class="img-fluid" src="assets/images/package_bundle/diy-blind-box.png">
            </div>
            <div class="col-6 text-center">
                <img class="img-fluid" src="assets/images/package_bundle/diy-blind-box-2.png">
            </div>
        </div>
        <div class="row mb-5 mt-3">
            <div class="col-6 text-center">
                <p class="diy-blind-box-heading">DIY BLIND BOX</p>
                <p class="diy-blind-box-subheading">Monthly recharge over 1000</p>
            </div>
            <div class="col-6 text-center">
                <p class="diy-blind-box-heading">DIY BLIND BOX</p>
                <p class="diy-blind-box-subheading">Monthly recharge over 1000</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <img class="img-fluid" src="assets/images/package_bundle/diy-blind-box-3.png">
            </div>
        </div>
        <div class="row mb-5 mt-3">
            <div class="col-12 text-center">
                <p class="diy-blind-box-heading">DIY BLIND BOX</p>
                <p class="diy-blind-box-subheading">Monthly recharge over 1000</p>
            </div>
        </div>
    </div>


    <div class="container-fluid cls-section"
         style="background: url('assets/images/new_website/slider-bg.jpg'); background-repeat: no-repeat; background-position: center;background-size: cover; height: 100%; margin-top: -10px;">
        <div class="row cls-banner-1">
            <div class="col-12">
                <img src="assets/images/new_website/title.png" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="slider">
                <div class="card">
                    <div class="card-main">
                        <img src="assets/images/new_website/pic05.png" alt="Image 1" class="mt-5">
                    </div>
                    <div class="row mt-5">
                        <button class="btn add-to-cart">香港小店</button>
                    </div>

                </div>
                <div class="card">
                    <div class="card-main">
                        <img src="assets/images/new_website/pic06.png" alt="Image 2" class="mt-5">
                    </div>
                    <div class="row mt-5">
                        <button class="btn add-to-cart">香港小店</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-main">
                        <img src="assets/images/new_website/pic05.png" alt="Image 3" class="mt-5">
                    </div>
                    <div class="row mt-5">
                        <button class="btn add-to-cart">香港小店</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="row" style="margin-top: -8px;">
        <div class="col-12">
            <img src="assets/images/new_website/line1.png" class="img-fluid">
        </div>
    </div>

    <div class="container-fluid cls-section"
         style="background: url('assets/images/new_website/bg1.png'); background-repeat: no-repeat; background-position: center;background-size: cover; height: 100%; margin-top: -10px;">
        <div class="row cls-banner">
            <div class="col-3">
                <h1>CLS</h1>
            </div>
            <div class="col-3 pt-2">
                <div class="row">
                    <h6>開盒系列</h6>
                </div>
                <div class="row">
                    <p>One Day Deal</p>
                </div>
            </div>
            <div class="col-4 text-center">
                <div id="countdown">
                    <ul style="padding-left: 0 !important;">
                        <li><span id="hours"></span>Hours</li>
                        <li><span id="minutes"></span>Mins</li>
                        <li><span id="seconds"></span>Secs</li>
                    </ul>
                </div>
            </div>
            <div class="col-2 my-auto mx-auto">
                <img src="assets/images/new_website/Arrow.png" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="slider">


                <div class="card">
                    <div class="card-main">
                        <img src="assets/images/new_website/meat-floss.png" alt="Image 1" class="mt-5">
                        <h3>MEAT FLOSS CAKE</h3>
                        <p>(TARO PASTE)</p>
                        <div class="row text-start">
                            <p class="price">$60 <span class="line-over-text">$160</span></p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <button class="btn add-to-cart">Add To The Cart</button>
                    </div>
                </div>


            </div>
        </div>

    </div>

    <div class="row" style="margin-top: -8px;">
        <div class="col-12">
            <img src="assets/images/new_website/line2.png" class="img-fluid">
        </div>
    </div>

    <div class="container-fluid cls-section"
         style="background: url('assets/images/new_website/bg2.png'); background-repeat: no-repeat; background-position: center;background-size: cover; height: 100%; margin-top: -10px;">
        <div class="row cls-banner-1">
            <div class="col-12">
                <img src="assets/images/new_website/Cls-store-shop.png" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="slider">

                <div class="card">
                    <div class="card-main">
                        <img src="assets/images/new_website/essence--chicken.png" alt="Image 1" class="mt-5">
                        <h3>ESSENCE OF CHICKEN</h3>
                        <p>(ROOM TEMPERATURE VERSION)</p>
                        <div class="row text-start">
                            <p class="price">$60</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <button class="btn add-to-cart">Add To The Cart</button>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="row" style="margin-top: -8px;">
        <div class="col-12">
            <img src="assets/images/new_website/line3.png" class="img-fluid">
        </div>
    </div>

    <div class="container-fluid cls-section"
         style="background: url('assets/images/new_website/bg3.png'); background-repeat: no-repeat; background-position: center;background-size: cover; height: 100%; margin-top: -10px;">
        <div class="row cls-banner-1">
            <div class="col-12">
                <img src="assets/images/new_website/Cls-beauty-secrets.png" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="slider">
                <div class="card">
                    <div class="card-main">
                        <img src="assets/images/new_website/estee-lauder.png" alt="Image 1" class="mt-5">
                        <h3>ESTEE LAUDER</h3>
                        <p>(PARALLEL IMPORT)</p>
                        <div class="row text-start">
                            <p class="price">$60</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <button class="btn add-to-cart">Add To The Cart</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-main">
                        <img src="assets/images/new_website/fancl.png" alt="Image 2" class="mt-5">
                        <h3>FANCL</h3>
                        <p>(PARALLEL IMPORT)</p>
                        <div class="row text-start">
                            <p class="price">$332</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <button class="btn add-to-cart">Add To The Cart</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-main">
                        <img src="assets/images/new_website/estee-lauder.png" alt="Image 3" class="mt-5">
                        <h3>ESTEE LAUDER</h3>
                        <p>(PARALLEL IMPORT)</p>
                        <div class="row text-start">
                            <p class="price">$60</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <button class="btn add-to-cart">Add To The Cart</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row" style="margin-top: -8px;">
        <div class="col-12">
            <img src="assets/images/new_website/line4.png" class="img-fluid">
        </div>
    </div>

    <div class="container-fluid cls-section"
         style="background: url('assets/images/new_website/bg4.png'); background-repeat: no-repeat; background-position: center;background-size: cover; height: 100%; margin-top: -10px;">
        <div class="row cls-banner-1">
            <div class="col-12">
                <img src="assets/images/new_website/Cls-prestige.png" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="slider">

                <div class="card">
                    <div class="card-main-golden">
                        <img src="assets/images/new_website/Fairy-tale.png" alt="Image 1" class="mt-5">
                        <h3>FAIRY TALE PINK</br>
                            UNICORN EAU DE</br>
                            TOILETTE</h3>
                        <div class="row text-start">
                            <p class="price">$60</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <button class="btn add-to-cart">Add To The Cart</button>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="row p-5 feature text-center">
        <h2 class="feature-text">FEATURED ITEMS</h2>
    </div>
    <div class="row mt-5 mb-5 justify-content-center">
        <div class="col-5 mx-2" style="background-color: #00157a; border: 5px solid #00a69f; border-radius: 20px">
            <div class="row justify-content-center align-items-center text-center p-5">
                <img src="assets/images/home/5.png" style="height: 300px;width: 250px;">
                <h6 class="mt-3 gift-name text-center">Apple Watch S8</h6>
                <p class="mt-2 price-gift text-center">$XXX</p>
            </div>
        </div>
        <div class="col-5 mx-2" style="background-color: #00157a; border: 5px solid #00a69f; border-radius: 20px">
            <div class="row justify-content-center align-items-center p-5">
                <img src="assets/images/home/6.png" style="height: 300px;width: 250px;">
                <h6 class="mt-3 gift-name text-center">AIRPODS 3</h6>
                <p class="mt-2 price-gift text-center">$XXX</p>
            </div>
        </div>
    </div>
    <div class="row mt-5 mb-5 justify-content-center">
        <div class="col-5 mx-2" style="background-color: #00157a; border: 5px solid #00a69f; border-radius: 20px">
            <div class="row justify-content-center align-items-center text-center p-5">
                <img src="assets/images/home/6.png" style="height: 300px;width: 250px;">
                <h6 class="mt-3 gift-name text-center">AIRPODS 3</h6>
                <p class="mt-2 price-gift text-center">$XXX</p>
            </div>
        </div>
        <div class="col-5 mx-2" style="background-color: #00157a; border: 5px solid #00a69f; border-radius: 20px">
            <div class="row justify-content-center align-items-center p-5">
                <img src="assets/images/home/7.png" style="height: 300px;width: 250px;">
                <h6 class="mt-3 gift-name text-center">IPHONE 14 PRO</h6>
                <p class="mt-2 price-gift text-center">$XXX</p>
            </div>
        </div>
    </div>

</section>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/js/custom.js"></script>
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