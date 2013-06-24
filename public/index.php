<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__));
define('CONFIG', ROOT . DS . 'config');
require CONFIG . DS . 'index.php';

function __autoload($class) {
	require CORE . DS . $class . ".php";
}

$bootstrap = new Bootstrap();

$bootstrap->init();
$bootstrap->setReporting();
$bootstrap->removeMagicQuotes();
$bootstrap->unregisterGlobals();