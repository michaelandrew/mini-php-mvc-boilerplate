<?php
namespace Core;

class Route {

	public static function request() {
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = filter_var($url, FILTER_SANITIZE_URL);
		$url = explode('/', $url);
		return $url;
	}

	public static function set($method, $url) {

		// Load controller
		// 
		// Check method
		// 
		// If the method if not get, look for prefixes
		// 
		// If no prefixes exist, default to method
		
		// if ($url[0] != null) {
		// 	print ucfirst($url[0]).' Controller';
		// } else {
		// 	print 'Index Controller';
		// }

		// new \Controllers\Index;
	}

}