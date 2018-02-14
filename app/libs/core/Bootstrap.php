<?php
namespace Core;

class Bootstrap {
	
	public static function init() {

		define('LIBS', 			ROOT.'/libs');
		define('CONF', 			ROOT.'/conf');

		define('APP', 			ROOT.'/app');
		define('VIEWS',		 	ROOT.'/app/views');
		define('MODELS',		ROOT.'/app/models');
		define('CONTROLLERS', 	ROOT.'/app/controllers');

		spl_autoload_register(function($class) {

			$classes = array(
				LIBS,
				APP
			);

			foreach ($classes as $dir) {
				$file = sprintf($dir.'/%s.php', lcfirst($class));
				$file = str_replace('\\', '/', $file);

				if (file_exists($file) && is_file($file)) {
					require $file;
				}
			}

		});

		Config::init();
		Route::init();
	}

}