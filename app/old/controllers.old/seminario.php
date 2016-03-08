<?php namespace controllers;

use \helpers\url as Url;
use core\view as View;
use helpers\session as Session;
use core\language as Lang;

class Seminario extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\seminario();
	}

	public function index(){
		Lang::Load(array('seminario_basic'));
		$data['lang'] = Lang::GetAll();
		$data['title'] = Lang::Get('home_title');
		$data['title'] = '';
		$data['isBienvenida'] = 'class="active"';
		//$data['lang'] = \helpers\session::get('language') == 'en' ? 'es' : 'en';

		View::rendertemplate('header', $data);
		View::render('index', $data);
		View::rendertemplate('footer', $data);

	}

	public function language(){

		$language = \helpers\session::get('language');

		
		//echo \core\error::display("Could not load language file '$language/$filename.php'");
		//\helpers\session::destroy('language');
		//\helpers\session::set('language', 'en');
		
		if(strcmp($language, 'en') == 0){
			Lang::set('es');
			//\helpers\session::set('language', 'es');
		} else{
			Lang::set('en');
			//\helpers\session::set('language', 'en');
		}

		Url::previous();
	}
}
?>