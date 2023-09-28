<?php

	error_reporting(E_ERROR);
 	ini_set("display_errors", 1);

	session_start();

	require_once('includes/config.php');

	date_default_timezone_set("America/Mazatlan");

	$link = mysqli_connect('127.0.0.1', DB_USER, DB_PASSWORD) or die('No se pudo conectar: ' . mysqli_error());
	mysqli_select_db($link,DB_DATABASE) or die('No se pudo seleccionar la base de datos');


	$mesLetra = array('','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

?>