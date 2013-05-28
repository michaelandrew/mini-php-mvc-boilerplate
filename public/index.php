<?php

define('ROOT', dirname(__DIR__));
define('CONFIG', ROOT.'/config');
define('APPLICATION_ENV', getenv(APPLICATION_ENV));

require CONFIG.'/paths.php';
require CONFIG.'/database.php';

require CORE.'/Bootstrap.php';
require CORE.'/Controller.php';
require CORE.'/Model.php';
require CORE.'/View.php';

$app = new Bootstrap();