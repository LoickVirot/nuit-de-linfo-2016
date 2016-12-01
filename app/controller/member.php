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

    $this->view('member', []);
	}
}
 ?>
