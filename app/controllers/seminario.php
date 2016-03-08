<?php namespace controllers;

use \core\view;
use \helpers\cookie;
use helpers\url;

class Seminario extends \core\controller{
	
	private $_model;

	public function __construct(){
		$this->_model = new \models\seminario();
	}

	public function index(){
		$data['title'] = '';
		$data['description'] = 'El propósito del seminario es ofrecer a los asistentes la voz de unos ponentes de alta relevancia que difícilmente coincidirían en un acto debido a sus agendas';
		$data['isBienvenida'] = 'class="active"';
		//setcookie('lang', 'es', time() + (86400 * 30), "/");
		//Cookie::set('hole','en');
		View::rendertemplate('header', $data);
		View::render('index', $data);
		View::rendertemplate('footer', $data);

	}
	public function lang(){
		if(strcmp(Cookie::get('choose_language'), 'es') == 0){
			Cookie::set('choose_language', 'en');
			//setcookie('lang', 'en', time() + (86400 * 30), "/");
		}
		else{
			Cookie::set('choose_language', 'es');
		}		
		Url::previous();
	}
    public function uploadImage()
    {
	/*if(isset($_POST['firstName'])){
		//echo json_encode(["Message" => "El nombre que llega es ".$_POST['firstName'], "Status" => "OK", "userId" => $_REQUEST['userId']]);
		//return var_dump(array('Status' => true, 'Nombre'=> $_POST['firstName']));
	}
	else{

		//echo json_encode(["Message" => "Man no llega ni el nombre a esta verga.", "Status" => "Error", "userId" => $_REQUEST['userId']]);	
		return var_dump(array('Status' => false));
	}*/
	// bail if there were no upload forms
	   if(empty($_FILES))
		return var_dump("No hay imagen");

        if(file_exists($_FILES['file']['tmp_name']) || is_uploaded_file($_FILES['file']['tmp_name'])) {
			if ($_FILES['file']['size'] > 800*1024) {
			    return var_dump('File size too large');
			}
			$userProfilePicture = 'profilePictures/'.$_FILES['file']['name'];
            move_uploaded_file($_FILES['file']['tmp_name'], $userProfilePicture);
            return var_dump($userProfilePicture);
        }
        else{
            return var_dump(false);
        }

    }
}
?>
