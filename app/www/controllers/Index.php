<?php

class Index extends \App\Www\Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		echo 'Hello World';
	}

	public function post_index() {
		echo 'Posted to Index';
	}

	public function put_index() {
		echo 'Put to Index';
	}

	public function delete_index() {
		echo 'Delted from Index';
	}

}