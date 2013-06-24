<?php

class Controller {

	function __construct() {
		$this->view = new View();
		$this->view->controller = strtolower(get_class($this));
	}
	
	public function loadModel($name) {
		
		$name = ucfirst(strtolower($name));
		
		$path = MODELS.DS.$name.'.php';
		
		if (file_exists($path)) {
			
			require MODELS.DS.$name.'.php';
			
			$modelName = $name . '_Model';
			$this->model = new $modelName();
		}		
	}
}