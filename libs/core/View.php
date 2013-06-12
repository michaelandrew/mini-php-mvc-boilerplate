<?php

class View {

	public function __construct() {
		$this->layout('layout/global');
	}

	public function layout($layout) {
		require VIEWS.'/'.$layout.'.php';
	}
	
	public function view($view) {
		include VIEWS.'/'.$view.'.php';
	}

}