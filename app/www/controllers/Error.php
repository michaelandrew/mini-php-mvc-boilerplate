<?php

class Error extends \App\Www\Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		print 'Error - Page does not exist!';
	}

}