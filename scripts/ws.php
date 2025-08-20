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
									 		<div class="checkit-btn-block">
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
													<td><img src='https://qa.artezannal.com/images/logoIndex.png' style='width:70%;max-width:70%'></td>
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

			$msgCuenta = '<center><span style="font-size:18px;color:#130a56;"><br><br>Su cuenta ha sido verificada con exito.<br><br><a href="javascript:void(0)" onclick="iniciarSesion()">Clic para iniciar sesión</a><br><br><a href="index.php">Clic para seguir navegando</a></span></center>';

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

?>