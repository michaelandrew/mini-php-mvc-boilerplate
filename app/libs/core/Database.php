<?php
namespace Core;

use PDO;

class Database extends PDO {
	
	public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS) {
		parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME, $DB_USER, $DB_PASS);
	}

	public function select($data, $array = array(), $fetch = PDO::FETCH_ASSOC) {
		$statement = $this->prepare($data);
		
		foreach ($array as $key => $value) {
			$statement->bindValue("$key", $value);
		}
		
		$statement->execute();
		return $statement->fetchAll($fetch);
	}
	
}