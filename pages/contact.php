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
                    <h1>تماس با ما</h1>
                    <p>بهترین قیمت با تایید اصالت قطعات در اتوپارت</p>
                </div>
            </div>
        </div>
        <!-- PAGE HERO END -->
    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <section>
        <div class="container mt-5 mb-5">
            <div class="contact-card">
                <div class="row g-0">
                    <div class="col-md-7 col-lg-8">
                        <div class="contact-card-left">
                            <h3>برای ما پیام بفرستید:</h3>
                            <form action="https://api.web3forms.com/submit" method="POST" id="form">
                                <input type="hidden" name="access_key" value="96ae1f65-5889-4359-beff-104fd343114a" />
                                <input type="hidden" name="subject" value="New Submission from Web3Forms" />
                                <input type="checkbox" name="botcheck" style="display: none;" />
                
                                <div class="form-layer">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="name" class="fl-custom mb-2">نام</label>
                                            <input type="text" class="form-control fc-custom-alt" id="name" name="name" required placeholder="">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="lastname" class="fl-custom mb-2">نام خانوادگی</label>
                                            <input type="text" class="form-control fc-custom-alt" id="lastname" name="lastname" required placeholder="">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="email" class="fl-custom mb-2">آدرس ایمیل</label>
                                            <input type="email" class="form-control fc-custom-alt" name="email" id="email" required placeholder="">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="phone" class="fl-custom mb-2">شماره همراه</label>
                                            <input type="text" class="form-control fc-custom-alt" name="phone" id="phone" required placeholder="">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="message" class="fl-custom mb-2">پیام شما</label>
                                            <textarea id="message" name="message" class="form-control fc-custom-alt" placeholder="" rows="4"></textarea>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <button type="submit" class="tp-btn-primary">
                                                ارسال پیام
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-base text-center text-gray-400" id="result"></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="contact-card-right">
                            <h3>اطلاعات تماس</h3>
                            <div class="inner-contact-card" data-aos="fade-left">
                                <div class="media-object-card moc-center">
                                    <figure class="moc-thumbnail ps-2">
                                        <img src="<?php echo $my_domain ?>assets/images/icons/inner-pages/location.png" alt="">
                                    </figure>
                                    <div class="moc-caption">
                                        <p>8273 NW 56th ST Miami, FL, 33195 US</p>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-contact-card" data-aos="fade-left">
                                <div class="media-object-card moc-center">
                                    <figure class="moc-thumbnail ps-2">
                                        <img src="<?php echo $my_domain ?>assets/images/icons/inner-pages/phone-call.png" alt="">
                                    </figure>
                                    <div class="moc-caption">
                                        <p><a href="tel:+981111111 ">98-21-11111111+</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-contact-card" data-aos="fade-left">
                                <div class="media-object-card moc-center">
                                    <figure class="moc-thumbnail ps-2">
                                        <img src="<?php echo $my_domain ?>assets/images/icons/inner-pages/email.png" alt="">
                                    </figure>
                                    <div class="moc-caption">
                                        <p><a href="mailto:info@merit.com ">info@autopart.com </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-contact-card mt-5" data-aos="fade-left">
                                <ul class="contact-social">
                                    <li><a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <figure class="photo-contact">
                                <img src="<?php echo $my_domain ?>assets/images/icons/inner-pages/phone-contact.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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