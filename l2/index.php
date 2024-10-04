<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Artezannal</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/carrito.ico" type="image/x-icon">

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
<style type="text/css">
    .main-header .logo-box {
      position: relative;
      display: block;
      padding: 0px 0px;
    }
    .main-menu .navigation > li > a {   
        color: #2D3364;
    }
    .main-header .menu-right-content li a {
        color: #2D3364;
    }
    .main-header .menu-right-content li.shop-cart a span {
        background: #2D3364;
    }
    body{
        background-image: url('assets/images/fondo.png');
        background-repeat: repeat;
        background-attachment: fixed;
        background-size: auto;
    }
    .sticky-header {
        background-image: url('assets/images/fondo.png');
        background-repeat: repeat;
        background-attachment: fixed;
        background-size: auto;
    }
    .banner-style-two {
        padding: 0px 0px;
    }
    .category-block-one .image-box img{
        /*border-color: black;*/
        /*border-width: 10px;
        border-style: solid;*/
        /*border-image: linear-gradient(45deg, rgb(143, 55, 0), rgb(66, 228, 250)) 1;*/
        /*box-shadow: 0px 0px 50px 0px rgba(0, 0, 0, 0.8);*/
    }
    .category-block-one .image-box::after {
        border-radius: 50%;
        content: ""; 
        position: absolute; 
        inset: -.7em; 
        /*background: linear-gradient(to bottom right, rgb(0, 255, 81), rgb(255, 213, 0));*/
        background-image: url('assets/images/background/borde.png');
        /*filter: blur(0.5em);*/
        z-index: -1; 
    }
    .auto-container {
        max-width: 100%;
    }
    .service-style-two {
        background: #2D3364;
    }
    .service-style-two .service-block-one {
        background: #2D3364;
    }
    .category-block-one .box2::after {
        background-image: url('');
    }
    .cta-style-two {
        background-size: contain;
    }
    .cta-style-two .inner-box {
        background: none;
        max-width: 100%;
    }
    .cta-style-two .inner-box .inner {
        border: none;
    }
    .about-section .text-inner h2 {
        color: #2D3364;
    }
    .about-section .text-inner h3 {
        color: #2D3364;
    }
    .contact-section {
        padding: 10px 0px 10px 0px;
    }
    .theme-btn-two {
        background: #2D3364;
    }
    .footer-social li a {
        font-size: 20px;
        color: #848484;
    }
    .main-footer .footer-top {
        background: #2D3364;
    }
</style>
</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
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
                    <form method="post" action="index.html">
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
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <figure class="logo-box"><a href="index.html"><img src="assets/images/logoAZ.png" alt=""></a></figure>
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
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Productos</a></li>
                                        <li><a href="#">Quiénes somos</a></li>
                                        <li><a href="#">Contacto</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <ul class="menu-right-content clearfix">
                            <li><a href=""><i class="flaticon-user"></i></a></li>
                            <li class="shop-cart">
                                <a href=""><img src="assets/images/carrito.png" width="30"><span>3</span></a>
                            </li>
                            <li>
                                <div class="search-btn">
                                    <button type="button" class="search-toggler"><i class="flaticon-search"></i></button>
                                </div>
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
                            <figure class="logo"><a href="index.html"><img src="assets/images/logoAZ.png" alt=""></a></figure>
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
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <section class="banner-style-two">
            <div class="auto-container">
                <div class="banner-carousel-2 owl-carousel owl-theme owl-nav-none">
                    <div class="content-box" style="background-image: url(assets/images/banner/banner1.png);">
                        <div class="inner-box" style="visibility: hidden;">
                            <h1>Discover & <span>Shop</span> The Trend</h1>
                            <p>New Modern Stylist Fashionable Men's Wear Jeans Shirt.</p>
                            <a href="index-2.html" class="theme-btn-two">Explore Now<i class="flaticon-right-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- topcategory-section -->
        <section class="topcategory-section centred">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Productos</h2>
                    <span class="separator" style="background-image: url(assets/images/icons/separator-1.png);"></span>
                </div>
                <div class="row clearfix" style="margin-left: 150px; margin-right: 150px;">
                    <div class="col-lg-4 col-md-6 col-sm-12 category-block">
                        <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="assets/images/resource/producto1.png" alt=""></figure>
                            <h5><a href="index.html">Producto 1</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 category-block">
                        <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="assets/images/resource/producto2.png" alt=""></figure>
                            <h5><a href="index.html">Producto 2</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 category-block">
                        <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="assets/images/resource/producto3.png" alt=""></figure>
                            <h5><a href="index.html">Producto 3</a></h5>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row clearfix" style="margin-left: 150px; margin-right: 150px;">
                    <div class="col-lg-4 col-md-6 col-sm-12 category-block">
                        <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="assets/images/resource/producto4.png" alt=""></figure>
                            <h5><a href="index.html">Producto 4</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 category-block">
                        <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="assets/images/resource/producto5.png" alt=""></figure>
                            <h5><a href="index.html">Producto 5</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 category-block">
                        <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="assets/images/resource/producto6.png" alt=""></figure>
                            <h5><a href="index.html">Producto 6</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- topcategory-section end -->

        <!-- service-style-two -->
        <section class="service-style-two">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box" style="text-align:center;">
                                    <h1 style="color: white;">Quiénes somos</h1>
                                    <br>
                                    <p style="text-align:justify;margin-right: 200px;margin-left: 200px; color: white; font-size: 18px;">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                    </p>
                                    <br>
                                    <p style="text-align:justify;margin-right: 200px;margin-left: 200px; color: white; font-size: 18px;">
                                        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                                    </p>
                                    <br>
                                    <p style="text-align:justify;margin-right: 200px;margin-left: 200px; color: white; font-size: 18px;">
                                        Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-style-two end -->

        <!-- topcategory-section -->
        <section class="topcategory-section centred">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Socios</h2>
                    <span class="separator" style="background-image: url(assets/images/icons/separator-1.png);"></span>
                </div>
                <div class="row clearfix" style="margin-left: 150px; margin-right: 150px;">
                    <div class="col-lg-4 col-md-6 col-sm-12 category-block">
                        <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image-box box2"><img src="assets/images/resource/socio1.png" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 category-block">
                        <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <figure class="image-box box2"><img src="assets/images/resource/socio2.png" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 category-block">
                        <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <figure class="image-box box2"><img src="assets/images/resource/socio3.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- topcategory-section end -->

        <!-- cta-style-two -->
        <section class="cta-style-two" style="background-image: url(assets/images/background/opiniones.png); background-size: auto 100%;">
            <div class="auto-container">
                <div class="inner-box">
                    <div class="inner" style="text-align:center;">
                        <h1 style="color:white;">Opiniones</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-style-two end -->

        <!-- about-section -->
        <section class="about-section" id="about" style="background-color: white;">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 text-column">
                        <div class="text-inner" style="text-align:center;">
                            <h2>''</h2>
                            <h3>Alexa Garza, CA</h3>
                            <p style="color: #2D3364;">"Excelentes productos, lo que más me gusta es que la puntualidad en la entrega y lo bonito de os empaques."</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-column">
                        <div class="text-inner" style="text-align:center;">
                            <h2>''</h2>
                            <h3>Ana Lucía, CDMX</h3>
                            <p style="color: #2D3364;">"Amo lo natural y éste sitio ha sido mi mejor aliado para encontrar los productos que más necesito."</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-column">
                        <div class="text-inner" style="text-align:center;">
                            <h2>''</h2>
                            <h3>Arturo Cervantes, CDMX</h3>
                            <p style="color: #2D3364;">"Una grate experiencia recibir mis productos de manera personalizada, cuidan hasta los más pequeños detalles."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->

        <!-- contact-section -->
        <section class="contact-section" style="background-image: url('assets/images/background/contacto.png');">
            <div class="auto-container">
                <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 big-column">
                    <div class="sec-title">
                        <h2 style="color:white">Contacto</h2>
                        <p style="color:white; margin-bottom: 0px;"><strong>123-456-7890 / scampbell@artezannal.com</strong></p>
                        <p style="color:white;"><strong>500 Terry Francine Street San Francisco, CA 94158</strong></p>
                        <span class="separator" style="background-image: url(assets/images/icons/separator-1.png);"></span>
                    </div>
                    <div class="form-inner">
                        <form method="post" action="#" id="contact-form" class="default-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Nombre" required>
                                    <br>
                                    <input type="text" name="email" placeholder="Apellidos" required>
                                    <br>
                                    <input type="email" name="email" placeholder="Email" required>
                                    <br>
                                    <input type="text" name="subject" placeholder="Título" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Mensaje" style="height: 100%;"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn text-right">
                                    <button type="submit" class="theme-btn-two" name="submit-form">Enviar<i class="flaticon-right-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->

        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 big-column">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 footer-column" style="text-align: center;">
                                    <div class="footer-widget contact-widget">
                                        <div class="widget-title">
                                            <h4 style="color:white;">FAQ</h4>
                                            <h4 style="color:white">Shipping and Returns</h4>
                                            <h4 style="color:white;">Terms and Conditions</h4>
                                        </div>
                                        <ul class="footer-social clearfix">
                                            <li><a href=""><i class="fab fa-facebook-f" style="color:white;"></i></a></li>
                                            <li><a href=""><i class="fab fa-pinterest-p" style="color:white;"></i></a></li>
                                            <li><a href=""><i class="fab fa-instagram" style="color:white;"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
