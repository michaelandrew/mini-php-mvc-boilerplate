<?php
namespace Core;

class Route {

	private static $fileExtension 	= '.php';

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

		$controller	= ($url[0] == null ? 'Index' : ucfirst($url[0]));

		$error		= CONTROLLERS.'/'.'Error'.self::$fileExtension;
		$path 		= CONTROLLERS.'/'.$controller.self::$fileExtension;

		if (file_exists($path)) {
			require $path;
		} else {
			require $error;
		}
	}

}