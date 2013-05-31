<?php

class Form {
	
	private $post = array();
	
	public function __construct() {}
	
	public function post($field) {
		$this->post[$field] = $_POST[$field];
	}
	
	public function validate() {
		
	}
}