<?php

class Index extends \App\Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->view->render('layout/layout', array('content' => 'home/index'));
	}

}