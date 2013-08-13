<?php
namespace Core;

class Bootstrap {

	public static function init() {

		define('LIBS', 			ROOT.'/libs');
		define('CONFIG', 		ROOT.'/config');

		define('APP', 			ROOT.'/libs/app/'.ROUTE);
		define('CORE', 			ROOT.'/libs/core');
		define('CONTROLLERS', 	ROOT.'/app/'.ROUTE.'/controllers');

		spl_autoload_register(function($class) {

			$file = sprintf(LIBS.'/%s.php', $class);
			$file = str_replace('\\', '/', $file);

			if (file_exists($file) && is_file($file)) {
	            require $file;
	        }

		});

		Config::init();
		Route::init();
	}

}