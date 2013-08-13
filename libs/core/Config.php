<?php
namespace Core;

class Config {

	public static $startTime 	= 0;
	public static $startMemory 	= 0;

	public static function init() {
		require CONFIG.'/config.php';

		putenv('TZ=Europe/London');
		date_default_timezone_set('Europe/London');

		setlocale(LC_ALL, 'en_gb.utf-8');

		self::$startTime 	= microtime(true);
		self::$startMemory 	= memory_get_usage();
	}

}