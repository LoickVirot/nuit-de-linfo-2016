<?php
/**
* Member controller
*/
class Member extends Controller
{

	function __construct()
	{

	}

  //Page de login
	public function index()
	{
    if (!empty($_SESSION)) {
      $this->view('member', []);
    }
    else {
      header('Location:/')
    }
	}
}
 ?>
