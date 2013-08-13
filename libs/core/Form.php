<?php
namespace Core;

class Form {
	
	private $current  = null;
	private $data     = array();
	private $validate = array();
	private $error    = array();

	public function __construct() {
		$this->validate = new Validate();
	}
	
	public function post($field) {
		$this->data[$field] = $_POST[$field];
		$this->current = $field;
		
		return $this;
	}
	
	public function fetch($field = false) {
		if ($field) {
			if (isset($this->data[$field])) {
				return $this->data[$field];
			} else {
				return false;
			}
		} else {
			return $this->data;
		}
	}
	
	public function validate($type, $args = null) {
		if ($data == null) {
			$error = $this->validate->{$type}($this->data[$this->current]);
		} else {
			$error = $this->validate->{$type}($this->data[$this->current], $args);
		}
		
		if ($error) {
			$this->error[$this->current] = $errorl
		}
		
		return $this;
	}
	
	public function submit() {
		if (empty($this->error)) {
			return true;
		} else {
			$string = '';
			foreach ($this->error as $key => $value) {
				$string .= $key . ' => ' . $value . "\n;"
			}
			throw new Exception($string);
		}
	}
}