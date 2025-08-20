<?php 
	session_start(); 
	$sessionID = session_id();
?>

<!doctype html>
<html>
<head>
	<title>Artezannal - eCommerce Landing Page</title>
	<meta name="description" content=""/>
	<meta name="viewport" content="width=device-width, user-scalable=no">

	<meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display+SC:400italic,700italic&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700&amp;subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

 	<link href="css/mobilemenu.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/simple-line-icons.css" rel="stylesheet">
	<link href="css/foundation.min.css" rel="stylesheet">
	<link href="css/jquery.fancybox.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!-- Theme color -->
	<link href="css/less/colors/blue.min.css" rel="stylesheet">
	
	<!-- <link href="favicon.ico" rel="icon" type="image/x-icon" /> -->
	<link rel="icon" type="image/png" href="favicon.png" sizes="32x32">

	<script src="js/lib/modernizr.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

	<style type="text/css">
		.logo-wrapper .logo-image {
  			width: 120%;
  			max-width: 120%;
		}
		.menu-item a {
  			color: #130a56;
  			font-weight: 800;
		}
		.menu-item a:hover{
			color: #D54212;
		}
		.prod-item .image-block {
		  border-radius: 50%;
		}
		.why-we {
  			background-color: #eeeced;
  			background-image: url(images/fondoNosotros.jpg);
  			background-size: cover;
  			padding-top: 25px;
  			padding-bottom: 25px;
		}
		.our-products {
  			padding-bottom: 30px;
		}
		.why-eleme-block .item-title {
		  font-size: 14px;
		  color: #fff;
		  text-align: center;
		}
		.why-eleme-block .item-icon-block .item-icon {
			color: #fff;
		}
		.l-section-padding {
  			padding: 30px 0;
		}
		.get-in-touch {
			background-image: url(images/fondoContacto.jpg);
			background-size: cover;
		}
		.get-in-touch .textarea-contact {
  			min-height: 300px;
		}
		.footer-wrapper {
			background-image: url(images/fondoFooter.png);
			background-size: cover;
			background-position: 50% 50%;
		}
		.get-in-touch form .contact-field {
		  color: #000;
		  opacity: 0.7;
		}
		.button {
  			background-color: #1e8d8d;
		}
		.img-banner{
			position: absolute;
			right: 150px;
			bottom: 0px;
			width: 20%;
		}

		.whatsapp {
		  position: fixed;
		  width: 60px;
		  height: 60px;
		  bottom: 40px;
		  right: 40px;
		  /*background-color: #25d366;*/
		  color: #fff;
		  border-radius: 50px;
		  text-align: center;
		  font-size: 30px;
		  z-index: 100;
		}

		.whatsapp-icon {
		  margin-top: 13px;
		}

		.carrito {
		  position: fixed;
		  width: 60px;
		  height: 60px;
		  top: 20px;
		  right: 40px;
		  /*background-color: #25d366;*/
		  color: #fff;
		  border-radius: 50px;
		  text-align: center;
		  font-size: 30px;
		  z-index: 100;
		}

		.carrito-icon {
		  margin-top: 13px;
		}















		.modal.left .modal-dialog,
.modal.right .modal-dialog {
	position: fixed;
	margin: auto;
	width: 400px;
	height: 100%;
	-webkit-transform: translate3d(0%, 0, 0);
	-ms-transform: translate3d(0%, 0, 0);
	-o-transform: translate3d(0%, 0, 0);
	transform: translate3d(0%, 0, 0);
}

.modal.left .modal-content,
.modal.right .modal-content {
	height: 100%;
	overflow-y: auto;
}

.modal.left .modal-body,
.modal.right .modal-body {
	padding: 15px 15px 80px;
}

/*Left*/
.modal.left.fade .modal-dialog {
	left: -320px;
	-webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
	-moz-transition: opacity 0.3s linear, left 0.3s ease-out;
	-o-transition: opacity 0.3s linear, left 0.3s ease-out;
	transition: opacity 0.3s linear, left 0.3s ease-out;
}

.modal.left.fade.in .modal-dialog {
	left: 0;
}

/*Right*/
.modal.right.fade .modal-dialog {
	right: -320px;
	-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
	-moz-transition: opacity 0.3s linear, right 0.3s ease-out;
	-o-transition: opacity 0.3s linear, right 0.3s ease-out;
	transition: opacity 0.3s linear, right 0.3s ease-out;
}

.modal.right.fade.in .modal-dialog {
	right: 0;
}

/* ----- MODAL STYLE ----- */
.modal-content {
	border-radius: 0;
	border: none;
}

.modal-header {
	border-bottom-color: #eeeeee;
	background-color: #fafafa;
}






		

		



		.card-wrapper {
  max-width: 90%;
  margin: 0 60px 35px;
  padding: 20px 10px;
  overflow: hidden;
}

.card-list .card-item {
  list-style: none;
}

.card-list .card-item .card-link {
  display: block;
  background: #fff;
  padding: 18px;
  user-select: none;
  border-radius: 12px;
  text-decoration: none;
  border: 2px solid transparent;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.05);
  transition: 0.2s ease;
}

.card-list .card-item .card-link:active {
  cursor: grabbing;
}

.card-list .card-item .card-link:hover {
  border-color: #5372F0;
}

.card-list .card-link .card-image {
  width: 100%;
  border-radius: 10px;
  /*aspect-ratio: 16 / 9;*/
  object-fit: cover;
  max-height: 300px;
  max-width: 300px;
}

.card-list .card-link .badge {
  color: #5372F0;
  width: fit-content;
  padding: 8px 16px;
  font-size: 0.95rem;
  border-radius: 50px;
  font-weight: 500;
  background: #DDE4FF;
  margin: 16px 0 18px;
}

.card-list .card-link .badge-designer {
  color: #B22485;
  background: #F7DFF5;
}

.card-list .card-link .badge-marketer {
  color: #B25A2B;
  background: #FFE3D2;
}

.card-list .card-link .badge-gamer {
  color: #205C20;
  background: #D6F8D6;
}

.card-list .card-link .badge-editor {
  color: #856404;
  background: #fff3cd;
}

.card-list .card-link .card-title {
	margin-top: 20px;
  color: #130a56;
  font-size: 18px;
  font-weight: 600;
}

.card-precio {
	margin-top: 10px;
  color: #D54212;;
  font-size: 18px;
  font-weight: 600;
}

.card-list .card-link .card-button {
  height: 35px;
  width: 35px;
  color: #5372F0;
  margin: 30px 0 5px;
  background: none;
  cursor: pointer;
  border-radius: 50%;
  border: 2px solid #5372F0;
  transform: rotate(-45deg);
  transition: 0.4s ease;
}

.card-list .card-link:hover .card-button {
  color: #fff;
  background: #5372F0;
}

.card-wrapper .swiper-pagination-bullet {
  height: 13px;
  width: 13px;
  opacity: 0.5;
  background: #5372F0;
}

.card-wrapper .swiper-pagination-bullet-active {
  opacity: 1;
}

.card-wrapper .swiper-slide-button {
  color: #5372F0;
  margin-top: -35px;
}

/* Responsive media query code for small screens */
@media (max-width: 768px) {
  .card-wrapper {
    margin: 0 10px 25px;
  }

  .card-wrapper .swiper-slide-button {
    display: none;
  }
}


#Layer_1 {
  width: 10%;
  height: 10%;
}

.footer-item {
  vertical-align: top;
  margin-top: 30px;
}

	</style>
</head>
<body data-currency="$">
	<span class="theme-bg-c"></span>
	<div class="preloader-block">
		<div class="preloader-container">
			<img src="images/logo_animado.gif" alt="" class="logo-image">
		</div>
	</div>
	<div class="page-content">
		<header class="header">
			<div class="menu-wrapper">
				<div class="row" style="max-width: 90%;">
					<div class="column large-12" style="display: flex; justify-content: right; margin-top: -30px; margin-left: -20px">
						<form role="search" name="formbuscar" id="formbuscar" style="width: 350px; height: 44px; border-radius: 5px; display: flex; flex-direction: row; align-items: center;" method="POST" action="searchResults.php">
		  				<input type="search" id="query" name="q" placeholder="Buscador..." aria-label="Search through site content" style="all: unset; font: 16px system-ui; color: #fff; height: 100%; width: 90%; padding: 6px 10px;border:none;border-bottom: 1px solid #fff;">
		  				<button style="all: unset; cursor: pointer; width: 44px; height: 44px;" onclick="buscarForm()">
		    				<svg viewBox="0 0 1024 1024" style="color: #fff;	fill: currentColor; width: 24px;	height: 24px;"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg>
		  				</button>
						</form>
					</div>
				</div>
				<br>
				<div class="row" style="max-width: 90%;">
					<div class="column large-2">
						<div class="logo-wrapper">
							<img src="images/logoIndex.png" alt="" class="logo-image">
						</div>
					</div>
					<div class="column large-10">
						<nav class="js-navs-list">
							<ul class="menu-page">
								<li class="menu-item">
									<a href="/"><font size="+1">Inicio</font></a>
								</li>
								<li class="menu-item">
									<a href="#productos"><font size="+1">Productos</font></a>
								</li>
								<li class="menu-item">
									<a href="#quienes-somos"><font size="+1">Quiénes somos</font></a>
								</li>
								<li class="menu-item">
									<a href="#contacto"><font size="+1">Contacto</font></a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

			<div class="header-container">
				<div class="header-wrapper">
					<div class="header-content">
						<div class="row">
							<div class="columns large-12 medium-12 small-12">
								<div class="page-quote-block">
									<h2 class="page-quote js-slidedown-reveal"></h2>
									<h4 class="quote-comment js-slidedown-reveal"></h4>
									<span class="theme-bg-c js-procede-btn button js-slidedown-reveal" style="visibility: hidden;"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div>
				<div class="video-bg-wrapper">
					<video autoplay loop muted playsinline class="video-bg js-video-bg" poster="images/bg-preview.jpg">
				        <source src="video/artezannal.mp4" type="video/mp4">
				    </video>
				</div>
				<!--<img src="assets/images/circulo_grande.png" class="img-banner">-->
			</div>

			<div class="mobile-menu-wrapper">
				<div class="toggle-btn-block js-toggle-menu">
					<div class="toggle-btn"></div>
				</div>
				<div class="mobile-nav-list js-mobile-container">
				</div>
			</div>
		</header>

		<section role="main">	

			<section class="our-products l-section-padding" style="display:none">
				<div class="row">
					<div class="columns large-12">
						<h2 class="l-section-title"><span class="title-text">Productos</span></h2>
					</div>
				</div>
				<div class="row">
					<div class="column-large-12">
						<div class="hidden-container">

							<div class="row">
								<div class="columns large-12 medium-12">
									<div class="added-products">
										<p class="l-inline-block"></p>
										<div class="shopping-cart l-inline-block">
											<i data-icon="&#xe04e;"></i>
											<span class="products-number"><span class="js-product-count">0</span></span>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="columns large-12 medium-12 small-12">
									<div class="product-presentation-wrapper">
										<div class="product-presentation-content js-products-container">
											<div class="category-list">
												<dl class="select">
												    <dt>
												        <a href="#"><span data-icon="&#xe067;"></span></a>
												    </dt>
												    <dd></dd>
												</dl>
											</div>
											<div class="slider-preloader">
												<div id="preloader-container">
													<div class="preloader-center">
														<div class="preloader-view">
															<div></div>
															<div></div>
															<div></div>
														</div>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>	

			<section id="productos">
				<div class="row">
					<div class="columns large-12">
						<center>
							<br><br><br>
							<h3><span style="font-size:24px; font-weight:bold; letter-spacing: 0.25em;">Productos</span></h3>
							<br><br><br>
						</center>
					</div>
				</div>
   				


				<div class="container swiper">
    <div class="card-wrapper">
      <!-- Card slides container -->
      <ul class="card-list swiper-wrapper">
        <li class="card-item swiper-slide">
          <span href="javascript:void(0)" class="card-link" style="text-align:center;">
          	<a href="images/products/01.jpg" data-toggle="lightbox" data-gallery="gallery">
            	<img src="images/products/01.jpg" alt="Card Image" class="card-image" style="border-radius: 50%;">
            </a>
            <h2 class="card-title">Anillo de plata</h2>
            <h2 class="card-precio">$252.00</h2>
            <br>
            <div class="checkit-btn-block">
            	<span class="checkit-btn l-dis-ib button" style="border-width: 1px;background-color:#fff;color: #130a56;" data-toggle="modal" data-target="#myModal2" onclick="agregarCarrito(1)">Agregar al carrito</span>
            </div>
          </span>
        </li>
        <li class="card-item swiper-slide">
          <span href="javascript:void(0)" class="card-link" style="text-align:center;">
          	<a href="images/products/02.jpg" data-toggle="lightbox" data-gallery="gallery">
            	<img src="images/products/02.jpg" alt="Card Image" class="card-image" style="border-radius: 50%;">
            </a>
            <h2 class="card-title">Vasija de porcelana</h2>
            <h2 class="card-precio">$300.00</h2>
            <br>
            <div class="checkit-btn-block">
            	<span class="checkit-btn l-dis-ib button" style="border-width: 1px;background-color:#fff;color: #130a56;" data-toggle="modal" data-target="#myModal2" onclick="agregarCarrito(2)">Agregar al carrito</span>
            </div>
          </span>
        </li>
        <li class="card-item swiper-slide">
          <span href="javascript:void(0)" class="card-link" style="text-align:center;">
          	<a href="images/products/03.jpg" data-toggle="lightbox" data-gallery="gallery">
            	<img src="images/products/03.jpg" alt="Card Image" class="card-image" style="border-radius: 50%;">
            </a>
            <h2 class="card-title">Mezcal artesanal</h2>
            <h2 class="card-precio">$550.00</h2>
            <br>
            <div class="checkit-btn-block">
            	<span class="checkit-btn l-dis-ib button" style="border-width: 1px;background-color:#fff;color: #130a56;" data-toggle="modal" data-target="#myModal2" onclick="agregarCarrito(3)">Agregar al carrito</span>
            </div>
          </span>
        </li>
        <li class="card-item swiper-slide">
          <span href="javascript:void(0)" class="card-link" style="text-align:center;">
          	<a href="images/products/04.jpg" data-toggle="lightbox" data-gallery="gallery">
            	<img src="images/products/04.jpg" alt="Card Image" class="card-image" style="border-radius: 50%;">
            </a>
            <h2 class="card-title">Anillo de coco</h2>
            <h2 class="card-precio">$180.00</h2>
            <br>
            <div class="checkit-btn-block">
            	<span class="checkit-btn l-dis-ib button" style="border-width: 1px;background-color:#fff;color: #130a56;" data-toggle="modal" data-target="#myModal2" onclick="agregarCarrito(4)">Agregar al carrito</span>
            </div>
          </span>
        </li>
        <li class="card-item swiper-slide">
          <span href="javascript:void(0)" class="card-link" style="text-align:center;">
          	<a href="images/products/05.jpg" data-toggle="lightbox" data-gallery="gallery">
            	<img src="images/products/05.jpg" alt="Card Image" class="card-image" style="border-radius: 50%;">
            </a>
            <h2 class="card-title">Jabón de castilla</h2>
            <h2 class="card-precio">$200.00</h2>
            <br>
            <div class="checkit-btn-block">
            	<span class="checkit-btn l-dis-ib button" style="border-width: 1px;background-color:#fff;color: #130a56;" data-toggle="modal" data-target="#myModal2" onclick="agregarCarrito(5)">Agregar al carrito</span>
            </div>
          </span>
        </li>
        <li class="card-item swiper-slide">
          <span href="javascript:void(0)" class="card-link" style="text-align:center;">
          	<a href="images/products/06.jpeg" data-toggle="lightbox" data-gallery="gallery">
            	<img src="images/products/06.jpeg" alt="Card Image" class="card-image" style="border-radius: 50%;">
            </a>
            <h2 class="card-title">Colgante de macrame</h2>
            <h2 class="card-precio">$190.00</h2>
            <br>
            <div class="checkit-btn-block">
            	<span class="checkit-btn l-dis-ib button" style="border-width: 1px;background-color:#fff;color: #130a56;" data-toggle="modal" data-target="#myModal2" onclick="agregarCarrito(6)">Agregar al carrito</span>
            </div>
          </span>
        </li>
        <li class="card-item swiper-slide">
          <span href="javascript:void(0)" class="card-link" style="text-align:center;">
          	<a href="images/products/07.jpg" data-toggle="lightbox" data-gallery="gallery">
            	<img src="images/products/07.jpg" alt="Card Image" class="card-image" style="border-radius: 50%;">
            </a>
            <h2 class="card-title">Mochila</h2>
            <h2 class="card-precio">$320.00</h2>
            <br>
            <div class="checkit-btn-block">
            	<span class="checkit-btn l-dis-ib button" style="border-width: 1px;background-color:#fff;color: #130a56;" data-toggle="modal" data-target="#myModal2" onclick="agregarCarrito(7)">Agregar al carrito</span>
            </div>
          </span>
        </li>
      </ul>

       <!-- Pagination -->
      <div class="swiper-pagination"></div>

      <!-- Navigation Buttons -->
      <div class="swiper-slide-button swiper-button-prev"></div>
      <div class="swiper-slide-button swiper-button-next"></div>
    </div>
  </div>


</section>
<br><br>
			<section class="our-partners l-section-padding" id="companies" style="display: none;">
				<div class="row">
					<div class="columns large-12">
						<div class="partners-carousel">
							<ul class="slides">
								<li>
									<div class="partners-item">
										<a href="#">
											<img src="http://placehold.it/220x40" alt=""/>
										</a>
									</div>
								</li>
								<li>
									<div class="partners-item">
										<a href="#">
											<img src="http://placehold.it/220x40" alt=""/>
										</a>
									</div>
								</li>
								<li>
									<div class="partners-item">
										<a href="#">
											<img src="http://placehold.it/220x40" alt=""/>
										</a>
									</div>
								</li>
								<li>
									<div class="partners-item">
										<a href="#">
											<img src="http://placehold.it/220x40" alt=""/>
										</a>
									</div>
								</li>
								<li>
									<div class="partners-item">
										<a href="#">
											<img src="http://placehold.it/220x40" alt=""/>
										</a>
									</div>
								</li>
								<li>
									<div class="partners-item">
										<a href="#">
											<img src="http://placehold.it/220x40" alt=""/>
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<section class="why-we" id="quienes-somos">
				<div class="row" style="max-width: 90%;">
					<div class="columns large-8">
						<br><br>
						<span class="title-text" style="color:#fff;font-size:24px;">Quiénes somos</span>
						<p style="text-align:justify; color: #fff; font-size: 16px;line-height: 1.8em; margin-top: 20px;">
							Bienvenidos a nuestra plataforma, donde nos dedicamos a promover a las empresas que elaboran y comercializan productos artesanales mexicanos de la más calidad. Creemos en el valor de hacer las cosas a mano y en el talento de nuestros artesanos. Únete a nosotros para descubrir y apoyar lo mejor de la producción local y ¡Juntos hagámos crecer a nuestra comunidad!
						</p>
						<p style="text-align:justify; color: #fff; font-size: 16px;line-height: 1.8em; margin-top: 20px;">
							Los invitamos a conocer los productos, a confiar y creer en la calidad de lo nacional y compartir con otros el gusto por la riqueza que existe en nuesto pais.
						</p>
					</div>
					<div class="columns large-4">

						<div class="why-us-image" style="width:100% !important">
								<div class="left-image" style="background-image: url(images/nosotros/01.png); border-radius: 50%; max-width: 400px; max-height: 400px;"></div>
								<img src="images/nosotros/02.png" alt="" style="border-radius: 50%; max-width: 400px; max-height: 400px;">
								<div class="right-image" style="background-image: url(images/nosotros/03.png); border-radius: 50%; max-width: 400px; max-height: 400px;"></div>
							</div>

					</div>
				</div>
			</section>

			<section class="members l-section-padding" id="team-members">
				<div class="row" style="max-width:90%">
					<div class="column large-12">
						<div class="for-border-partent">
							<div class="row">
								<div class="column large-4 medium-4 small-12">
									<div class="about-team">
										
										<div class="team-member-info">
											<img src="images/comillas.png" style="width:60px;margin-top:30px;margin-bottom:30px;">
											<h3 class="team-name" style="font-size:24px; color:#130a56; margin-bottom:30px">Alexa Garza, CA</h3>
											<p class="team-post" style="font-size:16px; line-height: 24px; color:#130a56; margin-bottom:30px">“Excelentes productos, lo que más me gusta es la puntualidad en la entrega y lo bonito de los empaques."</p>
										</div>
									</div>
								</div>
								<div class="column large-4 medium-4 small-12">
									<div class="about-team">
										<div class="team-member-info" >
											<img src="images/comillas.png" style="width:60px;margin-top:30px;margin-bottom:30px;">
											<h3 class="team-name" style="font-size:24px; color:#130a56; margin-bottom:30px">Ana Lucía, CDMX</h3>
											<p class="team-post" style="font-size:16px; line-height: 24px; color:#130a56; margin-bottom:30px">"Amo lo natural y éste sitio ha sido mi mejor aliado para encontrar los productos que más necesito."</p>
										</div>
									</div>
								</div>
								<div class="column large-4 medium-4 small-12">
									<div class="about-team">
										<div class="team-member-info" >
											<img src="images/comillas.png" style="width:60px;margin-top:30px;margin-bottom:30px;">
											<h3 class="team-name" style="font-size:24px; color:#130a56; margin-bottom:30px">Arturo Cervantes, CDMX</h3>
											<p class="team-post" style="font-size:16px; line-height: 24px; color:#130a56; margin-bottom:30px">“Una grata experiencia recibir mis productos de manera personalizada, cuidan hasta los más pequeños detalles.”</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		</section>
		<footer>
			<section class="get-in-touch l-section-padding bg-img" id="contacto">
				<div class="title-block">
					<div class="row">
						<div class="columns large-12">
							<br>
							<h2 class="l-section-title">
								<span class="title-text" style="font-size: 24px;font-weight: bold; letter-spacing: 0.25em; color: #130a56;">
									contacto
								</span>
							</h2>
						</div>
					</div>
				</div>
				
				<div class="fields-view">
					<form action="sendmail.php" method="post">
						<div class="row">
							<div class="columns large-6 medium-6">
								<div class="align-center-small">
									<div class="centered-block">
										<label for="name" class="contact-label" style="color:white">Nombre <span style="color:#D54212">*</span></label>
										<input type="text" id="name" class="contact-field required" name="name_field" style="border-radius: 30px;">
									</div>
									<div class="centered-block">
										<label for="name" class="contact-label" style="color:white">Apellidos <span style="color:#D54212">*</span></label>
										<input type="text" id="name" class="contact-field required" name="name_field" style="border-radius: 30px;">
									</div>
									<div class="centered-block">
										<label for="mail" class="contact-label" style="color:white">E-mail <span style="color:#D54212">*</span></label>
										<input type="text" id="mail" class="contact-field required" name="mail_field" style="border-radius: 30px;">
									</div>
									<div class="centered-block">
										<label for="subject" class="contact-label" style="color:white">Título <span style="color:#D54212">*</span></label>
										<input type="text" id="subject" class="contact-field required" name="subject_field" style="border-radius: 30px;">
									</div>
								</div>
							</div>
							<div class="columns large-6 medium-6">
								<div class="align-center-small">
									<div class="centered-block">
										<label for="message" class="contact-label" style="color:white">Mensaje <span style="color:#D54212">*</span></label>
										<textarea id="message" class="contact-field textarea-contact required" name="message_field" style="border-radius: 30px;"></textarea>

										<span class="checkout">
											<span>Enviar</span>
											<i class="fa fa-envelope-o"></i>
										</span>
									</div>
								</div>
							</div>
						</div>
					</form>

					<div class="socials-list" style="display:none">
						<ul class="social-icons">
							<li>
								<a href="#"><i class="fa fa-instagram" style="color:white;"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter" style="color:white;"></i></a> 
							</li>
							<li>
								<a href="#"><i class="fa fa-facebook" style="color:white;"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-dribbble" style="color:white;"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-tumblr" style="color:white;"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<div class="footer-wrapper l-section-padding">

				<div class="row">
					<div class="columns large-12">
						<div class="footer-container">

							<div class="footer-item">
								<address>
									<p class="address-item" align="center" style="padding-bottom: 10px;">
										<span class="heightlight"><font size="+1">Artezannal</font></span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight"><a href="#quienes-somos" style="text-decoration: none;color: white;">Quiénes somos</a></span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight"><a href="#productos" style="text-decoration: none;color: white;">Productos</a></span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight"><a href="#contacto" style="text-decoration: none;color: white;">Contacto</a></span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight">Términos y Condiciones de uso</span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight">Políticas de envío y devolución</span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight"><a href="legal.php" style="text-decoration:none; color: white;">Aviso de privacidad</a></span>
									</p>
								</address>
							</div>

							<div class="footer-item">
								<address>
									<p class="address-item" align="center" style="padding-bottom: 10px;">
										<span class="heightlight"><font size="+1">Socios comerciales</font></span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight">La Gourmetina</span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight">Biofactory</span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight">Lo natural</span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight">Cerámikka</span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight">In vitromosaicos</span>
									</p>
								</address>
							</div>

							<div class="footer-item">
								<address>
									<p class="address-item" align="center" style="padding-bottom: 10px;">
										<span class="heightlight"><font size="+1">¿Quiéres recibir noticias?</font></span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight">Unete a nuestro newsletter</span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight"><input type="text" id="name" class="contact-field required" name="name_field" placeholder="E-mail" style="border-radius: 30px;"></span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight"><input type="checkbox" name="" value="">&nbsp;Quiero ser miembro de su comunidad</span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight"><div class="checkit-btn-block"><span class="checkit-btn l-dis-ib button" style="background-color:#263770;border-radius: 30px;">Suscribirme</span></div></span>
									</p>
								</address>
							</div>

						</div>
					</div>
				</div>

				<div class="row">
					<div class="columns large-12">
						<div class="footer-container">

							<div class="footer-item">
								<p class="address-item" align="center" style="padding-bottom: 10px;">
									<img src="images/logoFooter.png" style="height: 65px; width: auto;">
								</p>
							</div>
					
							<div class="footer-item">
								<p class="address-item" align="center">
									<span class="heightlight">Todos los Derechos Reservados Artezannal 2025.</span>
								</p>
							</div>

							<div class="footer-item">
								<p class="address-item" align="center">
									<img src="assets/images/icons/facebook_icon.png" style="width:26px;height:26px">
									<img src="assets/images/icons/pinterest.png" style="width:26px;height:26px">
									<img src="assets/images/icons/instagram.png" style="width:26px;height:26px">
								</p>
							</div>

						</div>
					</div>
				</div>
				
			</div>
		</footer>
	</div>
	<div class="modals">
		<div class="map-view js-map-container">
			<span class="button form-view-btn js-form-view">back to site</span>
			<div id="map-block">
						
			</div>
		</div>

		<div class="codal-container">

			<div class="success-block popup-elem">
				<p class="thank-popup"><span>Thank you!</span><br/> We will contact you soon.</p>
				<span class="close-popup"></span>
			</div>

			<div class="error-block popup-elem">
				<p class="thank-popup"><span>Please, </span><br/>complete the form.</p>
				<span class="close-popup"></span>
			</div>
		</div>


		<div class="products-modals">
			<div class="products-category-list">
				<div class="category-container">
					<div class="category-block category-list">
						<div class="row">
							<div class="columns large-12 medium-12">
								<dl class="select">
									<dt></dt>
								    <dd>
								        <div class="options-list">
								        	<div class="close-btn"></div>
								        	<div class="options-wrapper">
								        		<div class="options-container js-category-list">
								        			
								        		</div>
								        	</div>
								        </div>
								        <div class="loader">
								          	<div class="loader-container">
								          		<svg id="Layer_1" x="0px" y="0px"
								          			 width="600px" height="690px" viewBox="0 0 600 690" enable-background="new 0 0 600 690" xml:space="preserve">
								          		<polygon fill="#f1f1f1" class="polygon" stroke="#A7A9AC" stroke-width="8" stroke-miterlimit="10" points="54.558,557.559 300,132.441 
								          			545.441,557.559 "/>
								          		<polygon fill="#8856A3"  class="inner" points="96.037,535.115 300,168.885 503.963,535.115 "/>
								          		</svg>
								          	</div>
								        </div>
								    </dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="products-form">
				<div class="form-container">
					<div class="main-form-block">
						<div class="row">
							<div class="columns large-12">
								<div class="form-block-header custom-reveal">
									<div class="form-close-btn"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="columns large-7 medium-7">
								<div class="order-list-block custom-reveal">
									<div class="order-list-container js-order-container">
									</div>
									<div class="order-total-block">
										<p class="total l-dis-ib">Total:</p>
										<p class="total-price l-dis-ib js-total-price">
											<span class="currency"></span>
											<span class="value">0.00</span>
										</p>
									</div>
								</div>
							</div>
							<div class="columns large-5 medium-5">
								<div class="form-fields products-form-block">
									<form action="sendmail.php" method="POST">
										<input type="text" name="name_field" placeholder="Name" id="name_field" class="fillable-field required custom-reveal">
										
										<span class="mail-field l-pos-r">
											<input type="text" placeholder="E-mail" name="mail_field" id="mail_field" class="fillable-field required custom-reveal">
										</span>

										<input type="text" placeholder="Phone number" name="phone_field" id="phone_field" class="fillable-field required custom-reveal">
										

										<input type="text" name="prCode_field" id="prCode_field" class="fillable-field l-hidden required custom-reveal products-code-list">


										<input type="submit" value="Send" class="button submit-btn checkout custom-reveal preorder-btn">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="product-details-modal">
		</div>
	</div>

	<a href="https://wa.me/5211234567890?text=Me%20gustaría%20más%20información%20de%20sus%20productos" class="whatsapp" target="_blank"><img src="images/chat.png"></i></a>

	<span class="carrito">
		<?php
			if(isset($_SESSION['tipo'])){
				if($_SESSION['tipo'] == "Administrador"){
					echo '<img src="images/user_admin.png" style="width:60%;cursor:pointer" data-toggle="modal" data-target="#accessModal">';
				}elseif($_SESSION['tipo'] == "Usuario"){
					echo '<img src="images/user_user.png" style="width:60%;cursor:pointer" data-toggle="modal" data-target="#accessModal">';
				}
			}else{
				echo '<img src="images/user_block.png" style="width:60%;cursor:pointer" data-toggle="modal" data-target="#accessModal">';
			}
		?>
		<br><br>
		<img src="images/carrito-icono.png" style="cursor:pointer" data-toggle="modal" data-target="#myModal2" onclick="listarProductosCarrito()">
	</span>

	<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<center>
						<h4 class="modal-title" id="myModalLabel2">Añadido al carrito</h4>
					</center>
				</div>

				<div class="modal-body" id="divCarrito">


				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div>

	<div class="modal right fade" id="accessModal" tabindex="-1" role="dialog" aria-labelledby="accessModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content" style="background-image: url(images/back_bright.png);
  background-size: cover;
  background-position: 50% 50%;">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<center>
						<?php
							if(isset($_SESSION['tipo'])){
								if($_SESSION['tipo'] == "Administrador"){
						?>
									<h4 class="modal-title" id="myModalLabel2">Hola <?php echo $_SESSION['nombre']; ?></h4>
						<?php
								}
								if($_SESSION['tipo'] == "Usuario"){
						?>
								<h4 class="modal-title" id="myModalLabel2">Hola <?php echo $_SESSION['nombre']; ?></h4>
						<?php
								}
							}else{
						?>
								<h4 class="modal-title" id="myModalLabel2">Inicio de sesión</h4>
						<?php
							}
						?>
					</center>
				</div>

				<div class="modal-body">
					<?php
							if(isset($_SESSION['tipo'])){
								if($_SESSION['tipo'] == "Administrador"){
					?>

									<center>
										<div class="checkit-btn-block" style="border-radius: 30px;"><span class="checkit-btn l-dis-ib button" style="background-color:#263770; border-radius: 30px;" onclick="cerrarSesion()">Cerrar sesión</span></div>
									</center>

					<?php
								}
								if($_SESSION['tipo'] == "Usuario"){
					?>
									<center>
										<div class="checkit-btn-block" style="border-radius: 30px;"><span class="checkit-btn l-dis-ib button" style="background-color:#263770; border-radius: 30px; width: 60%;" onclick="misDatos()">Mis datos personales</span></div>
									</center>
									<center>
										<div class="checkit-btn-block" style="border-radius: 30px;"><span class="checkit-btn l-dis-ib button" style="background-color:#263770; border-radius: 30px; width: 60%;" onclick="misDirecciones()">Mis direcciones</span></div>
									</center>
									<center>
										<div class="checkit-btn-block" style="border-radius: 30px;"><span class="checkit-btn l-dis-ib button" style="background-color:#263770; border-radius: 30px; width: 60%;" onclick="cerrarSesion()">Cerrar sesión</span></div>
									</center>
					<?php
								}
							}else{
					?>
							<div id="controlesAcceso">
								<input type="text" id="usuario" class="contact-field required" name="usuario" placeholder="E-mail" style="border-radius: 30px;">
								<br>
								<input type="password" id="password" class="contact-field required" name="password" placeholder="Contraseña" style="border-radius: 30px;">
								<br>
								<center>
									<div class="checkit-btn-block" style="border-radius: 30px;"><span class="checkit-btn l-dis-ib button" style="background-color:#263770; border-radius: 30px;" onclick="accesar()">Accesar</span></div>
									<br>
									<span style="font-size:18px;color:#130a56;">
										<a href="javascript:void(0)" onclick="mostrarCrearCuenta()">
											Si aún no se ha registrado, clic aquí para crear una cuenta
										</a>
									</span>
								</center>
							</div>
							<div id="controlesAltaUsuario" style="display:none">
								<h4 class="modal-title" id="myModalLabel2">Por favor ingrese la siguiente información para registrarse</h4>
								<br><br>
								<div class="centered-block">
									<input type="text" id="nombre_alta" class="contact-field required" name="nombre_alta" placeholder="Ingrese su nombre completo" style="border-radius: 30px;">
								</div>
								<div class="centered-block">
									<input type="email" id="correo_alta" class="contact-field required" name="correo_alta" placeholder="Ingrese su correo electrónico" style="border-radius: 30px;">
								</div>
								<div class="centered-block">
									<input type="password" id="contrasenia_alta" class="contact-field required" name="contrasenia_alta" placeholder="Ingrese su contraseña" style="border-radius: 30px;">
								</div>
								<div class="centered-block">
									<input type="password" id="verificar_contrasenia_alta" class="contact-field required" name="verificar_contrasenia_alta" placeholder="Verificar contraseña" style="border-radius: 30px;">
								</div>
								<div class="centered-block">
									<input type="text" id="telefono_alta" class="contact-field required" name="telefono_alta" placeholder="Ingrese su número telefónico" style="border-radius: 30px;">
								</div>
								<div class="checkit-btn-block">
									<input type="submit" class="checkit-btn l-dis-ib button" style="width:100%; border-radius: 30px;background-color: #263770;" value="Crear cuenta" onclick="crearCuenta()" id="btnCrearCuenta">
								</div>
							</div>
							<div id="divTablaCrearCuenta" style="display:none">
								<center>
									<span style="font-size:18px;color:#130a56;">
										Se envío un mensaje a la cuenta de correo registrada.<br><br>
										Es necesario confirmar el mensaje para continuar con el proceso de registro<br><br>
										<a href="index.php">Clic para seguir navegando</a>
									</span>
								</center>
							</div>
					<?php
						}
					?>
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div>

	<div class="modal fade" id="modalVerificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="modalLabelVerificar">Aviso</h4>
				</div>

				<div class="modal-body">
					<center>
						<span class="title-text" style="color:#130a56;font-size:24px">No podemos aceptar pedidos en línea en este momento.</span>
						<br><br>
						<span class="title-text" style="color:#130a56;font-size:14px">Por favor póngase en contacto con nosotros para completar su compra.</span>
					</center>
					<br>
					<div class="checkit-btn-block">
					  <span class="checkit-btn l-dis-ib button" style="width:100%; border-width: 1px;background-color:#130a56;color: #fff; border-radius: 30px;">Contactar</span>
					</div>
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div>

	<div class="modal fade" id="modalVerificarCuenta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="modalLabelVerificar">Aviso</h4>
				</div>

				<div class="modal-body">
					<span class="title-text" style="color:red;font-size:14px;font-weight:bold;" id="revisarLabel">Es necesario revisar lo siguiente:</span>
					<br><br>
					<span class="title-text" style="color:red;font-size:14px" id="spanValidacionCuenta"></span>
					<br><br>
					<div class="checkit-btn-block">
					  <span class="checkit-btn l-dis-ib button" style="width:100%; border-width: 1px;background-color:#130a56;color: #fff; border-radius: 30px" onclick="cerrarModal('modalVerificarCuenta');activarBoton('btnCrearCuenta')">Aceptar</span>
					</div>
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div>


	<div class="modal fade" id="misDatosModal" tabindex="-1" role="dialog" aria-labelledby="accessModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content" style="background-image: url(images/back_bright.png); background-size: cover; background-position: 50% 50%;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<center>
						<h4 class="modal-title" id="myModalLabel2">Hola <?php echo $_SESSION['nombre']; ?></h4>
					</center>
				</div>

				<div class="modal-body">
							<div id="controlesDatosUsuario" style="display:block">
								<div class="centered-block">
									<input type="text" id="nombre_edit" class="contact-field required" name="nombre_edit" placeholder="Ingrese su nombre completo" style="border-radius: 30px;">
								</div>
								<div class="centered-block">
									<input type="email" id="correo_edit" class="contact-field required" name="correo_edit" placeholder="Ingrese su correo electrónico" style="border-radius: 30px;" disabled>
								</div>
								<div class="centered-block">
									<input type="password" id="contrasenia_edit" class="contact-field required" name="contrasenia_edit" placeholder="Ingrese nueva contraseña" style="border-radius: 30px;">
								</div>
								<div class="centered-block">
									<input type="password" id="verificar_contrasenia_edit" class="contact-field required" name="verificar_contrasenia_edit" placeholder="Verificar nueva contraseña" style="border-radius: 30px;">
								</div>
								<div class="centered-block">
									<input type="text" id="telefono_edit" class="contact-field required" name="telefono_edit" placeholder="Ingrese su número telefónico" style="border-radius: 30px;">
								</div>
								<div class="centered-block">
									<select id="estatus_edit" class="contact-field required" name="estatus_edit" style="border-radius: 30px;">
										<option value="">::Seleccione::</option>
										<option value="Verificado">Activo</option>
										<option value="Inactivo">Inactivo</option>
									</select>
								</div>
								<div class="checkit-btn-block">
									<input type="submit" class="checkit-btn l-dis-ib button" style="width:100%; border-radius: 30px;background-color: #263770;" value="Actualizar cuenta" onclick="editarCuenta()" id="btnEditarCuenta">
								</div>
							</div>
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div>

	<div class="modal fade" id="misDireccionesModal" tabindex="-1" role="dialog" aria-labelledby="misDireccionesModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content" style="background-image: url(images/back_bright.png); background-size: cover; background-position: 50% 50%;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<center>
						<h4 class="modal-title" id="myModalLabel2">Hola <?php echo $_SESSION['nombre']; ?></h4>
					</center>
				</div>

				<div class="modal-body">
					<div id="direccionListaUsuario" style="display:block">
							
					</div>
					<div id="direccionAltaUsuario" style="display:block">
							<div class="centered-block">
								<input type="text" id="calle_numero" name="calle_numero" class="contact-field required" placeholder="Ingrese calle y número" style="border-radius: 30px;">
							</div>
							<div class="centered-block">
								<input type="text" id="colonia" name="colonia" class="contact-field required" placeholder="Ingrese colonia" style="border-radius: 30px;">
							</div>
							<div class="centered-block">
								<input type="text" id="municipio" name="municipio" class="contact-field required" placeholder="Ingrese alcaldia o municipio" style="border-radius: 30px;">
							</div>
							<div class="centered-block">
								<input type="text" id="estado" name="estado" class="contact-field required" placeholder="Ingrese ciudad o estado" style="border-radius: 30px;">
							</div>
							<div class="centered-block">
								<input type="text" id="codigo_postal" name="codigo_postal" class="contact-field required" placeholder="Ingrese CP" style="border-radius: 30px;">
							</div>
							<div class="checkit-btn-block">
								<input type="button" class="checkit-btn l-dis-ib button" style="width:100%; border-radius: 30px;background-color: #263770;" value="Agregar dirección" onclick="altaDirección()" id="btnAltaDireccion">
							</div>
					</div>
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div>

	<script data-main="js/script.js" src="js/lib/require.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

	<script type="text/javascript">
		new Swiper('.card-wrapper', {
    loop: true,
    spaceBetween: 30,

    // Pagination bullets
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }
});

		function agregarCarrito(producto_id){

			if(producto_id != ""){

				$.ajax({
                type:"POST",
                url: "scripts/ws.php",
                data:{
                    acc:'agregarProductoCarrito',
                    producto_id:producto_id,
                    session_id:'<?php echo $sessionID; ?>'
                },
                success: function(datos) {
                }
         });

			}

			$.ajax({
        type:"POST",
                url: "scripts/ws.php",
                data:{
                    acc:'listarProductosCarrito',
                    session_id:'<?php echo $sessionID; ?>'
                },
                success: function(datos) {
                	document.getElementById('divCarrito').innerHTML = datos;
                }
      });

		}

		function actualizarProductos(cantidad, producto_id){

			$.ajax({
        type:"POST",
        url: "scripts/ws.php",
                data:{
                    acc:'actualizarProductoCarrito',
                    session_id:'<?php echo $sessionID; ?>',
                    cantidad:cantidad,
                    producto_id:producto_id
                },
                success: function(datos) {
                	reCalcularTotal()
                }
      });

		}

		function reCalcularTotal(){

			$.ajax({
        type:"POST",
        url: "scripts/ws.php",
        data:{
          acc:'recalcularTotalCarrito',
          session_id:'<?php echo $sessionID; ?>'
        },
        success: function(datos) {

        	document.getElementById('carritoSubtotal').innerHTML = "$"+datos;

        }
      });

		}

		function eliminarProductoCarrito(producto_id){

			if(producto_id != ""){

				$.ajax({
	        type:"POST",
	        url: "scripts/ws.php",
	        data:{
	          acc:'eliminarProductoCarrito',
	          session_id:'<?php echo $sessionID; ?>',
	          producto_id:producto_id
	        },
	        success: function(datos) {


	        	$.ajax({
			        type:"POST",
			        url: "scripts/ws.php",
			                data:{
			                    acc:'listarProductosCarrito',
			                    session_id:'<?php echo $sessionID; ?>'
			                },
			        success: function(datos) {
			          document.getElementById('divCarrito').innerHTML = datos;
			        }
			      });


	        }
	      });

			}

		}

		function listarProductosCarrito(){

			$.ajax({
			        type:"POST",
			        url: "scripts/ws.php",
			                data:{
			                    acc:'listarProductosCarrito',
			                    session_id:'<?php echo $sessionID; ?>'
			                },
			        success: function(datos) {
			          document.getElementById('divCarrito').innerHTML = datos;
			        }
			      });

		}

		function verCarrito(){

			window.location = "shoppingCart.php";

		}

		function buscarForm(){

			document.formbuscar.submit();

		}

		function cerrarSesion(){

			$.ajax({
				type:"POST",
			  url: "scripts/ws.php",
			  data:{
			    acc:'cerrarSesion',
			  },
			  success: function(datos) {
			    if(datos == "OK"){
			    	self.location = "index.php";
			    }
			  }
			 });

		}

		$(document).on("click", '[data-toggle="lightbox"]', function(event) {
		  event.preventDefault();
		  $(this).ekkoLightbox();
		});

		function accesar(){
			var usuario = document.getElementById('usuario').value;
			var contrasenia = document.getElementById('password').value;
			if(usuario != "" && contrasenia != ""){

				$.ajax({
					type:"POST",
				  url: "scripts/ws.php",
				  data:{
				    acc:'validarAcceso',
				    usuario: usuario,
				    contrasenia: contrasenia
				  },
				  success: function(datos) {
				    if(datos == "OK"){
				    	self.location = "index.php";
				    }
				  }
			 	});

			}
		}

		function mostrarCrearCuenta(){

			document.getElementById('controlesAcceso').style.display = "none";
			document.getElementById('controlesAltaUsuario').style.display = "block";

		}

		function crearCuenta(){

			document.getElementById('btnCrearCuenta').disabled = true;

			var falta = "";

			var nombre = document.getElementById('nombre_alta').value;
			var correo = document.getElementById('correo_alta').value;
			var contrasenia = document.getElementById('contrasenia_alta').value;
			var verificar_contrasenia = document.getElementById('verificar_contrasenia_alta').value;
			var telefono = document.getElementById('telefono_alta').value;

			if(nombre == ""){
				falta = falta + "Ingresar nombre completo<br>";
			}
			if(correo == ""){
				falta = falta + "Ingresar correo electrónico<br>";
			}
			if(contrasenia.length < 8){
				falta = falta + "La contraseña debe contener minimo 8 caracteres<br>";
			}else{
				if(contrasenia != verificar_contrasenia){
					falta = falta + "La verificación de la contraseña no es correcta<br>";
				}
			}
			if(telefono == ""){
				falta = falta + "Ingresar teléfono<br>";
			}

			if(falta != ""){
				$('#modalVerificarCuenta').modal('show');
				document.getElementById('spanValidacionCuenta').innerHTML = falta;
			}else{

				$.ajax({
			    type:"POST",
			    url: "scripts/ws.php",
			    data:{
			      acc:'altaCuenta',
			      nombre:nombre,
			      correo:correo,
			      contrasenia:contrasenia,
			      telefono:telefono
			    },
			    success: function(datos){

			    	if(datos == "si"){
			    		document.getElementById('controlesAcceso').style.display = "none";
			    		document.getElementById('controlesAltaUsuario').style.display = "none";
			    		document.getElementById('divTablaCrearCuenta').style.display = 'block';
			    	}

			    }
			  });

			}

		}

		function cerrarModal(modal,boton){
			$('#'+modal).modal('hide');
		}

		function activarBoton(boton){
			document.getElementById(""+boton).disabled = false;
		}

		<?php 
			if(isset($_GET['u'])){
		?>
				$('#accessModal').modal('show');
				document.getElementById('controlesAcceso').style.display = "none";
			  document.getElementById('controlesAltaUsuario').style.display = "none";
			  document.getElementById('divTablaCrearCuenta').style.display = 'block';

			  var usuario = "<?php echo $_GET['u']; ?>";
			  if(usuario != ""){

			  	$.ajax({
				    type:"POST",
				    url: "scripts/ws.php",
				    data:{
				      acc:'validarCuenta',
				      usuario:usuario,
				    },
				    success: function(datos){

				    	document.getElementById('divTablaCrearCuenta').innerHTML = datos;

				    }
				  });

			  }

		<?php
			}
		?>

		function iniciarSesion(){

			$('#accessModal').modal('show');
			document.getElementById('controlesAcceso').style.display = "block";
			document.getElementById('controlesAltaUsuario').style.display = "none";
			document.getElementById('divTablaCrearCuenta').style.display = 'none';

		}

		function misDatos(){

			$('#accessModal').modal('hide');
			$('#misDatosModal').modal('show');

			<?php
				if(isset($_SESSION['username'])){
			?>
					var usuario = "<?php echo $_SESSION['username']?>";
			<?php 
				}else{
			?>
					var usuario = "";
			<?php
				}
			?>

			if(usuario != ""){

				$.ajax({
				    type:"POST",
				    url: "scripts/ws.php",
				    data:{
				      acc:'misDatos',
				      usuario:usuario,
				    },
				    success: function(datos){

				    	var data = JSON.parse(datos);
				    	document.getElementById('nombre_edit').value = data.nombre;
				    	document.getElementById('correo_edit').value = data.correo;
				    	document.getElementById('telefono_edit').value = data.telefono;

				    	if(data.estatus == "Verificado"){
				    		document.getElementById("estatus_edit").selectedIndex = 1;
				    	}
				    	if(data.estatus == "Inactivo"){
				    		document.getElementById("estatus_edit").selectedIndex = 2;
				    	}

				    }
				 });

			}

		}

		function misDirecciones(){
			$('#accessModal').modal('hide');
			$('#misDireccionesModal').modal('show');

			<?php
				if(isset($_SESSION['username'])){
			?>
					var usuario = "<?php echo $_SESSION['username']; ?>";
					var usuario_id = "<?php echo $_SESSION['usuario_id']; ?>";
			<?php 
				}else{
			?>
					var usuario = "";
					var usuario_id = "";
			<?php
				}
			?>

			if(usuario_id != ""){

				$.ajax({
			    type:"POST",
			    url: "scripts/ws.php",
			    data:{
			      acc:'listaDireccion',
			      usuario:usuario,
			      usuario_id:usuario_id
			    },
			    success: function(datos){
			    	document.getElementById('direccionListaUsuario').innerHTML = datos;
			    	document.getElementById('direccionAltaUsuario').style.display = "none";
			    }
			  });

			}

		}

		function editarCuenta(){

			document.getElementById('btnEditarCuenta').disabled = true;

			var falta = "";

			var nombre = document.getElementById('nombre_edit').value;
			var correo = document.getElementById('correo_edit').value;
			var contrasenia = document.getElementById('contrasenia_edit').value;
			var verificar_contrasenia = document.getElementById('verificar_contrasenia_edit').value;
			var telefono = document.getElementById('telefono_edit').value;
			var estatus = document.getElementById("estatus_edit").value;

			if(nombre == ""){
				falta = falta + "Ingresar nombre completo<br>";
			}
			if(correo == ""){
				falta = falta + "Ingresar correo electrónico<br>";
			}

			if(contrasenia != ""){
				if(contrasenia.length < 8){
					falta = falta + "La contraseña debe contener minimo 8 caracteres<br>";
				}else{
					if(contrasenia != verificar_contrasenia){
						falta = falta + "La verificación de la contraseña no es correcta<br>";
					}
				}
			}
			if(telefono == ""){
				document.getElementById('revisarLabel').innerHTML = "Es necesario revisar lo siguiente:";
				falta = falta + "Ingresar teléfono<br>";
			}

			if(falta != ""){
				$('#misDatosModal').modal('hide');
				$('#modalVerificarCuenta').modal('show');
				document.getElementById('spanValidacionCuenta').innerHTML = falta;
				document.getElementById('btnEditarCuenta').disabled = false;
			}else{

				$.ajax({
			    type:"POST",
			    url: "scripts/ws.php",
			    data:{
			      acc:'editarCuenta',
			      nombre:nombre,
			      correo:correo,
			      contrasenia:contrasenia,
			      telefono:telefono,
			      estatus:estatus
			    },
			    success: function(datos){
			    	if(datos == "OK"){
			    		$('#misDatosModal').modal('hide');
							$('#modalVerificarCuenta').modal('show');
							document.getElementById('revisarLabel').innerHTML = "Datos actualizados!!";
							document.getElementById('btnEditarCuenta').disabled = false;
			    	}
			    }
			  });

			}

		}

		function altaDirección(){

			<?php
				if(isset($_SESSION['username'])){
			?>
					var usuario = "<?php echo $_SESSION['username']; ?>";
					var usuario_id = "<?php echo $_SESSION['usuario_id']; ?>";
			<?php 
				}else{
			?>
					var usuario = "";
					var usuario_id = "";
			<?php
				}
			?>

			var calle_numero = document.getElementById('calle_numero').value;
			var colonia = document.getElementById('colonia').value;
			var municipio = document.getElementById('municipio').value;
			var estado = document.getElementById('estado').value;
			var codigo_postal = document.getElementById("codigo_postal").value;

			if(usuario_id != ""){

				$.ajax({
			    type:"POST",
			    url: "scripts/ws.php",
			    data:{
			      acc:'altaDireccion',
			      usuario:usuario,
			      usuario_id:usuario_id,
			      calle_numero:calle_numero,
			      colonia:colonia,
			      municipio:municipio,
			      estado:estado,
			      codigo_postal:codigo_postal
			    },
			    success: function(datos){
			    	if(datos == "OK"){
			    		$('#misDireccionesModal').modal('hide');
							$('#modalVerificarCuenta').modal('show');
							document.getElementById('revisarLabel').innerHTML = "Mis direcciones actualizadas!!";
							document.getElementById('btnEditarCuenta').disabled = false;
			    	}
			    }
			  });

			}

		}

		function nuevaDireccion(){
			document.getElementById('direccionListaUsuario').style.display = "none";
			document.getElementById('direccionAltaUsuario').style.display = "block";
		}

	</script>

</body>
</html>