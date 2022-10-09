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
                    <h1>درباره ما</h1>
                    <p>با اتوپارت قطعات یدکی خودرو خود را به سادگی یک کلیک بیابید.</p>
                </div>
            </div>
        </div>
        <!-- PAGE HERO END -->
    </header>
    <!-- HEADER END -->

     <!-- CONTENT START -->
     <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="product-wrapper">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <div class="item-carousel">
                                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="<?php echo $my_domain ?>assets/images/commons/shop/shop9.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="<?php echo $my_domain ?>assets/images/commons/shop/shop10.jpg"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="<?php echo $my_domain ?>assets/images/commons/shop/shop16.jpg"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        <div class="item-thumbs pt-4">
                                            <div class="row carousel-indicators">
                                                <div class="col-4 item">
                                                    <img src="<?php echo $my_domain ?>assets/images/commons/shop/shop-thumb2.jpg" class="img-fluid"
                                                        data-target="#carouselExampleIndicators" alt="" data-slide-to="0" />
                                                </div>
                                                <div class="col-4 item">
                                                    <img src="<?php echo $my_domain ?>assets/images/commons/shop/shop-thumb4.jpg" class="img-fluid"
                                                        data-target="#carouselExampleIndicators"  alt="" data-slide-to="1" />
                                                </div>
                                                <div class="col-4 item">
                                                    <img src="<?php echo $my_domain ?>assets/images/commons/shop/shop-thumb1.jpg" class="img-fluid"
                                                        data-target="#carouselExampleIndicators" alt="" data-slide-to="2" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-6 pe-4">
                                <div class="product-description mb-5">
                                    <h1 class="product-title">Higher High-Waisted Flare Jeans for Women</h1>
                                    <div class="price-rating-layer">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h2 class="product-price">$44.95</h2>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="rating-stars rating-stars-alt">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
        
                                    <hr class="pd-divider">
        
                                    <p class="product-short-description">Another important factor when creating dummy text is
                                        the number of words. Word count or even letter count matters.</p>
        
                                    <div class="size-check-box-layer">
                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                                            <label class="btn btn-outline-primary" for="btnradio1">XS</label>
        
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                            <label class="btn btn-outline-primary" for="btnradio2">S</label>
        
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                                            <label class="btn btn-outline-primary" for="btnradio3">M</label>
        
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio4">
                                            <label class="btn btn-outline-primary" for="btnradio4">L</label>
        
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio5">
                                            <label class="btn btn-outline-primary" for="btnradio5">XL</label>
        
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio6">
                                            <label class="btn btn-outline-primary" for="btnradio6">XXL</label>
                                        </div>
                                    </div>
        
                                    <div class="inner-aside product-accordion-details">
                                        <ul class="accordion">
                                            <li>
                                                <a>Size & Fit</a>
                                                <p><strong>Fit Information:</strong> <br> Model: 6'0" wearing size M</p>
                                            </li>
                                            <li>
                                                <a>جزئیات و مواد اولیه</a>
                                                <p>For creating dummy texts with desired length and properties, this tool is the
                                                    best and fastest tool on web. Another important factor when creating dummy
                                                    text is the number of words.</p>
                                            </li>
                                            <li>
                                                <a>Shipping & Returns</a>
                                                <p>If you have a design project or if you are developing a website or a mobile
                                                    app, you may need placeholder texts to fill the text areas to feel the
                                                    design better even. </p>
                                            </li>
                                        </ul>
                                    </div>
        
                                    <div class="item-order-layer">
                                        <div class="order-qty">
                                            <input type="number" id="count" min="1" max="1000" value="1" class="number">
                                            <button class="tp-btn-primary" type="submit">Add to Bag</button>
                                        </div>
                                    </div>
        
                                    <div class="save-for-later">
                                        <button class="tp-btn-primary" type="submit"><i class="far fa-heart"></i> &nbsp; Save for later</button>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- PRODUCT DETAILS TABS START -->
                        <div class="more-information default-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">توضیحات</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="specifications-tab" data-bs-toggle="tab" href="#specifications" role="tab" aria-controls="specifications" aria-selected="false">مشخصات</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">نظرات</a>
                                </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active custom-tab-pane" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <h4>توضیحات</h4>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have
                                            suffered alteration
                                            in some form, by injected humour, or randomised words which don't look even
                                            slightly
                                            believable.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable
                                            content of a
                                            page when looking at its layout.
                                            The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                            of letters,
                                            as opposed to using 'Content here, content here'</p>
                                </div>
                                <div class="tab-pane fade custom-tab-pane" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                                    <h4>مشخصات فنی</h4>
                                        <table>
                                            <tr>
                                                <td class="table-rtl">شرکت سازنده</td>
                                                <td class="table-rtl">Kronos</td>
                                            </tr>
                                            <tr>
                                                <td class="table-rtl">Operating System </td>
                                                <td class="table-rtl">Drill</td>
                                            </tr>
                                            <tr>
                                                <td class="table-rtl">وزن</td>
                                                <td class="table-rtl">5.2 pounds</td>
                                            </tr>
                                            <tr>
                                                <td class="table-rtl">ابعاد</td>
                                                <td class="table-rtl">13 x 3 x 2.4 inches</td>
                                            </tr>
                                            <tr>
                                                <td class="table-rtl">رنگ</td>
                                                <td class="table-rtl">Space Gray Aluminum Case, Gray Sport Band</td>
                                            </tr>
                                        </table>
                                </div>
                                <div class="tab-pane fade custom-tab-pane" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="row">
                                        <ul class="list-unstyled item-opinion-layer">
                                            <li>
                                                    <div class="media-object-card">
                                                        <figure class="moc-thumbnail">
                                                            <img src="<?php echo $my_domain ?>assets/images/commons/avatar-1.jpg" class="customer-avatar" alt="...">
                                                        </figure>
                                                        <div class="moc-caption">
                                                            <h4>Sara Smith</h4>
                                                            <p class="posted-date">20:44, July 13, 2022</p>
                                                            <ul class="rating-stars">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                            </ul>
                                                            <p>Another important factor when creating dummy text is the number of words. Word count or even letter count matters if the area is not big enough to display all the words.</p>
                                                        </div>
                                                    </div>
                                            </li>
                                            <li>
                                                    <div class="media-object-card">
                                                        <figure class="moc-thumbnail">
                                                            <img src="<?php echo $my_domain ?>assets/images/commons/avatar-2.jpg" class="customer-avatar" alt="...">
                                                        </figure>
                                                        <div class="moc-caption">
                                                            <h4>Robert Jones</h4>
                                                            <p class="posted-date">19:02, July 12, 2022</p>
                                                            <ul class="rating-stars">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                            </ul>
                                                            <p>If you are creating a website or a mobile app, you need to make sure that the text area is big enough to display all the words ed ut perspiciatis unde omnis iste natus error. </p>
                                                        </div>
                                                    </div>
                                            </li>
                                            <li>
                                                    <div class="media-object-card">
                                                        <figure class="moc-thumbnail">
                                                            <img src="<?php echo $my_domain ?>assets/images/commons/avatar-3.jpg" class="customer-avatar" alt="...">
                                                        </figure>
                                                        <div class="moc-caption">
                                                            <h4>Laura Thomas</h4>
                                                            <p class="posted-date">15:44, July 10, 2022</p>
                                                            <ul class="rating-stars">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                            </ul>
                                                            <p>Design project or if you are developing a website or a mobile app, you may need placeholder texts to fill the text areas to feel the design better even if your content is not ready yet.</p>
                                                        </div>
                                                    </div>
                                            </li>
                                        </ul>
                                    </div>  
                                </div>
                              </div>
                        </div>
                        <!-- PRODUCT DETAILS TABS END -->
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <aside class="shop-aside-right">
                        <div class="inner-aside d-none d-lg-block">
                            <h5>Tops</h5>
                            <ul class="list-group categorie-list">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#">T-Shirts</a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#">Graphic Tees</a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#">Shirts & Flannels</a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#">Hoodies & Sweatshirts</a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#">Polos</a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#">Jackets</a>
                                </li>
                            </ul>
                        </div>
                        <div class="inner-aside">
                            <ul class="accordion">
                                <li>
                                    <a>سفارش</a>
                                    <div class="inner-accordion">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Featured
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Price: Low To High
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault3" checked>
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                Price: High To Low
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault4" checked>
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                Newest
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a>Category</a>
                                    <div class="inner-accordion">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault5">
                                            <label class="form-check-label" for="flexRadioDefault5">
                                                Activewear
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault6" checked>
                                            <label class="form-check-label" for="flexRadioDefault6">
                                                Polos
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault7" checked>
                                            <label class="form-check-label" for="flexRadioDefault7">
                                                Shirts
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault8" checked>
                                            <label class="form-check-label" for="flexRadioDefault8">
                                                Graphic Tees
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault9" checked>
                                            <label class="form-check-label" for="flexRadioDefault9">
                                                Sleepwear
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault10" checked>
                                            <label class="form-check-label" for="flexRadioDefault10">
                                                Shorts
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault11" checked>
                                            <label class="form-check-label" for="flexRadioDefault11">
                                                Joggins
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a>Color</a>
                                    <div class="inner-accordion">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault12">
                                            <label class="form-check-label" for="flexRadioDefault12">
                                                White
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault13" checked>
                                            <label class="form-check-label" for="flexRadioDefault13">
                                                Black
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault15">
                                            <label class="form-check-label" for="flexRadioDefault15">
                                                Blue
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault16" checked>
                                            <label class="form-check-label" for="flexRadioDefault16">
                                                Red
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault17">
                                            <label class="form-check-label" for="flexRadioDefault17">
                                                Pink
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault18" checked>
                                            <label class="form-check-label" for="flexRadioDefault18">
                                                Brown
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault19" checked>
                                            <label class="form-check-label" for="flexRadioDefault19">
                                                Yellow
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a>Size</a>
                                    <div class="inner-accordion">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault20">
                                            <label class="form-check-label" for="flexRadioDefault20">
                                                XXS
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault21" checked>
                                            <label class="form-check-label" for="flexRadioDefault21">
                                                XS
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault22" checked>
                                            <label class="form-check-label" for="flexRadioDefault22">
                                                S
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault23" checked>
                                            <label class="form-check-label" for="flexRadioDefault23">
                                                M
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault24" checked>
                                            <label class="form-check-label" for="flexRadioDefault24">
                                                L
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault25" checked>
                                            <label class="form-check-label" for="flexRadioDefault25">
                                                XL
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault26" checked>
                                            <label class="form-check-label" for="flexRadioDefault26">
                                                XXL
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault27" checked>
                                            <label class="form-check-label" for="flexRadioDefault27">
                                                ONE SIZE
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="last-item">
                                    <a>مواد اولیه</a>
                                    <div class="inner-accordion">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault28">
                                            <label class="form-check-label" for="flexRadioDefault28">
                                                Denim
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault29" checked>
                                            <label class="form-check-label" for="flexRadioDefault29">
                                                Fleece
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault30" checked>
                                            <label class="form-check-label" for="flexRadioDefault30">
                                                Sarga
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault31" checked>
                                            <label class="form-check-label" for="flexRadioDefault31">
                                                Synthetic
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault32" checked>
                                            <label class="form-check-label" for="flexRadioDefault32">
                                                Woven
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>

         <!-- RELATE PRODUCTS START -->
         <div class="container mt-4 mb-5">
            <div class="center-title">
                 <h3>مورد علاقه بقیه مشتریان</h3>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="shop-card">
                        <a href="product.php">
                            <figure class="shop-card-img">
                                <img class="sc-default" src="<?php echo $my_domain ?>assets/images/commons/shop/shop1.jpg" alt="">
                                <img class="sc-hover" src="<?php echo $my_domain ?>assets/images/commons/shop/shop2.jpg" alt="">
                            </figure>
                        </a>
                        <div class="shop-card-caption">
                            <p class="item-type">Men</p>
                            <h3><a href="product.php">Linen-Blend Everyday Short-Sleeve Shirt for Men</a></h3>
                            <h4 class="item-price">$24.95</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 spacing-sm-mt-3">
                    <div class="shop-card">
                        <a href="product.php">
                            <figure class="shop-card-img">
                                <img class="sc-default" src="<?php echo $my_domain ?>assets/images/commons/shop/shop3.jpg" alt="">
                                <img class="sc-hover" src="<?php echo $my_domain ?>assets/images/commons/shop/shop4.jpg" alt="">
                                <div class="sc-top-box sale-state">
                                    <h5>SALE</h5>
                                </div>
                            </figure>
                        </a>
                        <div class="shop-card-caption">
                            <p class="item-type">Woman</p>
                            <h3><a href="product.php">Puff-Sleeve Tiered Patterned Swing Dress for Woman</a></h3>
                            <h4 class="item-price">$22.95</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 spacing-md-mt-3">
                    <div class="shop-card">
                        <a href="product.php">
                            <figure class="shop-card-img">
                                <img class="sc-default" src="<?php echo $my_domain ?>assets/images/commons/shop/shop5.jpg" alt="">
                                <img class="sc-hover" src="<?php echo $my_domain ?>assets/images/commons/shop/shop6.jpg" alt="">
                                <div class="sc-top-box new-state">
                                    <h5>NEW</h5>
                                </div>
                            </figure>
                        </a>
                        <div class="shop-card-caption">
                            <p class="item-type">Woman</p>
                            <h3><a href="product.php">Crochet Flutter-Sleeve Slub-Weave Dress for Woman</a></h3>
                            <h4 class="item-price">$28.95</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 spacing-lg-mt-3">
                    <div class="shop-card">
                        <a href="product.php">
                            <figure class="shop-card-img">
                                <img class="sc-default" src="<?php echo $my_domain ?>assets/images/commons/shop/shop9.jpg" alt="">
                                <img class="sc-hover" src="<?php echo $my_domain ?>assets/images/commons/shop/shop10.jpg" alt="">
                                <div class="sc-top-box sale-state">
                                    <h5>SALE</h5>
                                </div>
                            </figure>
                        </a>
                        <div class="shop-card-caption">
                            <p class="item-type">Woman</p>
                            <h3><a href="product.php">Sleeve Embroidered Smocked Mini Swing Dress for Women</a></h3>
                            <div class="offer-price-layer">
                                <h4 class="item-price"><del>$25.95</del></h4>
                                <h4 class="item-sale">$16.95</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                    <div class="shop-card">
                        <a href="product.php">
                            <figure class="shop-card-img">
                                <img class="sc-default" src="<?php echo $my_domain ?>assets/images/commons/shop/shop7.jpg" alt="">
                                <img class="sc-hover" src="<?php echo $my_domain ?>assets/images/commons/shop/shop8.jpg" alt="">
                            </figure>
                        </a>
                        <div class="shop-card-caption">
                            <p class="item-type">Woman</p>
                            <h3><a href="product.php">Tie-Shoulder Floral-Print Split-Front Midi Swing Dress for Women</a></h3>
                            <h4 class="item-price">$18.95</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                    <div class="shop-card">
                        <a href="product.php">
                            <figure class="shop-card-img">
                                <img class="sc-default" src="<?php echo $my_domain ?>assets/images/commons/shop/shop11.jpg" alt="">
                                <img class="sc-hover" src="<?php echo $my_domain ?>assets/images/commons/shop/shop12.jpg" alt="">
                                <div class="sc-top-box new-state">
                                    <h5>NEW</h5>
                                </div>
                            </figure>
                        </a>
                        <div class="shop-card-caption">
                            <p class="item-type">Men</p>
                            <h3><a href="product.php">Athletic Taper Built-In Flex Dark-Wash Jeans for Men</a></h3>
                            <h4 class="item-price">$28.95</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                    <div class="shop-card">
                        <a href="product.php">
                            <figure class="shop-card-img">
                                <img class="sc-default" src="<?php echo $my_domain ?>assets/images/commons/shop/shop13.jpg" alt="">
                                <img class="sc-hover" src="<?php echo $my_domain ?>assets/images/commons/shop/shop14.jpg" alt="">
                            </figure>
                        </a>
                        <div class="shop-card-caption">
                            <p class="item-type">Men</p>
                            <h3><a href="product.php">Athletic Taper Non-Stretch Twill Five-Pocket Pants for Men</a></h3>
                            <h4 class="item-price">$29.95</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                    <div class="shop-card">
                        <a href="product.php">
                            <figure class="shop-card-img">
                                <img class="sc-default" src="<?php echo $my_domain ?>assets/images/commons/shop/shop15.jpg" alt="">
                                <img class="sc-hover" src="<?php echo $my_domain ?>assets/images/commons/shop/shop16.jpg" alt="">
                                <div class="sc-top-box sale-state">
                                    <h5>SALE</h5>
                                </div>
                            </figure>
                        </a>
                        <div class="shop-card-caption">
                            <p class="item-type">Woman</p>
                            <h3><a href="product.php">Shirred Double-Weave Long-Sleeve Blouse for Women</a></h3>
                            <div class="offer-price-layer">
                                <h4 class="item-price"><del>$22.95</del></h4>
                                <h4 class="item-sale">$14.95</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- RELATE PRODUCTS END -->
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