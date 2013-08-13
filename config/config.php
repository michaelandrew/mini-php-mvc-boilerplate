<?php

defined('ENVIRONMENT') or define('ENVIRONMENT', isset($_SERVER['ENVIRONMENT']) ? $_SERVER['ENVIRONMENT'] : 'production');

define('SALT_KEY', ''); // Fill this in!

if (ENVIRONMENT == 'development') {
	require 'database/development.php';
} else {
	require 'database/production.php';
}
