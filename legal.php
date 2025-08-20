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
							<img src="images/logoFooter.png" alt="" class="logo-image">
						</div>
					</div>
					<div class="column large-10">
						<nav class="js-navs-list">
							<ul class="menu-page">
								<li class="menu-item">
									<a href="/"><font size="+1" style="color: white;">Inicio</font></a>
								</li>
								<li class="menu-item">
									<a href="#productos"><font size="+1" style="color: white;">Productos</font></a>
								</li>
								<li class="menu-item">
									<a href="#quienes-somos"><font size="+1" style="color: white;">Quiénes somos</font></a>
								</li>
								<li class="menu-item">
									<a href="#contacto"><font size="+1" style="color: white;">Contacto</font></a>
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
				<div class="row" style="max-width:70%">
					<div class="column large-12">
						<div class="for-border-partent">
							<div class="row">
								<div class="column large-12 medium-12 small-12">
									<div class="about-team">

										<div class="team-member-info" style="text-align:center;">
											<h3 class="team-name" style="font-size:24px; color:#130a56; margin-bottom:30px">
												Aviso de Privacidad Integral
											</h3>
											<p style="text-align:justify;">
												El presente documento constituye el "Aviso de Privacidad" el cual establece los términos bajo los que se manejará su información por parte de <span style="font-weight:bold">ARTEZANNAL</span> quien funge como titular de la página de la marca <span style="font-weight:bold">ARTEZANNAL</span>, de conformidad con lo dispuesto en los artículos 15 y 16 de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.
											</p>
											<br>
 											<p style="text-align:justify;">
 												Este aviso describe la finalidad para la cual se ha recabado su información, así como el tipo de datos que se están tratando y las opciones disponibles para limitar su uso. Además, se detalla el procedimiento para ejercer sus derechos en materia de protección de datos, en cumplimiento de los principios de Licitud, Consentimiento, Calidad, Información, Finalidad, Lealtad, Proporcionalidad y Responsabilidad que establece la citada ley.
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												<span style="font-weight:bold">ARTEZANNAL</span> reconoce y respeta su derecho a la privacidad y protección de datos personales, incluidos los datos personales sensibles, como los datos financieros o patrimoniales, los cuales están protegidos por la Ley. La responsabilidad sobre la base de datos que contiene su información recae en <span style="font-weight:bold">ARTEZANNAL</span>, cuyo domicilio es el ubicado en Tecorral número 15, Col. Club de Golf México, Tlalpan, Ciudad de México, C.P. 14620.
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												Además, se garantiza que su información se encuentra debidamente resguardada, cumpliendo con las disposiciones de seguridad administrativa, técnica y física establecidas en la Ley de la materia. Esto se realiza con el fin de protegerla de posibles daños, pérdidas, alteraciones o accesos no autorizado.
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												El titular de la información reconoce y acepta que al proporcionar sus Datos a través de este "Aviso de Privacidad", o mediante cualquier medio electrónico, como lo es el correo electrónico <a href="mailto:contacto@artezannal.com">contacto@artezannal.com</a>, otorga su consentimiento expreso para que <span style="font-weight:bold">ARTEZANNAL</span> lleve a cabo el tratamiento de sus Datos, de conformidad con lo establecido en este Aviso de Privacidad.
											</p>
											<br>
 											<p style="text-align:justify;"> 
												<span style="font-weight:bold">Datos Personales</span>
											</p>
											<br>
 											<p style="text-align:justify;">
 												Los datos personales que recabaremos serán aquellos que usted haya incluido en su perfil de usuario, y serán tratados y resguardados con base en los principios establecidos en la Ley y su Reglamento. Para cumplir con las finalidades que se mencionan en el presente Aviso, requerimos que nos proporcione los siguientes datos: nombre completo, número telefónico, correo electrónico, ciudad y estado de residencia.
 											</p>
 											<br>
 											<p style="text-align:justify;">
												<span style="font-weight:bold">Datos Sensibles</span>
											</p>
											<br>
 											<p style="text-align:justify;">
 												El Titular de la Información reconoce y acepta que, debido a su relación con <span style="font-weight:bold">ARTEZANNAL</span> no ha proporcionado, ni tendrá que proporcionar “datos personales sensibles”, es decir, aquellos datos personales íntimos o cuya realización debida o indebida pueda dar origen a discriminación o conlleve un riesgo grave para éste. En el supuesto de que el Titular de la Información proporcione datos del tipo de los llamados sensibles, deberá estar de acuerdo en proporcionarlos previamente y dejará a <span style="font-weight:bold">ARTEZANNAL</span> libre de cualquier queja o reclamación respectiva.
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												<span style="font-weight:bold">Medios para ejercer los Derechos de Acceso, Rectificación, Cancelación u Oposición.</span>
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												Usted tiene derecho constitucional de Acceder y conocer los datos personales que poseemos y a los detalles del tratamiento y uso de los mismos, así como a Rectificarlos y corregirlos en caso de ser inexactos o incompletos; Cancelarlos y eliminarlos cuando considere que no se requieren para alguna de las finalidades señalados en el presente aviso de privacidad, o que estén siendo utilizados para finalidades no autorizadas por usted o haya finalizado la relación jurídica o de servicio, o bien, Oponerse al tratamiento de los mismos para fines específicos, enviando una solicitud a <span style="font-weight:bold">ARTEZANNAL</span>, a través del sitio web <a href="https://artezannal.com">www.artezannal.com</a> o al correo electrónico <a href="mailto:contacto@artezannal.com">contacto@artezannal.com</a> indicando por lo menos su nombre y domicilio completo o cualquier otro dato o documento que permita su identificación, así como el objeto de su solicitud y/o trámite a efectuar. Lo anterior se deberá realizar en base a la Ley y su Reglamento.
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												<span style="font-weight:bold">Finalidad</span>
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												Sus datos personales e historial como cliente serán utilizados por <span style="font-weight:bold">ARTEZANNAL</span> o por cualquiera de sus subsidiaras y/o filiales, y quedarán registrados en nuestra base de datos, así como cualquier otra información personal, sensible o de cualquier otra índole, siempre que se cumpla con lo establecido en la Ley y su Reglamento respecto a cada tipo de información. Esta información puede ser utilizada por <span style="font-weight:bold">ARTEZANNAL</span> para control interno, finalidades comerciales, enviar avisos publicitarios y de mercadotecnia, promociones, avisos de lanzamiento de nuevos productos, entre otros.
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												Esta información podrá usarse de manera enunciativa mas no limitativa para: (1) ofrecerle productos y servicios, ya sea de manera física, telefónica, electrónica o por cualquier otra tecnología o medio que esté al alcance de <span style="font-weight:bold">ARTEZANNAL</span> (2) hacer de su conocimiento nuevos productos o servicios que puedan ser de interés en relación con el servicio contratado; (3) realizar para su comodidad los cargos facturados de manera automática; (4) emitir órdenes de compra o solicitudes de trabajo, según corresponda; y/o (5) cualquier otra acción que sea necesaria para cumplir con los intereses de <span style="font-weight:bold">ARTEZANNAL</span> respecto al acuerdo que haya llegado con el Titular de la Información.
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												<span style="font-weight:bold">Transferencia</span>
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												El Titular de la Información entiende y acepta que <span style="font-weight:bold">ARTEZANNAL</span> y/o cualquiera de sus subsidiarias y/o filiales, podrá transferir sus datos personales a terceros que han sido contratados por <span style="font-weight:bold">ARTEZANNAL</span> para que realicen en su nombre y representación ciertas tareas relacionadas con las actividades comerciales y de promoción de sus productos y/o servicios. Estas terceras partes pueden tratar los datos en cumplimiento de las instrucciones de <span style="font-weight:bold">ARTEZANNAL</span> o tomar decisiones sobre ellos como parte de la prestación de sus servicios. En cualquiera de los dos casos, <span style="font-weight:bold">ARTEZANNAL</span> seleccionará proveedores que considere confiables y que se comprometan, mediante un contrato u otros medios legales aplicables, a implementar las medidas de seguridad necesarias para garantizar un nivel de protección adecuado a sus datos personales. Derivado de lo anterior, <span style="font-weight:bold">ARTEZANNAL</span> exigirá a sus proveedores que cumplan con medidas de seguridad que garanticen los mismos niveles de protección que <span style="font-weight:bold">ARTEZANNAL</span> implementa durante el tratamiento de sus datos como cliente de <span style="font-weight:bold">ARTEZANNAL</span>. Estas terceras partes seleccionadas tendrán acceso a su información con la finalidad de realizar las tareas especificadas en el contrato de servicios aplicable que haya suscrito con <span style="font-weight:bold">ARTEZANNAL</span>. Si <span style="font-weight:bold">ARTEZANNAL</span> determina que un proveedor no está cumpliendo con las obligaciones pactadas, tomará inmediatamente las acciones pertinentes.
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												Si el titular, no acepta la transmisión de sus datos personales de conformidad con lo estipulado en el párrafo anterior, puede ponerse en contacto con <span style="font-weight:bold">ARTEZANNAL</span> por cualquiera de los medios establecidos en el presente Aviso de Privacidad.
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												<span style="font-weight:bold">Excepciones</span>
 											</p>
 											<br>
 											<p style="text-align:justify;"> 
 												Adicionalmente y de conformidad con lo estipulado en los Artículos 10, 37 y demás relativos de la Ley y su Reglamento, <span style="font-weight:bold">ARTEZANNAL</span> quedará exceptuado de las obligaciones referentes al consentimiento para el Tratamiento y Transferencia de sus Datos, cuando:
 											</p>
 											<br>
 											<p style="text-align:left;">
 												<ul style="text-align: left; margin-left: 30px;">
 													<li>I. Esté previsto en una Ley;</li>
 													<li><br>II. Los datos figuren en fuentes de acceso público;</li>
 													<li><br>III. Los datos personales se sometan a un procedimiento previo de disociación;</li>
 													<li><br>IV. Tenga el propósito de cumplir obligaciones derivadas de una relación jurídica entre el titular y el responsable;</li>
 													<li><br>V. Exista una situación de emergencia que potencialmente pueda dañar a un individuo en su persona o en sus bienes;</li>
 													<li><br>VI. Sean indispensables para la atención médica, la prevención, diagnóstico, la prestación de asistencia sanitaria, tratamientos médicos o la gestión de servicios sanitarios;</li>
 													<li><br>VII. Se dicte resolución de autoridad competente;</li>
 													<li><br>VIII. Cuando la transferencia sea precisa para el reconocimiento, ejercicio o defensa de un derecho en un proceso judicial, y</li>
 													<li><br>IX. Cuando la transferencia sea precisa para el mantenimiento o cumplimiento de una relación jurídica entre el responsable y el titular.</li>
 												</ul>
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												<span style="font-weight:bold">Modificaciones</span>
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												En caso de que se requiera alguna modificación a lo estipulado en el presente Aviso de Privacidad, <span style="font-weight:bold">ARTEZANNAL</span> se obliga a hacer del conocimiento los cambios que en su caso se requieran, por cualquier medio, incluidos los electrónicos, previo aviso que se le dé a usted para que se manifieste por su parte, lo que a su derecho convenga, ya que de no recibir negativa expresa y por escrito de su parte, o bien, respuesta alguna, se entenderá que usted acepta de conformidad los cambios realizados.
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												<span style="font-weight:bold">Consentimiento del Titular</span>
 											</p>
 											<br>
 											<p style="text-align:justify;"> 
 												El Titular de la Información reconoce y acepta que en caso de que este “Aviso de Privacidad” esté disponible a través de una página electrónica (sitio web, página de Internet o similar) o algún otro dispositivo electrónico, al hacer clic en “aceptar” o de cualquier otra forma seguir navegando en el sitio, o bien al proporcionar sus Datos a través del mismo o a través de cualquier medio electrónico (correo electrónico, etc.), constituye una manifestación de su consentimiento para que <span style="font-weight:bold">ARTEZANNAL</span> realice el tratamiento de sus Datos, de conformidad con este Aviso de Privacidad.
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												Asimismo, de igual manera manifiesta que en caso de que este “Aviso de Privacidad” esté disponible por escrito, su firma, rúbrica, nombre o huella o bien al proporcionar sus Datos, constituye una manifestación de su consentimiento para que <span style="font-weight:bold">ARTEZANNAL</span> realice el tratamiento de sus datos, de conformidad con este “Aviso de Privacidad”.
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												<span style="font-weight:bold">Notificación de cambios del aviso</span>
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												Si <span style="font-weight:bold">ARTEZANNAL</span> cambia este aviso de privacidad, dichos cambios aparecerán en el sitio web: <a href="https://artezannal.com">www.artezannal.com</a>
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												Si usted tiene alguna pregunta o desea ejercer algún derecho relacionada con esta declaración de privacidad, por favor comuníquese con <span style="font-weight:bold">ARTEZANNAL</span> y/o sus empresas filiales a la siguiente dirección: <a href="mailto:contacto@artezannal.com">contacto@artezannal.com</a>
 											</p>
 											<br>
 											<p style="text-align:justify;">
 												<span style="font-weight:bold">Este aviso de privacidad ha sido creado en base a las reglas expedidas por la Ley Federal de Protección de Datos Personales en Posesión de los Particulares con fundamento en los artículos 16, 17 y 36 de la Ley y corresponsales de su Reglamento.</span>
 											</p>
 											<br>
 											<p style="text-align:right;margin-top: 50px;">
 												Fecha de Actualización 29/01/2025
 											</p>
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