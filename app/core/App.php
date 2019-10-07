<?php 

class App{
	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];

	public function __construct(){
		// var_dump($_GET);
		$url = $this->parseURL();
		// var_dump($url);
		if (file_exists('../app/controller/' . $url[0] . '.php')) {
			$this->controller = $url[0];
			unset($url[0]);
		}
	}

	require_once '../app/controller' . $this->controller . '.php';
	$this->controller = new $this->controller;

	public function parseURL(){

		if (isset($_GET['url'])){
		$url = rtrim($_GET['url'], '/');
		$url = filter_var($url, FILTER_SANITIZE_URL);
		$url = explode('/', $url);
		return $url;
		}
	}

 }
 
 ?>
