<?php
namespace Core;

class Request {

		public static function get() {
		if (isset($_SERVER['REQUEST_METHOD'])) {
			return $_SERVER['REQUEST_METHOD'];
		} else {
			return 'GET';
		}
	}

}