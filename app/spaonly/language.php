<?php namespace core;
use helpers\session as Session;

class Language {
   
   private static $_language;
   private static $language = array( );

   public function __construct( ) {
      self::$_language = Session::get('language');
   }

   public function Load( $file ) {
      if( is_array( $file ) ) {
         foreach( $file as $file ) {
            self::$language = array_merge(self::$language, require 'app/language/' . self::$_language . '/' . $file . '.php');
         }
      } else {
         self::$language = require 'app/language/' . self::$_language . '/' . $file . '.php';
      }
   }

   public function Get( $key ) {
      return self::$language[$key];
   }

   public function GetAll( ) {
      return self::$language;
   }

   public function GetLanguage(){
   	return self::$_language;
   }

   public function set($language){
   		//Session::set('language', $language);
        self::$_language  = $language;
   }

	/**
	 * Get lang for views
	 * @param  string $value this is "word" value from language file
	 * @param  string $name  name of file with language
	 * @param  string $code  optional, language code
	 * @return string
	 */
	public function show($value, $name, $code) {
		
		// lang file
		$file = "app/language/$code/$name.php";

		// check if is readable
		if(is_readable($file)){

			// require file
			$_array = include($file);

		} else {

			// display error
			echo \core\error::display("Could not load language file '$code/$name.php'");
			die;

		}

		// If
		if(!empty($_array[$value])){
			return $_array[$value];
		} else {
			return $value;
		}
	}   

}

new Language();