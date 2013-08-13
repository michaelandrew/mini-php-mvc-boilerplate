<?php
namespace Core;

class Assets {
	
	public function __construct() {}
		
	public static function css($file) {
		echo ASSETS.DS.'css'.DS.$file.'.css';
	}
	
	public static function js($file) {
		echo ASSETS.DS.'js'.DS.$file.'.js';
	}
	
	public static function images($file) {
		echo ASSETS.DS.'images'.DS.$file;
	}
	
}