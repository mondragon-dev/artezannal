<?php

	$link = mysqli_connect('127.0.0.1', DB_USER, DB_PASSWORD) or die('No se pudo conectar: ' . mysqli_error());
  	mysqli_select_db($link, DB_DATABASE) or die('No se pudo seleccionar la base de datos');

?>