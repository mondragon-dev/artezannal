<?php 

	include('config/config.php');
	include('config/db.php');

	$sessionID = session_id();

	$sql = "SELECT * FROM carrito_compras AS C LEFT JOIN productos as P ON C.producto_id = P.id WHERE session_id = '".$sessionID."' ";
	$res = mysqli_query($link,$sql);

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
  			width: 150%;
  			max-width: 150%;
		}
		.menu-item a {
  			color: #fff;
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
			/*background-image: url(images/fondoFooter.png);*/
			background-color: #182371;
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
		  top: 40px;
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

.menu-wrapper {
  top: 0px;
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
	<div class="page-content" style="background-color: #182371;">
		<header class="header">
			<div class="menu-wrapper" style="background-color: #182371;">
				<br><br>
				<div class="row">
					<div class="column large-2">
						<div class="logo-wrapper" onclick="javascript:window.location='index.php'" style="cursor:pointer">
							<img src="images/logo_artezannal_bco.png" alt="" class="logo-image">
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

			<div class="mobile-menu-wrapper">
				<div class="toggle-btn-block js-toggle-menu">
					<div class="toggle-btn"></div>
				</div>
				<div class="mobile-nav-list js-mobile-container">
				</div>
			</div>
		</header>

		<section role="main">	

			<br><br>
			<br><br>
			<br><br>
			<br><br>

			<section class="members l-section-padding" id="team-members" style="background-image: url(images/back_bright.png); background-size: cover; background-position: 50% 50%;">

				<div class="row" style="max-width:90%">
					<div class="column large-12">
						<div class="for-border-partent">
							<div class="row">
								<div class="column large-12 medium-12 small-12">

										<?php

											$sql = "SELECT * FROM productos WHERE id = '".$_GET['p']."' ";
											$res = mysqli_query($link,$sql);
											$dat = mysqli_fetch_array($res);

										?>
										<center>
											<table align="center" style="background:transparent;" width="70%">
												<tr>
													<td width="50%">
														<span style="font-size:20px; line-height: 24px; color:#130a56;"><?php echo $dat['producto']; ?></span>
													</td>
													<td>
														
													</td>
												</tr>
												<tr style="background: transparent;">
													<td>
														<img src="images/products/<?php echo $dat['imagen']; ?>" style="cursor: pointer" onclick='self.location="productDetails.php?p=<?php echo $dat['producto_id']; ?>"'>
													</td>
													<td style="vertical-align:top;">
														<span style="font-size:28px;color:#130a56;"><?php echo $dat['producto']; ?></span>
														<br>
														<span style="font-size:18px;color:#130a56;">SKU<?php echo str_pad($_GET['p'],4,0,STR_PAD_LEFT); ?></span>
														<br><br>
														<span style="font-size:18px;color:#D54212;">$<?php echo $dat['precio']; ?></span>
														<br><br>
														<span style="font-size:18px;color:#130a56;"><?php echo $dat['descripcion']; ?></span>
														<br><br>
														<span style="font-size:18px;color:#130a56;">Cantidad</span>
														<br>
														<input type="number" class="form-control" id="cantidad" min="1" max="10" value="1" style="width: 100px;">
														<br><br>
														<div class="checkit-btn-block">
								            	<span class="checkit-btn l-dis-ib button" style="width:100%; border-width: 1px;background:transparent;color: #130a56;" onclick="agregarCarritoCantidad(<?php echo $dat['id']; ?>)">Agregar al carrito</span>
								           	</div>
								           	<div class="checkit-btn-block">
								            	<span class="checkit-btn l-dis-ib button" style="width:100%; border-width: 1px;background:transparent;color: #130a56;" data-toggle="modal" data-target="#modalVerificar">Comprar</span>
								           	</div>
													</td>
												</tr>
											</table>
											<br><br>
											<table align="center" style="background:transparent;" width="80%" cellpadding="10" cellspacing="10">
												<tr>
													<td width="50%" style="text-align:justify;border-right: 1px solid #130a56;">
														<span style="font-size:20px; color:#130a56;"><strong>
															Información de Producto
														</strong></span>
														<br><br>
														<span style="font-size:14px; color:#130a56;text-align:justify;">
															Soy la información del producto. Es el lugar ideal para agregar más información sobre tu producto, como talla, material e instrucciones de cuidado y limpieza. También es un buen espacio para escribir qué hace especial a este producto y cómo tus clientes pueden beneficiarse de él. A los compradores les gusta saber qué reciben antes de comprarlo, así que proporciónales la mayor cantidad de información posible para que puedan comprar con confianza.
														</span>
													</td>
													<td width="50%" style="text-align:justify;">
														<span style="font-size:20px; color:#130a56;"><strong>
															Política de devoluciones y reembolsos
														</strong></span>
														<br><br>
														<span style="font-size:14px; color:#130a56;text-align:justify;">
															Soy una política de devoluciones y reembolsos. Es un excelente lugar para que tus clientes sepan qué hacer si no están satisfechos con su compra. Tener una política de reembolsos o cambios clara y clara es una excelente manera de generar confianza y asegurarles a tus clientes que pueden comprar con tranquilidad.
														</span>
													</td>
												</tr>
											</table>
										</center>

								</div>
								
							</div>
						</div>
					</div>
				</div>

			</section>

		</section>
		<footer>
			
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
										<span class="heightlight">Quiénes somos</span>
									</p>
									<p class="address-item" align="left">
										<span class="heightlight">Productos</span>
									</p>
									<p class="address-item" align="left">
										<span class="heightlight">Contacto</span>
									</p>
									<p class="address-item" align="left">
										<span class="heightlight">Términos y Condiciones de uso</span>
									</p>
									<p class="address-item" align="left">
										<span class="heightlight">Políticas de envío y devolución</span>
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
										<div class="checkit-btn-block"><span class="checkit-btn l-dis-ib button" style="background-color:#263770">Suscribirme</span></div>
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
									<img src="images/logoFooter.png" style="height: 65px; width: auto;">
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

	<a href="https://wa.me/5211234567890?text=Me%20gustaría%20más%20información%20de%20sus%20productos" class="whatsapp" target="_blank"><img src="images/chat.png"></i></a>

	<span class="carrito" style="cursor:pointer" data-toggle="modal" data-target="#myModal2" onclick="listarProductosCarrito()"><img src="images/carrito-icono.png"></i></span>

	<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel2">Añadido al carrito</h4>
				</div>

				<div class="modal-body" id="divCarrito">


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
					  <span class="checkit-btn l-dis-ib button" style="width:100%; border-width: 1px;background-color:#130a56;color: #fff;">Contactar</span>
					</div>
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div>

	<script data-main="js/script.js" src="js/lib/require.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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

                	listarProductosCarrito();

                }
         });

			}


		}

		function agregarCarritoCantidad(producto_id){

			var cantidad = Number(document.getElementById('cantidad').value);

			if(producto_id != ""){

				for(var c = 1; c <= cantidad; c++){

					$.ajax({
	                type:"POST",
	                url: "scripts/ws.php",
	                data:{
	                    acc:'agregarProductoCarrito',
	                    producto_id:producto_id,
	                    session_id:'<?php echo $sessionID; ?>'
	                },
	                success: function(datos) {

	                	listarProductosCarrito();

	                }
	         });

				}

				$('#myModal2').modal('show');

			}


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

        	document.getElementById('carritoSubtotal').innerHTML = datos;
        	document.getElementById('carritoTotal').innerHTML = datos;

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

	        	location.reload();

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

		function mostrarCodigoDescuento(){
			document.getElementById('divCodigoDescuento').style.display = "block";
		}

	</script>

</body>
</html>