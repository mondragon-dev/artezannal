<?php
	
	session_start();

	error_reporting(E_ERROR);
  	ini_set("display_errors", 1);

  	date_default_timezone_set("America/Mexico_City");

  	switch($_SERVER['HTTP_HOST']){

		case 'qa.artezannal.com':

			define('DB_USER', 'qaartezannal');
			define('DB_PASSWORD', '*8bl9Gt74');
			define('DB_DATABASE', 'qaartezannal');
			define('URL_SUCCESS', 'https://qa.artezannal.com/payments.php?r=success');
			define('URL_CANCEL', 'https://qa.artezannal.com/payments.php?r=cancel');

		break;

		default:

			define('DB_USER', 'root');
			define('DB_PASSWORD', '');
			define('DB_DATABASE', 'artezannal_ecommerce');
			define('URL_SUCCESS', 'https://localhost/artezannal/payments.php?r=success');
			define('URL_CANCEL', 'https://localhost/artezannal/payments.php?r=cancel');

		break;

	}

?>