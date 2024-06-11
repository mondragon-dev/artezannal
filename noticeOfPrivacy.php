<?php

    include('includes/headers.php');

    $sql_c = "SELECT id, categoria FROM categorias";
    $res_c = mysqli_query($link,$sql_c);

?>
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
    .main-header .logo-box {
        padding: 0px 0px;
    }
    .sticky-header .logo-box .logo {
        padding: 0px 0px !important;
    }
    .main-header .header-top {
        background-color: #2D3364;
    }
    .main-header .header-top .price-box span::before {
      color: white;
    }
    .main-header .language .lang-dropdown {
      background: #2D3364;
      border: 1px solid #f0f0f0;
    }
    .main-header .language .lang-dropdown li a {
      color: white;
    }
    .main-header .header-top .price-box .price-list {
      background: #2D3364;
    }
    .main-header .header-top .price-box .price-list li a {
      color: white;
    }
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

    #bannerDesktop{
        display: block;
    }
    #bannerMobile{
        display: none;
    }

    @media only screen and (min-device-width : 320px) and (max-width: 967px) {
        #bannerDesktop{
            display: none;
        }
        #bannerMobile{
            display: block;
        }
    }
    .service-page-section {
        position: relative;
        padding: 0px 0px;
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
                                <li><i class="flaticon-email" style="color:white;"></i><a href="mailto:soporte@artezannal.com" style="color:white;">soporte@artezannal.com</a></li>
                                <li style="color:white;"><i class="flaticon-global" style="color:white;"></i> CDMX México</li>
                            </ul>
                        </div>
                        <div class="top-right pull-right">
                            <ul class="social-links clearfix" style="color:white;">
                                <li><a href="index.php"><i class="fab fa-facebook-f" style="color:white;"></i></a></li>
                                <li><a href="index.php"><i class="fab fa-twitter" style="color:white;"></i></a></li>
                                <li><a href="index.php"><i class="fab fa-vimeo-v" style="color:white;"></i></a></li>
                                <li><a href="index.php"><i class="fab fa-google-plus-g" style="color:white;"></i></a></li>
                            </ul>
                            <div class="language">
                                <div class="lang-btn">
                                    <span class="flag"><img src="assets/images/icons/mexico.png" alt="" title="Español"></span>
                                    <span class="txt" style="color:white;">Español</span>
                                    <span class="arrow fa fa-angle-down" style="color:white;"></span>
                                </div>
                                <div class="lang-dropdown">
                                    <ul>
                                        <li><a href="index.php">Ingles</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-box" style="color:white;">
                                <span style="color:white;">MXN</span>
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
                                                <li><a href="#">Nuestro equipo</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.php">Productos<span>Nuevo</span></a>
                                            <div class="megamenu">
                                                <div class="row clearfix">
                                                    <?php

                                                        $arrayCategorias = array();

                                                        while($dat_c = mysqli_fetch_array($res_c)){
                                                            $arrayCategorias[] = $dat_c[categoria];
                                                    ?>
                                                            <div class="col-lg-3 column">
                                                                <ul>
                                                                    <li><h4><?php echo $dat_c[categoria] ?></h4></li>
                                                                    <?php
                                                                        $sql_s = "SELECT subcategoria FROM subcategorias WHERE categoria_id = '".$dat_c[id]."' ";
                                                                        $res_s = mysqli_query($link, $sql_s);
                                                                        while($dat_s = mysqli_fetch_array($res_s)){
                                                                    ?>
                                                                            <li><a href="#"><?php echo $dat_s[subcategoria]; ?></a></li>
                                                                    <?
                                                                        }
                                                                    ?>
                                                                </ul>
                                                            </div>
                                                    <?
                                                        }
                                                    ?>
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


        <!-- page-title -->
        <section class="page-title centred">
            <div class="pattern-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>AVISO DE PRIVACIDAD</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="index.html">Artezannal</a></li>
                        <li>AVISO DE PRIVACIDAD</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->

        <!-- service-page-section -->
        <section class="service-page-section">
            <div class="auto-container">
                <div class="service-block-two mb-100">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                                <div class="content-box">
                                    <p align="justify">De conformidad con lo establecido en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, <span style="color: #000;">Artezannal</span> pone a su disposición el siguiente aviso de privacidad.</p>
                                    <p align="justify"><span style="color: #000;">Artezannal</span>, es responsable del uso y protección de sus datos personales, en este sentido y atendiendo las obligaciones legales establecidas en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, a través de este instrumento se informa a los titulares de los datos, la información que de ellos se recaba y los fines que se le darán a dicha información.</p>
                                    <p align="justify">Además de lo anterior, informamos a usted que <span style="color: #000;">Artezannal</span>, tiene su domicilio ubicado en:</p>
                                    <p>
                                        Viaducto M. Aleman 196<br>
                                        Col Escandon II seccion<br>
                                        Miguel Hidalgo<br>
                                        C.P. 11800
                                    </p>
                                    <p align="justify">Los datos personales que recabamos de usted serán utilizados para las siguientes finalidades, las cuales son necesarias para concretar nuestra relación con usted, así como para atender los servicios y/o pedidos que solicite:</p>
                                    <p align="justify">Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, utilizaremos los siguientes datos personales:</p>
                                    <p>
                                        Nombre<br>
                                        Correo<br>
                                        Domicilio
                                    </p>
                                    <p align="justify">Por otra parte, informamos a usted, que sus datos personales no serán compartidos con ninguna autoridad, empresa, organización o persona distintas a nosotros y serán utilizados exclusivamente para los fines señalados.</p>
                                    <p align="justify">Usted tiene en todo momento el derecho a conocer qué datos personales tenemos de usted, para qué los utilizamos y las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la corrección de su información personal en caso de que esté desactualizada, sea inexacta o incompleta (Rectificación); de igual manera, tiene derecho a que su información se elimine de nuestros registros o bases de datos cuando considere que la misma no está siendo utilizada adecuadamente (Cancelación); así como también a oponerse al uso de sus datos personales para fines específicos (Oposición). Estos derechos se conocen como derechos ARCO.</p>
                                    <p align="justify">Para el ejercicio de cualquiera de los derechos ARCO, se deberá presentar la solicitud respectiva a través del siguiente correo electrónico:</p>
                                    <p>gemadelpilar90@gmail.com</p>
                                    <p align="justify">Lo anterior también servirá para conocer el procedimiento y requisitos para el ejercicio de los derechos ARCO.</p>
                                    <p align="justify">En todo caso la respuesta a la solicitud se dará en el siguiente plazo: 2 semanas.</p>
                                    <p align="justify">Los datos de contacto de la persona o departamento de datos personales, que está a cargo de dar trámite a las solicitudes de derechos ARCO, son los siguientes:</p>
                                    <p>
                                        a) Nombre del responsable: GEMA DEL PILAR REYES HERNANDEZ<br>
                                        b) Domicilio:<br>
                                        Emiliano Zapata 207<br>
                                        Col Tlaquepaque<br>
                                        C.P. 45500<br>
                                        c) Teléfono: ________<br>
                                        d) Correo electrónico: gemadelpilar90@gmail.com
                                    </p>
                                    <p align="justify">Cabe mencionar, que en cualquier momento usted puede revocar su consentimiento para el uso de sus datos personales. Del mismo modo, usted puede revocar el consentimiento que, en su caso, nos haya otorgado para el tratamiento de sus datos personales. Sin embargo, es importante que tenga en cuenta que no en todos los casos podremos atender su solicitud o concluir el uso de forma inmediata, ya que es posible que por alguna obligación legal se requiera seguir tratando sus datos personales.</p>
                                    <p align="justify">Asimismo, usted deberá considerar que para ciertos fines la revocación de su consentimiento implicará que no podamos seguir prestando el servicio que nos solicitó, o la conclusión de su relación con nosotros.</p>
                                    <p align="justify">Para revocar el consentimiento que usted otorga en este acto o para limitar su divulgación, se deberá presentar la solicitud respectiva a través de los formatos que estarán a su disposición en:</p>
                                    <p>https://artezannal.com/</p>
                                    <p align="justify">Del mismo modo, podrá solicitar la información para conocer el procedimiento y requisitos para la revocación del consentimiento, así como limitar el uso y divulgación de su información personal.</p>
                                    <p align="justify">En cualquier caso, la respuesta a las peticiones se dará a conocer en el siguiente plazo: 15 dias.</p>
                                    <p align="justify">El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos requerimientos legales; de nuestras propias necesidades por los productos o servicios que ofrecemos; de nuestras prácticas de privacidad; de cambios en nuestro modelo de negocio, o por otras causas, por lo cual, nos comprometemos a mantenerlo informado sobre los cambios que pueda sufrir el presente aviso de privacidad, sin embargo, usted puede solicitar información sobre si el mismo ha sufrido algún cambio a través de la siguiente dirección electrónica:</p>
                                    <p>https://artezannal.com/</p>
                                    <p align="right">
                                        Última actualización:<br>06/06/2024
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-page-section end -->


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
                                                <?php
                                                    for($xx = 0; $xx < count($arrayCategorias); $xx++){
                                                ?>
                                                        <li><a href="#"><?php echo $arrayCategorias[$xx]; ?></a></li>
                                                <?php
                                                    }
                                                ?>
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
                                                <li><a href="files/aviso_de_privacidad.pdf" target="_blank">Aviso de privacidad</a></li>
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
