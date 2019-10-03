<?php 

class App{
	public function __construct(){
		// var_dump($_GET);
		$url = $this->parseURL();
		var_dump($url);
	}

	public function parseURL(){

		if (isset($_GET['url'])){
		$url = $_GET['url'];
		$url = filter_var($url,FILTER_SANITAZE_URL);
		$url = explode('/', $url);
		return $url;
		}
	}

 }
 
 ?>
