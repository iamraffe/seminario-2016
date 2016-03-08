<?php namespace core;

/*
 * config - an example for setting up system settings
 * When you are done editing, rename this file to 'config.php'
 *
 * @author David Carr - dave@daveismyname.com - http://www.daveismyname.com
 * @author Edwin Hoksberg - info@edwinhoksberg.nl
 * @version 2.1
 * @date June 27, 2014
 */
class Config {

	public function __construct() {

		//turn on output buffering
		ob_start();

		//site address
		define('DIR', 'http://seminarioexcelencia.com/langalpha/');

		//set default controller and method for legacy calls
		//define('DEFAULT_CONTROLLER', 'welcome');
		//define('DEFAULT_METHOD' , 'index');

		//database details ONLY NEEDED IF USING A DATABASE
		define('DB_TYPE', 'mysql');
		define('DB_HOST', 'localhost');
		define('DB_NAME', 'seminari_2014');
		define('DB_USER', 'seminari');
		define('DB_PASS', '0MD9yt2jn0');
		define('PREFIX', 'sm_');

		//set prefix for sessions
		define('SESSION_PREFIX', 'sm_');

		//optionall create a constant for the name of the site
		define('SITETITLE', 'Seminario Internacional de Seguridad del Paciente y Excelencia Clínica, IDCsalud-Quirón');

		//turn on custom error handling
		set_exception_handler('core\logger::exception_handler');
		set_error_handler('core\logger::error_handler');

		//set timezone
		date_default_timezone_set('Europe/London');

		//start sessions
		\helpers\session::init();

		//set the default template
		\helpers\session::set('template', 'default');

		//set a default language
		define('LANGUAGE_CODE', 'es');
		define('LANGUAGE_INDEX', 'seminario_basic');
		//\helpers\session::set('language', 'es');
		session_start();
		$_SESSION["lang"] = 'es';
	}

}
