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
    
    $this->view('login', []);
	}
}
 ?>
