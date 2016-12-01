<?php
/**
* Auth controller
*/
class Auth extends Controller
{

	function __construct()
	{

	}

  //Page de login
	public function index()
	{
    $auth = $this->model('Users');

    //Si il existe une variable POST
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
      //Verifie si l'utilisateur existe
      //Si oui on créer une session
    }

    //Sinon
    //Envoyer message erreur
    $this->view('login', []);
	}

  // Page d'enregistrement
  public function register() {
    //Si variable POST
    if (!empty([$_POST])) {
			//Verifier les valeurs
			$values = [];
			foreach ($_POST as $post) {
				array_push(addslashes(htmlentities($post)));
			}
      $auth = $this->model('Users');
      //Verifier si l'utilisateur n'existe pas
      if (!$auth->isUserExists($values[0])) {
        //Enregistre l'utilisateur
				$auth->createNewUser($values);
      }
    }

    $this->view('register', []);
  }
}
 ?>
