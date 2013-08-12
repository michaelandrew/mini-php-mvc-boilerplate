<?php
namespace App\Www;

class Controller extends \Core\Controller {

	public static $REST = false;
	
	public function __construct() {
		parent::__construct();
	}

	public function restful() {
		return self::$REST;
	}

}