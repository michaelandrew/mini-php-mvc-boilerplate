<?php

define('ROOT', dirname(__DIR__));
define('CONFIG', ROOT.'/config');

require CONFIG.'/index.php';

function __autoload($class) {
	require CORE . "/" . $class . ".php";
}

$app = new Bootstrap();