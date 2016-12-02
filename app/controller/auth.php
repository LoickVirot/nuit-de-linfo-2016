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
    //Si variable POST sont ok
    if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])) {
			$username = addslashes(htmlentities($_POST['username']));
			$firstname = addslashes(htmlentities($_POST['firstname']));
			$surname = addslashes(htmlentities($_POST['surname']));
			$password = addslashes(htmlentities(hash('SHA256', $_POST['password'])));
			$email = addslashes(htmlentities($_POST['email']));
			$biography = addslashes(htmlentities($_POST['biography']));

			$auth = $this->model('Users');
      //Verifier si l'utilisateur n'existe pas
      if (!$auth->isUserExists($username)) {
        //Enregistre l'utilisateur
				//$surname, $firstname, $username, $password, $email, $biography, $role
				try {
					$res = $auth->createNewUser($surname, $firstname, $username, $password, $email, $biography, 1);
				} catch (Exception $e) {
					$this->view('register', ['error' => $e->getMessage()]);
				}
				header('Location:/auth');
      }
			else {
				$this->view('register', ['error' => 'Il existe deja un compte à ce nom.']);
			}
    }
		else {
			$this->view('register', ['error' => 'Veuillez renseigner tous les champs']);
		}

    $this->view('register', []);
  }
}
 ?>
