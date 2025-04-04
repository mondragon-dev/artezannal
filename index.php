<!doctype html>
<html>
<head>
	<title>Artezannal - eCommerce Landing Page</title>
	<meta name="description" content=""/>
	<meta name="viewport" content="width=device-width, user-scalable=no">

	<meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display+SC:400italic,700italic&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700&amp;subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
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
  			width: 150%;
  			max-width: 150%;
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
			right: 50px;
			bottom: 0px;
			width: 20%;
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

	</style>
</head>
<body data-currency="$">
	<span class="theme-bg-c"></span>
	<div class="preloader-block">
		<div class="preloader-container">
			<img src="images/logoIndex.png" alt="" class="logo-image">
		</div>
	</div>
	<div class="page-content">
		<header class="header">
			<div class="menu-wrapper">
				<div class="row">
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
				<img src="assets/images/circulo_grande.png" class="img-banner">
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

			<section class="our-products l-section-padding" id="productos" style="display:none">
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

			<section>
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
          <a href="javascript:void(0)" class="card-link" style="text-align:center;">
            <img src="images/products/01.jpg" alt="Card Image" class="card-image" style="border-radius: 50%;">
            <h2 class="card-title">Anillo de plata</h2>
            <h2 class="card-precio">$252.00</h2>
            <br>
            <div class="checkit-btn-block">
            	<span class="checkit-btn l-dis-ib button" style="border-width: 1px;background-color:#fff;color: #130a56;">Agregar al carrito</span>
            </div>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="javascript:void(0)" class="card-link" style="text-align:center;">
            <img src="images/products/02.jpg" alt="Card Image" class="card-image" style="border-radius: 50%;">
            <h2 class="card-title">Vasija de porcelana</h2>
            <h2 class="card-precio">$300.00</h2>
            <br>
            <div class="checkit-btn-block">
            	<span class="checkit-btn l-dis-ib button" style="border-width: 1px;background-color:#fff;color: #130a56;">Agregar al carrito</span>
            </div>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="javascript:void(0)" class="card-link" style="text-align:center;">
            <img src="images/products/03.jpg" alt="Card Image" class="card-image" style="border-radius: 50%;">
            <h2 class="card-title">Mezcal artesanal</h2>
            <h2 class="card-precio">$550.00</h2>
            <br>
            <div class="checkit-btn-block">
            	<span class="checkit-btn l-dis-ib button" style="border-width: 1px;background-color:#fff;color: #130a56;">Agregar al carrito</span>
            </div>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="javascript:void(0)" class="card-link" style="text-align:center;">
            <img src="images/products/04.jpg" alt="Card Image" class="card-image" style="border-radius: 50%;">
            <h2 class="card-title">Anillo de coco</h2>
            <h2 class="card-precio">$180.00</h2>
            <br>
            <div class="checkit-btn-block">
            	<span class="checkit-btn l-dis-ib button" style="border-width: 1px;background-color:#fff;color: #130a56;">Agregar al carrito</span>
            </div>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="javascript:void(0)" class="card-link" style="text-align:center;">
            <img src="images/products/05.jpg" alt="Card Image" class="card-image" style="border-radius: 50%;">
            <h2 class="card-title">Jabón de castilla</h2>
            <h2 class="card-precio">$200.00</h2>
            <br>
            <div class="checkit-btn-block">
            	<span class="checkit-btn l-dis-ib button" style="border-width: 1px;background-color:#fff;color: #130a56;">Agregar al carrito</span>
            </div>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="javascript:void(0)" class="card-link" style="text-align:center;">
            <img src="images/products/06.jpeg" alt="Card Image" class="card-image" style="border-radius: 50%;">
            <h2 class="card-title">Congante de macrame</h2>
            <h2 class="card-precio">$190.00</h2>
            <br>
            <div class="checkit-btn-block">
            	<span class="checkit-btn l-dis-ib button" style="border-width: 1px;background-color:#fff;color: #130a56;">Agregar al carrito</span>
            </div>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="javascript:void(0)" class="card-link" style="text-align:center;">
            <img src="images/products/07.jpg" alt="Card Image" class="card-image" style="border-radius: 50%;">
            <h2 class="card-title">Mochila</h2>
            <h2 class="card-precio">$320.00</h2>
            <br>
            <div class="checkit-btn-block">
            	<span class="checkit-btn l-dis-ib button" style="border-width: 1px;background-color:#fff;color: #130a56;">Agregar al carrito</span>
            </div>
          </a>
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
				<div class="row">
					<div class="columns large-6">
						<span class="title-text" style="color:#fff;font-size:24px">Quiénes somos</span>
						<p style="text-align:justify; color: #fff; font-size: 16px;line-height: 1.8em; margin-top: 20px;">
							Bienvenidos a nuestra plataforma, donde nos dedicamos a promover a las empresas que elaboran y comercializan productos artesanales mexicanos de la más calidad. Creemos en el valor de hacer las cosas a mano y en el talento de nuestros artesanos. Únete a nosotros para descubrir y apoyar lo mejor de la producción local y ¡Juntos hagámos crecer a nuestra comunidad!
						</p>
						<p style="text-align:justify; color: #fff; font-size: 16px;line-height: 1.8em; margin-top: 20px;">
							Los invitamos a conocer los productos, a confiar y creer en la calidad de lo nacional y compartir con otros el gusto por la riqueza que existe en nuesto pais.
						</p>
					</div>
					<div class="columns large-6">

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
							<h2 class="l-section-title">
								<span class="title-text">
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
										<label for="name" class="contact-label">Nombre</label>
										<input type="text" id="name" class="contact-field required" name="name_field">
									</div>
									<div class="centered-block">
										<label for="name" class="contact-label">Apellidos</label>
										<input type="text" id="name" class="contact-field required" name="name_field">
									</div>
									<div class="centered-block">
										<label for="mail" class="contact-label">E-mail</label>
										<input type="text" id="mail" class="contact-field required" name="mail_field">
									</div>
									<div class="centered-block">
										<label for="subject" class="contact-label">Título</label>
										<input type="text" id="subject" class="contact-field required" name="subject_field">
									</div>
								</div>
							</div>
							<div class="columns large-6 medium-6">
								<div class="align-center-small">
									<div class="centered-block">
										<label for="message" class="contact-label">Mensaje</label>
										<textarea id="message" class="contact-field textarea-contact required" name="message_field"></textarea>

										<span class="checkout">
											<span>Enviar</span>
											<i class="fa fa-envelope-o"></i>
										</span>
									</div>
								</div>
							</div>
						</div>
					</form>

					<div class="socials-list">
						<ul class="social-icons">
							<li>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter"></i></a> 
							</li>
							<li>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-dribbble"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-tumblr"></i></a>
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
									<p class="address-item" align="left" style="padding-bottom: 10px;">
										<span class="heightlight"><font size="+1">Artezannal</font></span>
									</p>
									<p class="address-item" align="left">
										<span class="heightlight"><a href="">Quiénes somos</a></span>
									</p>
									<p class="address-item" align="left">
										<span class="heightlight"><a href="">Productos</a></span>
									</p>
									<p class="address-item" align="left">
										<span class="heightlight"><a href="">Contacto</a></span>
									</p>
									<p class="address-item" align="left">
										<span class="heightlight"><a href="">Términos y Condiciones de uso</a></span>
									</p>
									<p class="address-item" align="left">
										<span class="heightlight"><a href="">Políticas de envío y devolución</a></span>
									</p>
								</address>
							</div>

							<div class="footer-item">
								<address>
									<p class="address-item" align="left" style="padding-bottom: 10px;">
										<span class="heightlight"><font size="+1">Socios comerciales</font></span>
									</p>
									<p class="address-item" align="left">
										<span class="heightlight">La Gourmetina</span>
									</p>
									<p class="address-item" align="left">
										<span class="heightlight">Biofactory</span>
									</p>
									<p class="address-item" align="left">
										<span class="heightlight">Lo natural</span>
									</p>
									<p class="address-item" align="left">
										<span class="heightlight">Cerámikka</span>
									</p>
									<p class="address-item" align="left">
										<span class="heightlight">In vitromosaicos</span>
									</p>
								</address>
							</div>

							<div class="footer-item">
								<address>
									<p class="address-item" align="left" style="padding-bottom: 10px;">
										<span class="heightlight"><font size="+1">¿Quiéres recibir noticias?</font></span>
									</p>
									<p class="address-item" align="left">
										<span class="heightlight">Unete a nuestro newsletter</span>
									</p>
									<p class="address-item" align="left">
										<input type="text" id="name" class="contact-field required" name="name_field" placeholder="E-mail">
									</p>
									<p class="address-item" align="left">
										<input type="checkbox" name="" value="" class="form-control">
										<span class="heightlight">&nbsp;Quiero ser miembro de su comunidad</span>
									</p>
									<p class="address-item" align="left">
										<div class="checkit-btn-block"><span class="checkit-btn l-dis-ib button">Suscribirme</span></div>
									</p>
									<p class="address-item" align="left">
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
								<p class="address-item" align="left" style="padding-bottom: 10px;">
									<img src="images/logoFooter.png" style="width: 80%;">
								</p>
							</div>
					
							<div class="footer-item">
								<p class="address-item" align="left">
									<span class="heightlight">Todos los Derechos Reservados Artezannal 2025.</span>
								</p>
							</div>

							<div class="footer-item">
								<p class="address-item" align="left">
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

	<script data-main="js/script.js" src="js/lib/require.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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
	</script>

</body>
</html>