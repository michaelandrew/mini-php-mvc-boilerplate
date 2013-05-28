<?php

class Controller {

	function __construct() {
		$this->view = new View();
	}
	
	public function loadModel($name) {
		
		$path = '../app/models/'.$name.'.php';
		
		if (file_exists($path)) {
			require '../app/models/'.$name.'.php';
			
			$modelName = $name . '_Model';
			$this->model = new $modelName();
		}		
	}

}