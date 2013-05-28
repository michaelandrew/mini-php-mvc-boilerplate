<?php

class View {

	function __construct() {
		echo 'Core View<br />';
	}

	public function render($name) {
		require '../app/views/' . $name . '.php';
	}

}