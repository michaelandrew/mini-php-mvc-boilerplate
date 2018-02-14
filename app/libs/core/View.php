<?php
namespace Core;

use \Core\Route;

class View {
	
	public function __construct() {}

	public function render($layout, $views = null, $vars = null) {

		if (isset($vars)) {
			extract($vars);
		}

		if (isset($views)) {
 			foreach ($views as $view => $contents) {
			    if (is_array($view) && !empty($view)) {
			        extract($view);
			    }
			    ob_start();
			    include VIEWS.'/'.$contents.Route::$fileExtention;
			    ${$view} = ob_get_clean();
 			}
		}
		
		require VIEWS.'/'.$layout.Route::$fileExtention;
	}

}