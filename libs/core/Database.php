<?php

class Database extends PDO {
	
	public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS) {
		parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME, $DB_USER, $DB_PASS);
	}
	
	public function insert($table, $data) {
		ksort($data);
		
		$fields = implode('`, `', array_keys($data));
		$values = ':' . implode(', :', array_keys($data));
		
		$statement = $this->prepare("INSERT INTO $table (`$fields`) VALUES ($values)");
		
		foreach($data as $key => $value) {
			$statement->bindValue(":$key", $value);
		}
		
		$statement->execute();
	}
	
	public function update($table, $data, $location) {
		ksort($data);
		
		$fields = null;
		
		foreach($data as $key => $value) {
			$fields .= "`$key`=:$key,";
		}
		$fields = rtrim($fields, ',');
		
		$statement = $this->prepare("UPDATE $table SET $fields WHERE $location");
		
		foreach($data as $key => $value) {
			$statement->bindValue(":$key", $value)''
		}
		
		$statement->execute();
	}
	
}