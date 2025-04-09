<?php
	
	session_start();

	error_reporting(E_ERROR);
  	ini_set("display_errors", 1);

  	date_default_timezone_set("America/Mexico_City");

  	switch($_SERVER['HTTP_HOST']){

		case 'qa.artezannal.com':

			define('DB_USER', 'rt25');
			define('DB_PASSWORD', 'Csot~8907');
			define('DB_DATABASE', 'qaartezannal');

		break;

		default:

			define('DB_USER', 'root');
			define('DB_PASSWORD', '');
			define('DB_DATABASE', 'artezannal_ecommerce');

		break;

	}

?>