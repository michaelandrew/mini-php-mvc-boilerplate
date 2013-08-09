<?php

class Index extends Www {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->view->render('home/index');
	}

}