<?php

class Help extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		echo 'Help Controller<br />';
	}

	function other($arg = false) {
		echo 'Help / Other<br />';
		echo 'Optional: ' . $arg . '<br />';
	}

}