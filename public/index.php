<?php

error_reporting(-1);

define('ROOT', dirname(__DIR__));
define('CONFIG', ROOT.'/config');
define('APPLICATION_ENV', getenv(APPLICATION_ENV));

require CONFIG.'/paths.php';
require CONFIG.'/database.php';

function __autoload($class) {
	require CORE . "/" . $class . ".php";
}

$app = new Bootstrap();