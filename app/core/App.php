<?php
/**
* Manage navigation of the app including requested controller
*/
class App
{
	/**
	*	@var string Homepage controller (Default: 'home')
	**/
	protected $controller = 'home';
	/**
	*	@var string Default method called by the homepage controller (Default: 'index')
	**/
	protected $method = 'index';
	/**
	*	@var array Parameters sent by URL
	**/
	protected $params = [];

	function __construct()
	{
		//Connect database
		require_once 'Database.php';
		$db = new Database;

		//Check URL
		$url = $this->parseUrl();

		//Check if is exist a controller correspond to the first part of the URL. "home" by default
		if (file_exists("../app/controller/".$url[0].".php")) {
			$this->controller = $url[0];
			unset($url[0]);
		}

		//require controller
		require_once '../app/controller/'.$this->controller.'.php';
		$this->controller = new $this->controller;

		//Same with method. "index" by default
		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		$this->params = $url ? array_values($url) : [];

		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	/**
	* Explode url to listen wich controller, method and parametters are asked
	* @return array Exploded url ([0] = controller, [1] = method, other are parametters)
	**/
	protected function parseUrl()
	{
		if (isset($_GET['url'])) {
			return $url = explode('/', $_GET['url']);
		}
	}
}
 ?>
