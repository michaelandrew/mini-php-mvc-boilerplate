<?php

define('ROOT', dirname(__DIR__));
define('CONFIG', ROOT.'/config');

<<<<<<< HEAD
require CONFIG.'/index.php';
=======
require CONFIG.'/config.php';
>>>>>>> 78d982d5e241525d7265c93f31a5e025ae2794e9

function __autoload($class) {
	require CORE . "/" . $class . ".php";
}

$app = new Bootstrap();