<?php

class View {

	public function __construct() {
	}

	public function render($layout, $view) {
		require VIEWS.'/'.$layout.'.php';
		$this->content = include VIEWS.'/'.$view.'.php';
	}


}