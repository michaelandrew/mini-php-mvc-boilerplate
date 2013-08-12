<?php

class Error extends \App\Www\Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->view->msg = 'This page doesnt exist<br />';
	}

}