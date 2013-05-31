<?php

define('ROOT', dirname(__DIR__));
define('CONFIG', ROOT.'/config');
define('APPLICATION_ENV', getenv(APPLICATION_ENV));

require CONFIG.'/config.php';

function __autoload($class) {
	require CORE . "/" . $class . ".php";
}

$app = new Bootstrap();