<?php

class Error extends \App\Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->view->render('layout/error', array('error' => 'error/404'));
	}

}