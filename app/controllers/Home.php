<?php 

class Home extends Controller {
	public function index() {
		//echo "Home/index";
		$data['judul'] = 'Home';
		$this->view('templates/header', $data);
		$this->view('home/index');
		$this->view('templates/footer');
	}
}


 ?>