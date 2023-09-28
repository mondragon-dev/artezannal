<?php

	switch($_SERVER['HTTP_HOST']){

		case 'artezannal.com':

			define('DB_USER', 'tedma');
			define('DB_PASSWORD', 'Aj7sx#110');
			define('DB_DATABASE', 'tedma');
			define('URL_PROJECT', 'https://tedma.xperanto.com.mx');

		break;

		case 'qa.artezannal.com':

			define('DB_USER', 'adminec');
			define('DB_PASSWORD', '7yPs20e*6');
			define('DB_DATABASE', 'adminec');
			define('URL_PROJECT', 'https://qa.artezannal.com');
			define('URL_ADMINEC', 'https://admin.artezannal.com');

		break;

		default:

			define('DB_USER', 'root');
			define('DB_PASSWORD', '');
			define('DB_DATABASE', 'adminec');
			define('URL_PROJECT', 'http://localhost/artezannal');
			define('URL_ADMINEC', 'http://127.0.0.1:8000');

		break;

	}

?>