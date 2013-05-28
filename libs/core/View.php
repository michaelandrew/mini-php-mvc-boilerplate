<?php

class View {

	function __construct() {
	}

	public function render($name) {
		require VIEWS.'/'.$name.'.php';
	}

}