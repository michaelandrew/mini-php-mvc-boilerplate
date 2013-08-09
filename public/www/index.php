<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__DIR__)));
define('ROUTE', basename(__DIR__));
define('CONFIG', ROOT . DS . 'config');
require CONFIG . DS . 'index.php';

function __autoload($class) {
	require CORE . DS . $class . ".php";
}

require APPLIBS . DS . ROUTE . DS . "Controller.php";
require APPLIBS . DS . ROUTE . DS . "Model.php";

$bootstrap = new Bootstrap();

$bootstrap->init();
$bootstrap->setReporting();
$bootstrap->removeMagicQuotes();
$bootstrap->unregisterGlobals();