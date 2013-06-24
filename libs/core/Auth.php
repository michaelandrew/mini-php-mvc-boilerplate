<?php

class Auth {
	
	public static function init() {
		@session_start();

        $auth = $_SESSION['online'];

        if ($auth == false) {
            Session::destroy();
            header('location: /account/login');
            exit;
        }
	}
	
}