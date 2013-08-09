<?php
namespace Controllers;

class Error extends Www {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->view->msg = 'This page doesnt exist<br />';
		$this->view->render('error/index');
	}

}