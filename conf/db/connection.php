<?php

define('DB_TYPE', 'mysql');

switch (ENVIRONMENT) {

	case 'development':
		define('DB_HOST',	'localhost');
		define('DB_NAME',	'database');
		define('DB_USER',	'root');
		define('DB_PASS',	'root');
    break;

	default:
	// It's not great practice to have your DB credentials in your code 
	// Perhaps store them as constants? 
		define('DB_HOST',	getenv('DB_HOST'));
		define('DB_NAME',	getenv('DB_NAME'));
		define('DB_USER',	getenv('DB_USER'));
		define('DB_PASS',	getenv('DB_PASS'));

}