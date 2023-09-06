<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Artezannal</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/logo-sin-fondo-textoazul.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<style>
    .main-menu .navigation > li > a span {
        background: #DE6529;
    }
    .main-menu .navigation > li > a span::before {
      background: #DE6529;
    }
    .main-menu .navigation > li.current > a, .main-menu .navigation > li:hover > a {
      color: #DE6529;
    }
    .main-menu .navigation > li > .megamenu li > a:hover {
        color: #DE6529;
    }
    .main-menu .navigation > li > ul > li > a:hover {
      color: #DE6529;
    }
    .banner-carousel .content-box h1 span {
        color: #DE6529;
    }
    .scroll-top {
        background: #DE6529;
    }
    .sticky-header .main-menu .navigation > li.current > a, .sticky-header .main-menu .navigation > li:hover > a {
      background: #DE6529;
    }
    .category-block-one .image-box::before {
        background: #2D3364;
    }
    .shop-block-one .inner-box .image-box .category.green-bg {
        background: #459A9B;
    }
    .shop-block-one .inner-box .image-box .category.green-bg::before {
        background: #459A9B;
    }
    .shop-block-one .inner-box .image-box .category.green-bg::after {
      background: #459A9B;
    }
    .shop-block-one .inner-box .image-box .category.red-bg {
      background: #DE6529;
    }
    .shop-block-one .inner-box .image-box .category.red-bg::before {
      background: #DE6529;
    }
    .shop-block-one .inner-box .image-box .category.red-bg::after {
      background: #DE6529;
    }
    .mobile-menu .menu-backdrop {
        background: #DE6529;
    }
</style>

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader"><div class="preloader-close">Cargando</div></div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>        
            <div class="layer layer-three"><span class="overlay"></span></div>        
        </div>


        <!-- search-popup -->
        <div id="search-popup" class="search-popup">
            <div class="close-search"><i class="flaticon-close"></i></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="index.php">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                                <input type="submit" value="Search Now!" class="theme-btn style-four">
                            </fieldset>
                        </div>
                    </form>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="index.html">Finance</a></li>
                        <li><a href="index.html">Idea</a></li>
                        <li><a href="index.html">Service</a></li>
                        <li><a href="index.html">Growth</a></li>
                        <li><a href="index.html">Plan</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- search-popup end -->


        <!-- main header -->
        <header class="main-header">
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-inner clearfix">
                        <div class="top-left pull-left">
                            <ul class="info clearfix">
                                <li><i class="flaticon-email"></i><a href="mailto:soporte@artezannal.com">soporte@artezannal.com</a></li>
                                <li><i class="flaticon-global"></i> CDMX México</li>
                            </ul>
                        </div>
                        <div class="top-right pull-right">
                            <ul class="social-links clearfix">
                                <li><a href="index.php"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.php"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.php"><i class="fab fa-vimeo-v"></i></a></li>
                                <li><a href="index.php"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="language">
                                <div class="lang-btn">
                                    <span class="flag"><img src="assets/images/icons/spain.png" alt="" title="Español"></span>
                                    <span class="txt">Español</span>
                                    <span class="arrow fa fa-angle-down"></span>
                                </div>
                                <div class="lang-dropdown">
                                    <ul>
                                        <li><a href="index.php">Ingles</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-box">
                                <span>MXN</span>
                                <ul class="price-list clearfix">
                                    <li><a href="index.php">MXN</a></li>
                                    <li><a href="index.php">USD</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <figure class="logo-box"><a href="index.php"><img src="assets/images/logo--sin-fondo--textoazul.png" alt="" width="250"></a></figure>
                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="index.php">Inicio</a></li>
                                        <li class="dropdown"><a href="index.php">Nosotros</a>
                                            <ul>
                                                <li><a href="#">Sobre nosotros</a></li>
                                                <li><a href="#">Nuestros servicios</a></li>
                                                <li><a href="#">Nuestor esquipo</a></li>
                                                <li><a href="#">Testimoniales</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.php">Productos<span>Nuevo</span></a>
                                            <div class="megamenu">
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 column">
                                                        <ul>
                                                            <li><h4>Categorias</h4></li>
                                                            <li><a href="#">Categoria 01</a></li>
                                                            <li><a href="#">Categoria 02</a></li>
                                                            <li><a href="#">Categoria 03</a></li>
                                                            <li><a href="#">Categoria 04</a></li>
                                                            <li><a href="#">Categoria 05</a></li>
                                                        </ul>
                                                    </div>
                                                </div>                                           
                                            </div>
                                        </li>   
                                        <li><a href="#">Blog</a></li> 
                                        <li><a href="#">Contacto</a></li>               
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <ul class="menu-right-content clearfix">
                            <li>
                                <div class="search-btn">
                                    <button type="button" class="search-toggler"><i class="flaticon-search"></i></button>
                                </div>
                            </li>
                            <li><a href="#"><i class="flaticon-like"></i></a></li>
                            <li><a href="#"><i class="flaticon-user"></i></a></li>
                            <li class="shop-cart">
                                <a href="#"><i class="flaticon-shopping-cart-1"></i><span>3</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box clearfix">
                        <div class="logo-box pull-left">
                            <figure class="logo"><a href="index.php"><img src="assets/images/logo--sin-fondo--textoazul.png" alt="" width="250"></a></figure>
                        </div>
                        <div class="menu-area pull-right">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo--sin-fondo--textoblanco.png" alt="" title="" width="250"></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contacto</h4>
                    <ul>
                        <li>CDMX, México</li>
                        <li><a href="tel:+5211234567890">+(521) 1234-567-890</a></li>
                        <li><a href="mailto:info@artezannal.com">info@artezannal.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.php"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- banner-section -->
        <section class="banner-style-one">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
            <div class="banner-carousel owl-theme owl-carousel">
                <div class="slide-item">
                    <div class="auto-container">
                        <div class="content-inner">
                            <div class="content-box">
                                <h1>Hasta <br /><span>50%</span> de descuento</h1>
                                <h3>Catálogo de verano - 2023</h3>
                                <p>Nuevo estilo moderno.</p>
                                <div class="btn-box">
                                    <a href="index.php" class="theme-btn-one">Explorar ahora<i class="flaticon-right-1"></i></a>
                                </div>
                            </div>
                            <figure class="image-box image-1"><img src="assets/images/banner/banner-image-1.png" alt=""></figure>
                        </div> 
                    </div>
                </div>
                <div class="slide-item">
                    <div class="auto-container">
                        <div class="content-inner">
                            <div class="content-box">
                                <h1>Hasta <br /><span>50%</span> de descuento</h1>
                                <h3>Catálogo de verano - 2023</h3>
                                <p>Nuevo estilo moderno.</p>
                                <div class="btn-box">
                                    <a href="index.php" class="theme-btn-one">Explorar ahora<i class="flaticon-right-1"></i></a>
                                </div>
                            </div>
                            <figure class="image-box image-2"><img src="assets/images/banner/banner-image-2.png" alt=""></figure>
                        </div> 
                    </div>
                </div>
                <div class="slide-item">
                    <div class="auto-container">
                        <div class="content-inner">
                            <div class="content-box">
                                <h1>Hasta <br /><span>50%</span> de descuento</h1>
                                <h3>Catálogo de verano - 2023</h3>
                                <p>Nuevo estilo moderno.</p>
                                <div class="btn-box">
                                    <a href="index.php" class="theme-btn-one">Explorar ahora<i class="flaticon-right-1"></i></a>
                                </div>
                            </div>
                            <figure class="image-box imgae-3"><img src="assets/images/banner/banner-image-3.png" alt=""></figure>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- topcategory-section -->
        <section class="topcategory-section centred">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Categorías Top</h2>
                    <p>Sigue las tendencias más populares y consigue artículos exclusivos</p>
                    <span class="separator" style="background-image: url(assets/images/icons/separator-1.png);"></span>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 category-block">
                        <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="assets/images/resource/category-1.png" alt=""></figure>
                            <h5><a href="index.html">Categoria 1</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 category-block">
                        <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="assets/images/resource/category-2.png" alt=""></figure>
                            <h5><a href="index.html">Categoria 2</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 category-block">
                        <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="assets/images/resource/category-3.png" alt=""></figure>
                            <h5><a href="index.html">categoria 3</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 category-block">
                        <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="assets/images/resource/category-4.png" alt=""></figure>
                            <h5><a href="index.html">Categoria 4</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- topcategory-section end -->


        <!-- shop-section -->
        <section class="shop-section">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Nuestros Productos Top</h2>
                    <p>Hay algunos productos que presentamos para elegir el mejor</p>
                    <span class="separator" style="background-image: url(assets/images/icons/separator-1.png);"></span>
                </div>
                <div class="sortable-masonry">
                    <div class="filters">
                        <ul class="filter-tabs filter-btns centred clearfix">
                            <li class="active filter" data-role="button" data-filter=".best_seller">Categoria 1</li>
                            <li class="filter" data-role="button" data-filter=".new_arraivals">Categoria 2</li>
                            <li class="filter" data-role="button" data-filter=".top_rate">Categoria 3</li>
                        </ul>
                    </div>
                    <div class="items-container row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller new_arraivals top_rate">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-1.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="product-details.html">Agregar</a></li>
                                            <li><a href="assets/images/resource/shop/shop-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="product-details.html">Producto 1</a>
                                        <span class="price">$70.30</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-2.jpg" alt="">
                                        <span class="category green-bg">Nuevo</span>
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="product-details.html">Agregar</a></li>
                                            <li><a href="assets/images/resource/shop/shop-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="product-details.html">Producto 2</a>
                                        <span class="price">$50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller top_rate">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-3.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="product-details.html">Agregar</a></li>
                                            <li><a href="assets/images/resource/shop/shop-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="product-details.html">Producto 3</a>
                                        <span class="price">$40.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller new_arraivals">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-4.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="product-details.html">Agregar</a></li>
                                            <li><a href="assets/images/resource/shop/shop-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="product-details.html">Producto 4</a>
                                        <span class="price">$60.30</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller top_rate">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-5.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="product-details.html">Agregar</a></li>
                                            <li><a href="assets/images/resource/shop/shop-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="product-details.html">Producto 5</a>
                                        <span class="price">$35.30</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller new_arraivals">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-6.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="product-details.html">Agregar</a></li>
                                            <li><a href="assets/images/resource/shop/shop-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="product-details.html">Producto 6</a>
                                        <span class="price">$25.30</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller new_arraivals top_rate">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-7.jpg" alt="">
                                        <span class="category red-bg">Top</span>
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="product-details.html">Agregar</a></li>
                                            <li><a href="assets/images/resource/shop/shop-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="product-details.html">Producto 7</a>
                                        <span class="price">$90.30</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller new_arraivals">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-8.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="product-details.html">Agregar</a></li>
                                            <li><a href="assets/images/resource/shop/shop-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="product-details.html">Producto 8</a>
                                        <span class="price">$20.30</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-btn centred"><a href="#" class="theme-btn-one">Ver todos los productos<i class="flaticon-right-1"></i></a></div>
            </div>
        </section>
        <!-- shop-section end -->


        <!-- cta-section -->
        <section class="cta-section">
            <div class="image-layer" style="background-image: url(assets/images/background/cta-bg-1.jpg);"></div>
            <div class="auto-container">
                <div class="cta-inner centred">
                    <div class="pattern-layer">
                        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                    </div>
                    <h2>Venta de liquidación de fin de temporada hasta 50%</h2>
                    <p>Bienvenido a la nueva gama de productos. Contamos con más de tres décadas de experiencia en la industria.</p>
                    <a href="#" class="theme-btn-one">Comprar ahora<i class="flaticon-right-1"></i></a>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


        <!-- news-section -->
        <section class="news-section">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Artezannal Noticias</h2>
                    <p>Texto simulado</p>
                    <span class="separator" style="background-image: url(assets/images/icons/separator-1.png);"></span>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-1.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">Sep 05, 2023</span>
                                    <h3><a href="#">Titulo 1</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><a href="#">por admin</a></li>
                                        <li><a href="#">03 Comentarios</a></li>
                                    </ul>
                                    <p>Texto simulado.</p>
                                    <div class="link"><a href="#">Leer más<i class="flaticon-right-1"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="#"><img src="assets/images/news/news-2.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">Sep 04, 2023</span>
                                    <h3><a href="#">Titulo 2.</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><a href="#">por admin</a></li>
                                        <li><a href="#">07 Comentarios</a></li>
                                    </ul>
                                    <p>Texto simulado.</p>
                                    <div class="link"><a href="#">Leer más<i class="flaticon-right-1"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="#"><img src="assets/images/news/news-3.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">Sep 03, 2023</span>
                                    <h3><a href="blog-details.html">Titulo 3</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><a href="#">por admin</a></li>
                                        <li><a href="#">05 Comentarios</a></li>
                                    </ul>
                                    <p>Texto simulado.</p>
                                    <div class="link"><a href="#">Leer más<i class="flaticon-right-1"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- service-section -->
        <section class="service-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-truck"></i></div>
                                    <h3><a href="index.php">Envío gratis</a></h3>
                                    <p>Envío gratuito en pedidos superiores a $100</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-credit-card"></i></div>
                                    <h3><a href="index.php">Pago seguro</a></h3>
                                    <p>Garantizamos el pago seguro</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-24-7"></i></div>
                                    <h3><a href="index.php">Soporte 24/7</a></h3>
                                    <p>Contáctenos las 24 horas del día, los 7 días de la semana</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-undo"></i></div>
                                    <h3><a href="index.php">Devolución</a></h3>
                                    <p>Simplemente devuélvalo dentro de los 30 días para un cambio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- instagram-section -->
        <section class="instagram-section">
            <div class="outer-container">
                <div class="sec-title">
                    <h2>Síguenos en Instagram</h2>
                    <p>Texto simulado</p>
                    <span class="separator" style="background-image: url(assets/images/icons/separator-1.png);"></span>
                </div>
                <div class="six-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <figure class="image-box">
                        <img src="assets/images/resource/instagram-1.jpg" alt="">
                        <ul class="info-list clearfix">
                            <li><a href="index-2.html"><i class="flaticon-heart"></i>450</a></li>
                            <li><a href="index-2.html"><i class="flaticon-commentary"></i>320</a></li>
                        </ul>
                    </figure>
                    <figure class="image-box">
                        <img src="assets/images/resource/instagram-2.jpg" alt="">
                        <ul class="info-list clearfix">
                            <li><a href="index-2.html"><i class="flaticon-heart"></i>450</a></li>
                            <li><a href="index-2.html"><i class="flaticon-commentary"></i>320</a></li>
                        </ul>
                    </figure>
                    <figure class="image-box">
                        <img src="assets/images/resource/instagram-3.jpg" alt="">
                        <ul class="info-list clearfix">
                            <li><a href="index-2.html"><i class="flaticon-heart"></i>450</a></li>
                            <li><a href="index-2.html"><i class="flaticon-commentary"></i>320</a></li>
                        </ul>
                    </figure>
                    <figure class="image-box">
                        <img src="assets/images/resource/instagram-4.jpg" alt="">
                        <ul class="info-list clearfix">
                            <li><a href="index-2.html"><i class="flaticon-heart"></i>450</a></li>
                            <li><a href="index-2.html"><i class="flaticon-commentary"></i>320</a></li>
                        </ul>
                    </figure>
                    <figure class="image-box">
                        <img src="assets/images/resource/instagram-5.jpg" alt="">
                        <ul class="info-list clearfix">
                            <li><a href="index-2.html"><i class="flaticon-heart"></i>450</a></li>
                            <li><a href="index-2.html"><i class="flaticon-commentary"></i>320</a></li>
                        </ul>
                    </figure>
                    <figure class="image-box">
                        <img src="assets/images/resource/instagram-6.jpg" alt="">
                        <ul class="info-list clearfix">
                            <li><a href="index-2.html"><i class="flaticon-heart"></i>450</a></li>
                            <li><a href="index-2.html"><i class="flaticon-commentary"></i>320</a></li>
                        </ul>
                    </figure>
                </div>
            </div>
        </section>
        <!-- instagram-section end -->


        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                                    <div class="footer-widget logo-widget">
                                        <figure class="footer-logo"><a href="index.html"><img src="assets/images/logo--sin-fondo--textoazul.png" alt=""></a></figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                                    <div class="footer-widget links-widget">
                                        <div class="widget-title">
                                            <h3>Categorias</h3>
                                        </div>
                                        <div class="widget-content">
                                            <ul class="links-list clearfix">
                                                <li><a href="index.php">Categoria 01</a></li>
                                                <li><a href="index.php">Categoria 02</a></li>
                                                <li><a href="index.php">Categoria 03</a></li>
                                                <li><a href="index.php">Categoria 04</a></li>
                                                <li><a href="index.php">Categoria 05</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                                    <div class="footer-widget links-widget">
                                        <div class="widget-title">
                                            <h3>Enlace útiles</h3>
                                        </div>
                                        <div class="widget-content">
                                            <ul class="links-list clearfix">
                                                <li><a href="index.php">Sobre nosotros</a></li>
                                                <li><a href="index.php">Nuestros servicios</a></li>
                                                <li><a href="index.php">Todos los productos</a></li>
                                                <li><a href="index.php">Términos y condiciones</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                                    <div class="footer-widget contact-widget">
                                        <div class="widget-title">
                                            <h3>Contacto</h3>
                                        </div>
                                        <ul class="info-list clearfix">
                                            <li>CDMX, <br />México.</li>
                                            <li><a href="tel:23055873407">+(521) 1234-567-890</a></li>
                                            <li><a href="mailto:info@artezannal.com">info@artezannal.com</a></li>
                                        </ul>
                                        <ul class="footer-social clearfix">
                                            <li><a href="index.php"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="index.php"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index.php"><i class="fab fa-vimeo-v"></i></a></li>
                                            <li><a href="index.php"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                                    <div class="footer-widget newsletter-widget">
                                        <div class="widget-title">
                                            <h3>Boletin informativo</h3>
                                        </div>
                                        <div class="widget-content">
                                            <form action="contact.html" method="post" class="newsletter-form">
                                                <div class="form-group">
                                                    <input type="email" name="email" placeholder="Ingresa tu email" required="">
                                                    <button type="submit" class="theme-btn-two">Subscribete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container clearfix">
                    <ul class="cart-list pull-left clearfix">
                        <!--<li><a href="index.html"><img src="assets/images/resource/card-1.png" alt=""></a></li>
                        <li><a href="index.html"><img src="assets/images/resource/card-2.png" alt=""></a></li>
                        <li><a href="index.html"><img src="assets/images/resource/card-3.png" alt=""></a></li>
                        <li><a href="index.html"><img src="assets/images/resource/card-4.png" alt=""></a></li>-->
                    </ul>
                    <div class="copyright pull-right">
                        <p>&copy;<a href="index.php">Artezannal</a> by Xperanto 2023 All Right Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-long-arrow-alt-up"></i>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>
</body><!-- End of .page_wrapper -->
</html>
