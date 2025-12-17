<?php 

	include('config/config.php');
	include('config/db.php');

	$sessionID = session_id();

	$sql = "SELECT * FROM carrito_compras AS C 
					LEFT JOIN productos as P ON C.producto_id = P.id WHERE session_id = '".$sessionID."' ";
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

		.menu-wrapper {
  		top: 0px;
  		background-image: url(images/fondoFooter.png);
			background-size: cover;
			background-position: 50% 50%;
		}
		
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



    .wrap > h1 {
      margin: 26px auto;
    }
    #showcase {
      height: 360px;
      /*background: #16235e;
      background: -moz-linear-gradient(top, #16235e 0%, #020223 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#16235e), color-stop(100%,#020223));
      background: -webkit-linear-gradient(top, #16235e 0%, #020223 100%);
      background: -o-linear-gradient(top, #16235e 0%, #020223 100%);
      background: -ms-linear-gradient(top, #16235e 0%, #020223 100%);
      background: linear-gradient(to bottom, #16235e 0%, #020223 100%);*/
      /*-webkit-box-shadow: 0px 0px 13px 5px #DB1242;
      -moz-box-shadow: 0px 0px 13px 5px #DB1242;
      box-shadow: 0px 0px 13px 5px #DB1242;*/
      -webkit-border-radius: 8px;
      -moz-border-radius: 8px;
      border-radius: 8px;
    }
    #showcase2 {
      height: 360px;
      /*background: #16235e;
      background: -moz-linear-gradient(top, #16235e 0%, #020223 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#16235e), color-stop(100%,#020223));
      background: -webkit-linear-gradient(top, #16235e 0%, #020223 100%);
      background: -o-linear-gradient(top, #16235e 0%, #020223 100%);
      background: -ms-linear-gradient(top, #16235e 0%, #020223 100%);
      background: linear-gradient(to bottom, #16235e 0%, #020223 100%);*/
      /*-webkit-box-shadow: 0px 0px 13px 5px #DB1242;
      -moz-box-shadow: 0px 0px 13px 5px #DB1242;
      box-shadow: 0px 0px 13px 5px #DB1242;*/
      -webkit-border-radius: 8px;
      -moz-border-radius: 8px;
      border-radius: 8px;
    }
    #item-title {
      color: #F31414;
      font-size: 29px;
      letter-spacing: 0.13em;
      text-shadow: 1px 1px 6px #C72B2B;
      text-align: center;
      margin-top: 30px;
      margin-bottom: 22px;
    }
    #nav {
      text-align: center;
    }
    #nav > button {
      width: 64px;
      height: 36px;
      color: #666;
      font: bold 16px arial;
      text-align: center;
      margin: 5px;
      text-shadow: 0px 1px 0px #f5f5f5;
      background: #f6f6f6;
      border: solid 2px rgba(0, 0, 0, 0.4);
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      -webkit-box-shadow: 0 0 9px 1px rgba(0, 0, 0, 0.4);
      -moz-box-shadow: 0 0 9px 1px rgba(0, 0, 0, 0.4);
      box-shadow: 0 0 9px 1px rgba(0, 0, 0, 0.4);
      cursor: pointer;
    }
    #nav > button:active,
    #nav > button.down {
      background: #dfdfdf;
      border: solid 2px rgba(0, 0, 0, 0.6);
      box-shadow: none;
    }
    #share {
      top: -9px;
    }
    #credits {
      top: -15px;
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
	<div class="page-content" style="background-color: #182371;">
		<header class="header">
			
			<div class="menu-wrapper">
				<div class="row" style="max-width: 90%; visibility: hidden;">
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
							<a href="index.php">
								<img src="images/logoFooter.png" alt="" class="logo-image">
							</a>
						</div>
					</div>
					<div class="column large-10">
						<nav class="js-navs-list">
							<ul class="menu-page">
								<li class="menu-item" onclick="self.location='index.php'">
									<a href="javascript:void(0)"><font size="+1" style="color: white;">Inicio</font></a>
								</li>
								<li class="menu-item" onclick="self.location='index.php?s=productos'">
									<a href="javascript:void(0)"><font size="+1" style="color: white;">Productos</font></a>
								</li>
								<li class="menu-item" onclick="self.location='index.php?s=quienes-somos'">
									<a href="javascript:void(0)"><font size="+1" style="color: white;">Quiénes somos</font></a>
								</li>
								<li class="menu-item" onclick="self.location='index.php?s=contacto'">
									<a href="javascript:void(0)"><font size="+1" style="color: white;">Contacto</font></a>
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
			
			<section class="members l-section-padding" id="team-members">
				<div class="row" style="max-width:70%">
					<div class="column large-12">
						<div class="for-border-partent">
							<div class="row">
								<div class="column large-12 medium-12 small-12">
									<div class="about-team">

										<div class="team-member-info" style="text-align:center;">
											<br><br>
											<br><br>
											<br><br>
											<br><br>
											<?php
												if($_GET['r'] == "cancel"){
											?>
													<span class="title-text" style="color:#130a56;font-size:24px">¡Hola! No se pudo procesa tu pago, es necesario verificar.</span>
													<br><br>
													<video autoplay loop width="400">
								  					<source src="assets/videos/payment-cancel.mp4" type="video/mp4" />
													</video>
											<?php
												}
												if($_GET['r'] == "success"){

													if($_GET['status'] == "captured"){

														$sql_p = "SELECT * FROM pagos WHERE provider_reference_id = '".$_GET['token']."' "; 
														$res_p = mysqli_query($link,$sql_p);
														$dat_p = mysqli_fetch_array($res_p);

														if($dat_p['metodo'] == "paypal"){

											?>
															<center>
																<img src="assets/images/paypal.gif" style="width: 20%;">
															</center>
											<?php
														}
											?>
														<span class="title-text" style="color:#130a56;font-size:24px">Verificar datos para pago</span>
														<br><br>
														<span class="title-text" style="color:#130a56;font-size:20px">Método de pago: <strong><?php echo ucfirst($dat_p['metodo']); ?></strong></span>
														<br><br>
														<span class="title-text" style="color:#130a56;font-size:20px">Total: <strong>$<?php echo number_format($dat_p['total']);?></strong></span>
														<br><br>
														<div class="checkit-btn-block">
					            				<span class="checkit-btn l-dis-ib button" style="width:50%; border-width: 1px;background-color:#fff;color: #130a56; border-radius: 30px;">Validar y pagar</span>
					           				</div>

											<?php
													}else{

											?>
														<span class="title-text" style="color:#130a56;font-size:24px">¡Hola! Se ha registrado tu pago.</span>
														<br><br>
														<video autoplay loop width="400">
									  					<source src="assets/videos/payment-sucess.mp4" type="video/mp4" />
														</video>
											<?php

													}

												}
											?>
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
										<span class="heightlight"><a href="index.php?s=quienes-somos" style="text-decoration: none;color: white;"><u>Quiénes somos</u></a></span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight"><a href="index.php?s=productos" style="text-decoration: none;color: white;"><u>Productos</u></a></span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight"><a href="index.php?s=contacto" style="text-decoration: none;color: white;"><u>Contacto</u></a></span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight"><a href="legal.php?l=tc" style="text-decoration:none; color: white;"><u>Términos y Condiciones de uso</u></a></span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight"><a href="legal.php?l=ped" style="text-decoration:none; color: white;"><u>Políticas de envío y devolución</u></a></span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight"><a href="legal.php?l=ap" style="text-decoration:none; color: white;"><u>Aviso de privacidad</u></a></span>
									</p>
									<p class="address-item" align="center">
										<span class="heightlight"><a href="legal.php?l=pc" style="text-decoration:none; color: white;"><u>Política de cookies</u></a></span>
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

	<a href="https://wa.me/5211234567890?text=Me%20gustaría%20más%20información%20de%20sus%20productos" class="whatsapp" target="_blank"><img src="images/chat.png"></i></a>

	<span class="carrito" style="cursor:pointer" data-toggle="modal" data-target="#myModal2" onclick="listarProductosCarrito()"><img src="images/carrito-icono.png"></i></span>

	<script data-main="js/script.js" src="js/lib/require.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script src="js/lib/jquery.reflection.js"></script>
  <script src="js/lib/jquery.cloud9carousel.js"></script>

	<script type="text/javascript">

	</script>

</body>
</html>