<?php
namespace Core;

class Route {

	public static $URL 			= '';
	public static $REQUEST 		= '';
	public static $CONTROLLER 	= '';

	public static $fileExtension = '.php';

	public static function init() {
		$url 			= isset($_GET['url']) ? $_GET['url'] : null;
		$url 			= rtrim($url, '/');
		$url 			= filter_var($url, FILTER_SANITIZE_URL);
		self::$URL 		= explode('/', $url);
		self::$REQUEST 	= $_SERVER['REQUEST_METHOD'];

		self::load(self::$REQUEST, self::$URL);
	}

	public static function load($request, $url) {
		self::$CONTROLLER = empty($url[0]) ? 'Index' : ucfirst($url[0]);
		$path = CONTROLLERS.'/'.self::$CONTROLLER.self::$fileExtension;
		self::$CONTROLLER = file_exists($path) ? self::$CONTROLLER : 'Error';
		$path = file_exists($path) ? $path : CONTROLLERS.'/Error'.self::$fileExtension;

		require $path;
		self::$CONTROLLER = new self::$CONTROLLER;
		self::$CONTROLLER->index();
	}

}