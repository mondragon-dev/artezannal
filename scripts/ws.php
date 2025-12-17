<?php

  include('../config/config.php');
	include('../config/db.php');

	if($_POST['acc'] == "agregarProductoCarrito"){

		$sql_p = "SELECT * FROM carrito_compras WHERE session_id = '".$_POST['session_id']."' AND producto_id = '".$_POST['producto_id']."' ";
		$res_p = mysqli_query($link,$sql_p);
		$ex = mysqli_num_rows($res_p);

		if($ex >= 1){
			$sql = "UPDATE carrito_compras SET cantidad = (cantidad + 1) WHERE session_id = '".$_POST['session_id']."' AND producto_id = '".$_POST['producto_id']."' ";
		}else{
			$sql = "INSERT INTO carrito_compras (session_id, producto_id, cantidad, estatus, fecha_captura) VALUES('".$_POST['session_id']."', '".$_POST['producto_id']."', '1', 'Pendiente', '".date("Y-m-d H:i:s")."') ";
		}
		$res = mysqli_query($link,$sql);

		exit;
	}

	if($_POST['acc'] == "listarProductosCarrito"){

		$respuesta = '<hr>';

		$sql = "SELECT * FROM carrito_compras AS C LEFT JOIN productos as P ON C.producto_id = P.id WHERE session_id = '".$_POST['session_id']."' ";
		$res = mysqli_query($link,$sql);

		$subtotal = 0;

		while($dat = mysqli_fetch_array($res)){

			$respuesta .= '<div class="row">
											<div class="col-lg-3">
												<img src="images/products/'.$dat['imagen'].'">
											</div>
											<div class="col-lg-6">
												'.$dat['producto'].'<br><br>
												$'.$dat['precio'].'<br><br>
												<input type="number" class="form-control" onchange="actualizarProductos(this.value,'.$dat['producto_id'].')" min="1" max="10" value="'.$dat['cantidad'].'">
											</div>
											<div class="col-lg-3">
												<i class="fa fa-trash" style="font-size:20px;cursor:pointer" onclick="eliminarProductoCarrito('.$dat['producto_id'].')"></i>
											</div>
										 </div>
										 <hr>';

			$subtotal += ($dat['cantidad'] * $dat['precio']);

		}

		$respuesta .= '<div class="row">
										<div class="col-lg-6">
											<h1>Subtotal:</h1> 
										</div>
										<div class="col-lg-6">
											<h1 id="carritoSubtotal">$'.number_format($subtotal,2).'</h1> 
										</div>
									 </div>
									 <div class="row">
									 	<div class="col-lg-12">
									 		<br>
									 		Los impuestos y el envío se calculan al momento del pago.
									 	</div>
									 </div>
									 <div class="row">
									 	<div class="col-lg-12">
									 		<br>
									 		<div class="checkit-btn-block" style="display:none">
					            	<span class="checkit-btn l-dis-ib button" style="width:100%; border-width: 1px;background-color:#130a56;color: #fff; border-radius: 30px;" data-toggle="modal" data-target="#modalVerificar">Verificar</span>
					            </div>
									 		<div class="checkit-btn-block">
					            	<span class="checkit-btn l-dis-ib button" style="width:100%; border-width: 1px;background-color:#fff;color: #130a56; border-radius: 30px;" onclick="verCarrito()">Ver carrito</span>
					            </div>
					          </div>
									 </div>
									 <div class="row">
									 	<div class="col-lg-12">
									 		<center><i class="fa fa-lock" style="font-size:20px"></i> Secure Checkout</center>
									 	</div>
									 </div>';

		echo $respuesta;

		exit;

	}

	if($_POST['acc'] == "actualizarProductoCarrito"){

		$sql = "UPDATE carrito_compras SET cantidad = '".$_POST['cantidad']."' WHERE session_id = '".$_POST['session_id']."' AND producto_id = '".$_POST['producto_id']."' ";
		$res = mysqli_query($link,$sql);

		exit;

	}

	if($_POST['acc'] == "recalcularTotalCarrito"){

		$sql = "SELECT * FROM carrito_compras AS C 
						LEFT JOIN productos as P ON C.producto_id = P.id WHERE session_id = '".$_POST['session_id']."' ";
		$res = mysqli_query($link,$sql);

		$subtotal = 0;

		while($dat = mysqli_fetch_array($res)){

			$subtotal += ($dat['cantidad'] * $dat['precio']);

		}

		echo number_format($subtotal,2);

		exit;

	}

	if($_POST['acc'] == "eliminarProductoCarrito"){

		$sql = "DELETE FROM carrito_compras WHERE session_id = '".$_POST['session_id']."' AND producto_id = '".$_POST['producto_id']."' ";
		$res = mysqli_query($link,$sql);

		exit;

	}

	if($_POST['acc'] == "altaCuenta"){

		$sql = "INSERT INTO usuarios (nombre, correo, contrasenia, telefono, tipo, estatus, updated_at, created_at) VALUES('".$_POST['nombre']."', '".$_POST['correo']."', '".password_hash($_POST['contrasenia'],PASSWORD_BCRYPT)."', '".$_POST['telefono']."', 'Usuario', 'PendienteVerificar', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."') ";
		$res = mysqli_query($link,$sql);

		$userId = mysqli_insert_id($link);

		require("libs/phpmailer/PHPMailerAutoload.php");

		$mail = new PHPMailer();
    $mail->isSMTP();

		$mail->SMTPOptions = array ('ssl' => array('verify_peer'  => false,
                                               'verify_peer_name'  => false,
                                               'allow_self_signed' => true));
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';

		$mail->Host = "mail.xperanto.com.mx";	
		$mail->Port = 2525;   
    $mail->SMTPAuth = true;
    $mail->Username = "daniel@xperanto.com.mx";
    $mail->Password = "Zucoso2099@";

		$mail->From = "daniel@xperanto.com.mx";
		$mail->FromName = "Artezannal";
		$mail->Subject = utf8_decode("Artezannal - Alta de cuenta");

		$mensaje = "<html>
									<head><title></title></head>
									<body style='background:url(https://qa.artezannal.com/images/back_bright.png);background-size:cover;background-position:50% 50%;'>
										<!--<center>-->
											<table style='font-size:14px'>
												<tr>
													<td align='right'><img src='https://qa.artezannal.com/images/logoIndex.png' style='width:25%;max-width:25%'></td>
												</tr>
												<tr>
													<td><br>Gracias por registrarte con nosotros</td>
												</tr>
												<tr>
													<td valign='top'>
														<br>
														<strong>Tus datos:</strong><br><br>
														<strong>Nombre:</strong> ".$_POST['nombre']."<br>
														<strong>Correo electrónico (usuario):</strong> ".$_POST['correo']."<br>
														<strong>Teléfono:</strong> ".$_POST['telefono']."<br>
														<strong>Fecha de registro:</strong> ".date("Y-m-d H:i:s")."<br>
													</td>
												</tr>
												<tr>
													<td>
														<br>
														<strong>Para activar tu cuenta es necesario verificarla dando clic en la siguiente liga:</strong><br><br>
														https://qa.artezannal.com/index.php?u=".base64_encode($userId)."
													</td>
												</tr>
												<tr>
													<td>
														<br><br><br>
														<p style='text-align:justify'><i>\"IMPORTANTE/CONFIDENCIAL: Este mensaje contiene información de <strong>ARTEZANNAL</strong>, la cual es de carácter privilegiada, confidencial y de acceso restringido conforme a la ley aplicable. Si el lector de este mensaje no es el destinatario previsto, empleado o agente responsable de la transmisión del mensaje al destinatario, se le notifica por este medio que cualquier divulgación, difusión, distribución, retransmisión, reproducción, alteración y/o copiado, total o parcial, de este mensaje y su contenido está expresamente prohibido. Si usted ha recibido esta comunicación por error, notifique por favor inmediatamente al remitente del presente correo electrónico, y posteriormente elimine el mismo.\"</p></i>
														<p style='text-align:justify'><i>\"IMPORTANT/CONFIDENTIAL: This message contains information from <strong>ARTEZANNAL</strong>, which is privileged, confidential and restricted access in accordance with applicable law. If the reader of this message is not the intended recipient, employee or agent responsible for the transmission of the message to the recipient, you are hereby notified that any disclosure, dissemination, distribution, retransmission, reproduction, alteration and/or copying, in whole or in part, of this message and its contents is expressly prohibited. If you have received this communication in error, please notify the sender of this e-mail immediately, and subsequently delete it\".</i></p> 
													</td>
												</tr>
											</table>
										<!--</center>-->
									</body>
								</html>";

		$mail->Body = utf8_decode($mensaje);
		$mail->AltBody = utf8_decode($mensaje);
				
		$mail->AddAddress(trim($_POST['correo']));

		if($mail->Send()){
			echo "si";
		}else{
			echo "error: ";
			echo $mail->ErrorInfo;
		}

		exit;
	}

	if($_POST['acc'] == "validarAcceso"){

		//echo password_hash($_POST['contrasenia'],PASSWORD_BCRYPT);
		//exit;

		$sql = "SELECT * FROM usuarios WHERE correo = '".$_POST['usuario']."' ";
		$res = mysqli_query($link,$sql);
		$dat = mysqli_fetch_array($res);

		if(password_verify($_POST['contrasenia'],$dat['contrasenia'])){
			
			session_start();
			$_SESSION['username'] = $_POST['usuario'];
			$_SESSION['tipo'] = $dat['tipo'];
			$_SESSION['nombre'] = $dat['nombre'];
			$_SESSION['usuario_id'] = $dat['id'];
    	echo 'OK';
		
		}else{
    	echo 'La contraseña no es válida.';
		}

	}

	if($_POST['acc'] == "obtenerDatosProducto"){

		$sql = "SELECT * FROM productos WHERE id = '".$_POST['producto_id']."' ";
		$res = mysqli_query($link,$sql);
		$dat = $res->fetch_assoc();

		echo json_encode($dat,true);

	}

	if($_POST['acc'] == "cerrarSesion"){
		session_start();
		session_destroy();
		echo "OK";
	}

	if($_POST['acc'] == "validarCuenta"){

		$sql = "SELECT * FROM usuarios WHERE id = '".base64_decode($_POST['usuario'])."' and estatus = 'PendienteVerificar' ";
		$res = mysqli_query($link,$sql);
		$ex = mysqli_num_rows($res);

		if($ex == 1){

			$sql = "UPDATE usuarios SET estatus = 'Verificado' WHERE id = '".base64_decode($_POST['usuario'])."' and estatus = 'PendienteVerificar' ";
			$res = mysqli_query($link,$sql);

			$msgCuenta = '<center><span style="font-size:18px;color:#130a56;"><br><br>Su cuenta ha sido verificada con éxito.<br><br><a href="javascript:void(0)" onclick="iniciarSesion()">Clic para iniciar sesión</a><br><br><a href="index.php">Clic para seguir navegando</a></span></center>';

		}else{

			$msgCuenta = '<center><span style="font-size:18px;color:#130a56;"><br><br>No se encontraron datos relacionados al link de verificación.<br><br><a href="login.php">Clic para iniciar sesión</a><br><br><a href="index.php">Clic para seguir navegando</a></span></center>';

		}

		echo $msgCuenta;

	}

	if($_POST['acc'] == "misDatos"){

		$sql = "SELECT * FROM usuarios WHERE correo = '".$_POST['usuario']."' ";
		$res = mysqli_query($link,$sql);

		$dat = $res->fetch_assoc();

		echo json_encode($dat,true);

	}

	if($_POST['acc'] == "editarCuenta"){

		$sql = "UPDATE usuarios SET nombre = '".$_POST['nombre']."', telefono = '".$_POST['telefono']."', estatus = '".$_POST['estatus']."', updated_at = '".date("Y-m-d H:i:s")."' WHERE correo = '".$_POST['correo']."' ";
		if($res = mysqli_query($link,$sql)){
			echo "OK";
		}else{
			echo "Error";
		}

	}

	if($_POST['acc'] == "altaDireccion"){

		$sql = "INSERT INTO usuarios_direcciones (usuario_id, calle_numero, colonia, municipio, estado, codigo_postal, descripcion, updated_at, created_at) VALUES('".$_POST['usuario_id']."', '".$_POST['calle_numero']."', '".$_POST['colonia']."', '".$_POST['municipio']."', '".$_POST['estado']."', '".$_POST['codigo_postal']."', '', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."') ";
		if($res = mysqli_query($link,$sql)){
			echo "OK";
		}else{
			echo "Error";
		}

	}

	if($_POST['acc'] == "listaDireccion"){

		$sql = "SELECT * FROM usuarios_direcciones WHERE usuario_id = '".$_POST['usuario_id']."' ";
		$res = mysqli_query($link,$sql);

		$ex = mysqli_num_rows($res);

		if($ex == 0){
			echo '<div class="col-md-12" style="text-align:right"><span class="checkit-btn l-dis-ib button" style="width:30%; border-width: 1px;background-color:#130a56;color: #fff; border-radius: 30px;" onclick="nuevaDireccion()">Nueva dirección</span></div><center><span style="font-size:18px;color:#130a56;"><br>Sin direcciones registradas.</span></center>';
		}else{

			echo '<div class="col-md-12" style="text-align:right"><span class="checkit-btn l-dis-ib button" style="width:30%; border-width: 1px;background-color:#130a56;color: #fff; border-radius: 30px;" onclick="nuevaDireccion()">Nueva dirección</span></div>';

			while($dat = mysqli_fetch_array($res)){

				echo "<br>".$dat['calle_numero'].", Col. ".$dat['colonia'];
				echo "<br>".$dat['municipio'].", ".$dat['estado'].". C.P.".$dat['codigo_postal'];
				echo "<hr>";

			}

		}


	}

	if($_POST['acc'] == "conectaPaypal"){

    $data = openssl_random_pseudo_bytes(16);
    
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40); 
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    $idempotency_key = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://conecta.xperanto.com.mx/api/payments',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_POSTFIELDS =>'{
		  "client_id": 1,
		  "provider_slug": "paypal",
		  "amount": '.$_POST['total'].',
		  "currency": "MXN",
		  "description": "Orden de pago desde Artezannal",
		  "idempotency_key": "'.$idempotency_key.'",
		  "metadata": {
		    "order_id": "'.$_POST['session_id'].'"
		  },
		  "success_url": "https://localhost/artezannal/payments.php?r=success",
		  "cancel_url": "https://localhost/artezannal/payments.php?r=cancel"
		}',
		  CURLOPT_HTTPHEADER => array(
		    'Content-Type: application/json'
		  ),
		));

		$response = curl_exec($curl);

		curl_close($curl);

		$respuesta = json_decode($response,true);

		if(isset($respuesta['success'])){

			session_start();

			$sql = "INSERT INTO pagos (idempotency_key, session_id, conecta_id, provider_reference_id, conecta_status, metodo, total, fecha_captura, usuario_captura) VALUES('".$idempotency_key."', '".$_POST['session_id']."', '".$respuesta['payment']['id']."', '".$respuesta['payment']['provider_reference_id']."', '".$respuesta['payment']['status']."', 'paypal', '".$_POST['total']."', '".date("Y-m-d H:i:s")."', '".$_SESSION['username']."')";
			$res = mysqli_query($link,$sql);

		}

		echo $response;

	}

?>