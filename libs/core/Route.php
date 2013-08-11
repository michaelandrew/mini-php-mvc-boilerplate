<?php

class Route {

	public static $URL 			= '';
	public static $REQUEST 		= '';
	public static $CONTROLLER 	= '';

	public static function init() {
		$url 			= isset($_GET['url']) ? $_GET['url'] : null;
		$url 			= rtrim($url, '/');
		$url 			= filter_var($url, FILTER_SANITIZE_URL);
		self::$URL 		= explode('/', $url);
		self::$REQUEST 	= $_SERVER['REQUEST_METHOD'];

		// Route URL

		// Route to Controller Method based on Request

		self::load(self::$REQUEST, self::$URL);
	}

	public static function load($request, $url) {
		self::$CONTROLLER = empty($url[0]) ? 'Index' : ucfirst($url[0]);

		$path = CONTROLLERS.self::$CONTROLLER.'.php';

		print $path;
	}

}