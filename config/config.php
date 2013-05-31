<?php

define('SALT_KEY', '');

define('APP', 			ROOT.'/app');
define('LIBS', 			ROOT.'/libs');
define('ASSETS', 		ROOT.'/public');
define('CORE', 			LIBS.'/core');
define('DB', 			CONFIG.'/database');
define('CONTROLLERS', 	APP.'/controllers');
define('MODELS', 		APP.'/models');
define('VIEWS', 		APP.'/views');

if (APPLICATION_ENV == 'DEVELOPMENT') {
	require DB.'/development.php';
} else {
	require DB.'/production.php';
}