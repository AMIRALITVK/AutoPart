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
    <link rel="shortcut icon" href="<?php echo $my_domain ?>assets/images/icons/favicon.png">

    <!-- MAIN CSS STYLE SHEET -->
    <link rel="stylesheet" href="<?php echo $my_domain ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $my_domain ?>assets/libs/css/stylesheet.css">
    <link rel="stylesheet" href="<?php echo $my_domain ?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo $my_domain ?>assets/libs/css/jquery-ui.css">

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
                    <h1>سفارش نهایی</h1>
                </div>
            </div>  
        </div>
        <!-- PAGE HERO END -->
    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <section>
        <!-- CHECKOUT START -->
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-details">
                        <h4>اطلاعات خریدار</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">* نام</label>
                                <input type="email" class="form-control fc-shop" id="exampleFormControlInput1" required>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">* نام خانوادگی</label>
                                <input type="email" class="form-control fc-shop" id="exampleFormControlInput2" required>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="exampleFormControlInput1">نام شرکت (اختیاری)</label>
                                <input class="form-control fc-shop" type="text">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="exampleFormControlInput1">کشور</label>
                                <input class="form-control fc-shop" type="text" required>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="exampleFormControlInput1">استان - شهر</label>
                                <input class="form-control fc-shop" type="text" required>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="exampleFormControlInput1">کدپستی</label>
                                <input class="form-control fc-shop" type="text" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="exampleFormControlInput1">شماره همراه</label>
                                <input class="form-control fc-shop" type="text" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="exampleFormControlInput1">آدرس ایمیل</label>
                                <input class="form-control fc-shop" type="text" required>
                            </div>
                            <div class="col-md-12 mt-4">
                                <h4>توضیحات</h4>
                                <label for="exampleFormControlInput1">توضیحات تکمیلی (اختیاری)</label>
                                <textarea class="form-control fc-shop" id="exampleFormControlTextarea1"
                                    rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 spacing-lg">
                    <aside class="order">
                        <h4>سفارش شما</h4>
                        <hr>
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="order-right">
                                    <p><strong>محصول</strong></p>
                                    <p>شلوار-جین | پیراهن-آستین-بلند</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="order-left text-left">
                                    <p><strong>جمع سفارش</strong></p>
                                    <p>$ 350.00</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="order-right">
                                    <p><strong>ارسال</strong></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="order-left text-left pe-4">
                                    <p>رایگان</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="order-right">
                                    <p><strong>جمع کل</strong></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="order-left text-left">
                                    <p><strong>۳.۵۰۰.۰۰۰ریال</strong></p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <div class="order-right">
                                    <p class="payment-policy">اطلاعات شما فقط برای ارسال سفارش مورد استفاده قرار میگیرد و تماما محفوظ است.<a
                                            href="#">حریم شخصی policy</a></p>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                        <label class="form-check-label" for="exampleCheck2">با تمام قوانین شرح داده شده در سایت موافقت دارم.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-checkout d-flex justify-content-center">
                            <button class="tp-btn-primary" type="submit">نهایی کردن</button>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <!-- CHECKOUT END -->
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
    <script src='<?php echo $my_domain ?>assets/libs/js/jquery-ui.min.js'></script>
    <script src="<?php echo $my_domain ?>assets/libs/js/bootstrap.min.js"></script>
    <script src="<?php echo $my_domain ?>assets/libs/js/plugins.js"></script>
    <script src="<?php echo $my_domain ?>assets/libs/js/megamenu.js"></script>
    <script src="<?php echo $my_domain ?>assets/libs/js/navigation.js"></script>
    <script src="<?php echo $my_domain ?>assets/libs/js/navigation.fixed.min.js"></script>
    <script src="<?php echo $my_domain ?>assets/js/theme.js"></script>
    <!-- JAVASCRIPTS END -->

</body>

</html>