<?php

class Controller {

	function __construct() {
		$this->view = new View();
	}
	
	public function loadModel($name) {
		
		$path = MODELS.'/'.$name.'.php';
		
		if (file_exists($path)) {
			require MODELS.'/'.$name.'.php';
			
			$modelName = $name . '_Model';
			$this->model = new $modelName();
		}		
	}

}