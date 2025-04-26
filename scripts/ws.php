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
					            	<span class="checkit-btn l-dis-ib button" style="width:100%; border-width: 1px;background-color:#130a56;color: #fff;" data-toggle="modal" data-target="#modalVerificar">Verificar</span>
					            </div>
									 		<div class="checkit-btn-block">
					            	<span class="checkit-btn l-dis-ib button" style="width:100%; border-width: 1px;background-color:#fff;color: #130a56;" onclick="verCarrito()">Ver carrito</span>
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

?>