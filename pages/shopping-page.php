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
        <div class="pages-hero small-page-hero">
            <div class="pages-hero-diagonal"></div> 
        </div>
        <!-- PAGE HERO END -->
    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->

    <?php
        include 'shop-page.php';
    ?>
    <!-- CONTENT END -->

    <!-- START FOOTER  -->
    <?php 
        include '../inc/theme_footer.php'
    ?>
    <!-- END FOOTER -->

    <!-- SCROLL TOP -->
    <a href="#0" class="cd-top anchor-botton-red">Top</a>

    <!-- JAVASCRIPTS START -->
    <script src="<?php echo $my_domain ?>assets/libs/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $my_domain ?>assets/libs/js/jquery-ui.min.js"></script>
    <script src="<?php echo $my_domain ?>assets/libs/js/bootstrap.min.js"></script>
    <script src="<?php echo $my_domain ?>assets/libs/js/plugins.js"></script>
    <script src="<?php echo $my_domain ?>assets/libs/js/megamenu.js"></script>
    <script src="<?php echo $my_domain ?>assets/libs/js/navigation.js"></script>
    <script src="<?php echo $my_domain ?>assets/libs/js/navigation.fixed.min.js"></script>
    <script src="<?php echo $my_domain ?>assets/js/theme.js"></script>
    <!-- JAVASCRIPTS END -->

</body>

</html> 