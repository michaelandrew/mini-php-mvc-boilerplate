<?php
namespace Core;

class Bootstrap {

	private static $URL 		= '';
	private static $METHOD 		= '';
	private static $SUBDOMAIN	= '';
	private static $CONTROLLER 	= '';

	public static $startTime	= '';
	public static $startMemory	= '';

	public static function init() {

		date_default_timezone_set('Europe/London');
		setlocale(LC_ALL, 'en_gb.utf-8');

		defined('ENVIRONMENT') or define(
			'ENVIRONMENT',
			isset($_SERVER['ENVIRONMENT']) ? $_SERVER['ENVIRONMENT'] : 'production'
		);

		self::setDomains();

		defined('APP') or 			define('APP', 			ROOT.'/app/'.self::$SUBDOMAIN);
		defined('CONTROLLERS') or 	define('CONTROLLERS', 	APP.'/controllers');
		defined('VIEWS') or 		define('MODELS', 		APP.'/models');
		defined('APP') or 			define('VIEWS', 		APP.'/views');

		self::$startMemory	 = microtime(true);
		self::$startTime	 = memory_get_usage();

		self::autoLoader();
		self::router();
	}

	public static function setDomains() {
		$route = explode('/', ROUTE);
		self::$SUBDOMAIN = end($route);
	}

	public static function autoLoader() {
		require ROOT.'/libs/core/Autoloader.php';

		$SUBDOMAIN = self::$SUBDOMAIN;

		new Autoloader('Core',			ROOT.'/libs');
		new Autoloader('Config',		ROOT);
		new Autoloader('Views',			ROOT.'/app/'.$SUBDOMAIN);
		new Autoloader('Models',		ROOT.'/app/'.$SUBDOMAIN);
		new Autoloader('Controllers',	ROOT.'/app/'.$SUBDOMAIN);

		// Set Autoloader for each subdomains' App Libs Folder (libs/app/<subdomain>)
		new Autoloader('Www',			ROOT.'/libs/app');
	}

	public static function router() {
		self::$METHOD 	= Request::get();
		self::$URL 		= Route::request();
		
		Route::set(self::$METHOD, self::$URL);
	}

}

// class Bootstrap {

// 	private $url            = null;
// 	private $controller     = null;

// 	private $controllerPath = CONTROLLERS;
// 	private $modelPath      = MODELS;
// 	private $errorFile      = 'Error.php';
// 	private $defaultFile    = 'Index.php';

// 	public function init() {
// 		$this->getUrl();

// 		if (empty($this->url[0])) {
// 			$this->loadDefault();
// 			return false;
// 		}

// 		$this->loadExisting();
// 		$this->callMethod();
// 	}
	
// 	public function setPath($path) {
// 		$this->controllerPath = trim($path, DS) . DS;
// 	}

// 	public function setModelPath($path) {
// 		$this->modelPath = trim($path, DS) . DS;
// 	}

// 	public function setErrorFile($path) {
// 		$this->errorFile = trim($path, DS);
// 	}

// 	public function setDefaultFile($path) {
// 		$this->defaultFile = trim($path, DS);
// 	}

// 	private function getUrl() {
// 		$url = isset($_GET['url']) ? $_GET['url'] : null;
// 		$url = rtrim($url, DS);
// 		$url = filter_var($url, FILTER_SANITIZE_URL);
// 		$this->url = explode(DS, $url);
// 	}

// 	private function loadDefault() {
// 		require $this->controllerPath . DS . $this->defaultFile;
// 		$this->controller = new Index();
// 		$this->controller->index();
// 	}

// 	private function loadExisting() {
// 		$file = $this->controllerPath . DS . $this->url[0] . '.php';

// 		if (file_exists($file)) {
// 			require $file;
// 			$this->controller = new $this->url[0];
// 			$this->controller->loadModel($this->url[0]);
// 		} else {
// 			$this->error();
// 			return false;
// 		}
// 	}
    
// 	private function callMethod() {
// 		$length = count($this->url);

// 		if ($length > 1) {
// 			if (!method_exists($this->controller, $this->url[1])) {
// 				$this->error();
// 			}
// 		}

// 		switch ($length) {
// 			case 5:
// 			$this->controller->{$this->url[1]}($this->url[2], $this->url[3], $this->url[4]);
// 			break;

// 			case 4:
// 			$this->controller->{$this->url[1]}($this->url[2], $this->url[3]);
// 			break;

// 			case 3:
// 			$this->controller->{$this->url[1]}($this->url[2]);
// 			break;

// 			case 2:
// 			$this->controller->{$this->url[1]}();
// 			break;

// 			default:
// 			$this->controller->index();
// 			break;
// 		}
// 	}
    
// 	private function error() {
// 		require $this->controllerPath . DS . $this->errorFile;
// 		$this->controller = new Error();
// 		$this->controller->index();
// 		exit;
// 	}
	
// 	function setReporting() {
// 		if (ENVIRONMENT == 'development') {
// 		    error_reporting(E_ALL);
// 		    ini_set('display_errors', 'On');
// 		} else {
// 		    error_reporting(E_ALL);
// 		    ini_set('display_errors', 'Off');
// 		    ini_set('log_errors', 'On');
// 		    ini_set('error_log',  LOGS . DS . 'error.log');
// 		}
// 	}
	
// 	function stripSlashesDeep($value) {
// 		$value = is_array($value) ? array_map('stripSlashesDeep', $value) : stripslashes($value);
// 		return $value;
// 	}
	
// 	function removeMagicQuotes() {
// 		if (get_magic_quotes_gpc()) {
// 			$_GET    = stripSlashesDeep($_GET   );
// 			$_POST   = stripSlashesDeep($_POST  );
// 			$_COOKIE = stripSlashesDeep($_COOKIE);
// 		}
// 	}
	
// 	function unregisterGlobals() {
// 		if (ini_get('register_globals')) {
// 			$array = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');
// 			foreach ($array as $value) {
// 				foreach ($GLOBALS[$value] as $key => $var) {
// 					if ($var === $GLOBALS[$key]) {
// 						unset($GLOBALS[$key]);
// 					}
// 				}
// 			}
// 		}
// 	}
// }
