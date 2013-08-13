<?php
namespace Core;

class Auth {
	
	public static function init($location) {
		@session_start();

        $auth = $_SESSION['online'];

        if ($auth == false) {
            Session::destroy();
            header('location: $location');
            exit;
        }
	}
	
}