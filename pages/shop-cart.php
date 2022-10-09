<?php include '../config.php' ?>

<!DOCTYPE html>
<html lang="fa" dir="rtl" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- TITLE -->
    <title>اتو پارت</title>

    <!-- META TAGS -->
    <meta name="keywords" content="premium multi-Purpose, html template, multipurpose template, bootstrap template, niches, clean, modern, multipurpose, responsive">
    <meta name="description" content="Merit is a modern Multi-Purpose HTML Template any bussines.">

    <!--  FAVICON  -->
    <link rel="shortcut icon" href="images/icons/favicon.png">

    <!-- MAIN CSS STYLE SHEET -->
    <link rel="stylesheet" href="<?php echo $my_domain ?>assets/libs/css/shop.css">
    <link rel="stylesheet" href="<?php echo $my_domain ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $my_domain ?>assets/css/responsive.css">

    <!-- MODERNIZR LIBRARY -->
    <script src="<?php echo $my_domain ?>assets/libs/js/modernizr-custom.js"></script>

</head>

<body>

    <!-- PRELOADER START -->
    <div id="loader-wrapper">
        <div class="loader">
            <span class="loader-26"></span>
        </div> 
    </div>
    <!-- PRELOADER END -->

    <!-- HEADER START -->
    <header>
        <!-- TOP HEADER START -->
        <?php 
            include 'top-header.php'
        ?>
        <!-- TOP HEADER END -->


        <!-- PAGE HERO START -->
        <div class="pages-hero">
            <div class="pages-hero-diagonal"></div>
            <div class="container">
                <div class="pages-title-center">
                    <h1>سبد خرید</h1>
                    <p>خرید قطعات خودرو های داخلی و خارجی</p>
                </div>
            </div>  
        </div>
        <!-- PAGE HERO END -->
    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <section>
        <!-- MY CART START -->
        <div class="container mt-5" data-aos="fade-up">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th scope="col" style="width: 5%;"></th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="services-left-layer aos-init aos-animate" data-aos="fade-right"></tr>
                        <td data-label=""><button class="btn btn-close" type="submit"><i class="far fa-times-circle"></i></button></td>
                        <td data-label="Product">
                            <div class="media-object-card moc-center">
                                <figure class="moc-thumbnail">
                                    <img src="<?php echo $my_domain ?>assets/images/commons/shop/shop-thumb1.jpg" alt="">
                                </figure>
                                <div class="moc-caption">
                                    <p><a href="#">Sleeve Embroidered Smocked</a></p>
                                </div>
                            </div>
                        </td>
                        <td data-label="Price">$ 195.00</td>
                        <td data-label="Quantity">
                            <div class="order-qty">
                                <input type="number" id="count1" min="1" max="1000" value="1" class="number">
                            </div>
                        </td>
                        <td data-label="Subtotal"><strong>$ 195.00</strong></td>
                    </tr>
                    <tr>
                        <td data-label=""><button class="btn btn-close" type="submit"><i class="far fa-times-circle"></i></button></td>
                        <td data-label="Product">
                            <div class="media-object-card moc-center">
                                <figure class="moc-thumbnail">
                                    <img src="<?php echo $my_domain ?>assets/images/commons/shop/shop-thumb2.jpg" alt="">
                                </figure>
                                <div class="moc-caption">
                                    <p><a href="#">Crochet Flutter-Sleeve</a></p>
                                </div>
                            </div>
                        </td>
                        <td data-label="Price">$ 210.00</td>
                        <td data-label="Quantity">
                            <div class="order-qty">
                                <input type="number" id="count2" min="1" max="1000" value="1" class="number">
                            </div>
                        </td>
                        <td data-label="Subtotal"><strong>$ 210.00</strong></td>
                    </tr>
                    <tr>
                        <td data-label=""><button class="btn btn-close" type="submit"><i class="far fa-times-circle"></i></button></td>
                        <td data-label="Product">
                            <div class="media-object-card moc-center">
                                <figure class="moc-thumbnail">
                                    <img src="<?php echo $my_domain ?>assets/images/commons/shop/shop-thumb3.jpg" alt="">
                                </figure>
                                <div class="moc-caption">
                                    <p><a href="#">Puff-Sleeve Tiered Patterned</a></p>
                                </div>
                            </div>
                        </td>
                        <td data-label="Price">$ 280.00</td>
                        <td data-label="Quantity">
                            <div class="order-qty">
                                <input type="number" id="count3" min="1" max="1000" value="1" class="number">
                            </div>
                        </td>
                        <td data-label="Subtotal"><strong>$ 280.00</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container mt-4">
            <div class="coupon-layer">
                <form class="form-inline">
                    <div class="form-group mb-2 space-r">
                        <input type="password" class="form-control coupon-form" id="inputPassword2"
                            placeholder="کد تخفیف">
                    </div>
                </form>
                <div class="update-cart-layer">
                    <button class="tp-btn-primary" type="submit">تایید</button>
                </div>
            </div>
        </div>

        <div class="container mt-4  mb-5 clearfix">
            <div class="cart-total-layer">
                <h4>فاکتور نهایی</h4>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-box-layer">
                            <p>جمع خرید</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-box-layer">
                            <p>۳.۵۰۰.۰۰۰ ریال</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-box-layer">
                            <p>ارسال</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-box-layer">
                            <p>رایگان</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-box-layer">
                            <p>تخفیف</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-box-layer">
                            <p>۷۰.۰۰۰ ریال</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-box-layer">
                            <p><strong>جمع</strong></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-box-layer"  data-aos="fade-right">
                            <p><strong>۳.۴۳۰.۰۰۰ ریال</strong></p>
                        </div>
                    </div>
                </div>
                <div class="checkout-btn">
                    <button class="tp-btn-primary" type="submit"><a class="text-light" href="pages/checkout.php">نهایی کردن سفارش</a></button>
                </div>
            </div>
        </div>
        <!-- MY CART END -->
    </section>
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    <?php 
        include '../inc/theme_footer.php'
    ?>
    <!-- FOOTER END -->

    <!-- SCROLL TOP -->
    <a href="#0" class="cd-top anchor-botton-red">Top</a>

    <!-- JAVASCRIPTS START -->
    <script src="<?php echo $my_domain ?>assets/libs/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $my_domain ?>assets/libs/js/bootstrap.min.js"></script>
    <script src="<?php echo $my_domain ?>assets/libs/js/plugins.js"></script>
    <script src="<?php echo $my_domain ?>assets/libs/js/megamenu.js"></script>
    <script src="<?php echo $my_domain ?>assets/libs/js/navigation.js"></script>
    <script src="<?php echo $my_domain ?>assets/libs/js/navigation.fixed.min.js"></script>
    <script src="<?php echo $my_domain ?>assets/js/theme.js"></script>
    <!-- JAVASCRIPTS END -->

</body>

</html>