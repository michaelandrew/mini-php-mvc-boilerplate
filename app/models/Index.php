<?php
namespace Models;

class Index extends \App\Model {

	public function __construct() {
		parent::__construct();
	}

	public function get() {
		return $this->database->select("SELECT * FROM someththing ORDER BY someththing . id DESC LIMIT 0, 10");
	}

}