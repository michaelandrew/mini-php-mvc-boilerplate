<?php

class Validate {
	
	public function __construct() {}
		
	public function minlength($data, $args) {
		if (strlen($data) < $args) {
			return "Your string has to be at least $args characters long";
		}
	}
	
	public function maxlength($data, $args) {
		if (strlen($data) > $args) {
			return "Your string cannot be longer than $args characters";
		}
	}
	
	public function integer($data) {
		if (ctype_digit($data) == false) {
			return "This must be a number";
		}
	}
	
	public function __call($name, $args) {
		throw new Exception("$name does not exist inside of " . __CLASS__);
	}
	
}