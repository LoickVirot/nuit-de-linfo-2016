<?php
/**
* Auth controller
*/
class Auth extends Controller
{

	function __construct()
	{

	}

	public function index()
	{
    $auth = $this->model('Users');

    //Si il existe une variable POST
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
      echo 'coucou';
    }
    //Verifie si l'utilisateur existe
    //Si oui on créer une session

    //Sinon
    //Envoyer message erreur
    $this->view('login', []);
	}
}
 ?>
