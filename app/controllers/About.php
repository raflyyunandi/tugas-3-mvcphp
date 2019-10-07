<?php 

class About extends Controller{
	//public function page() {
		//echo "About/page";
	//public function index($nama, $pekerjaan) {
	public function index($nama = 'Rafly', $pekerjaan = 'Gamer',$umur = 32) {
		//echo "Halo nama saya $nama, saya adalah $pekerjaan, saya berumur $umur tahun. ";
		$data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view ('templates/header', $data);

		$this->view ('about/index', $data);
		
		$this->view ('templates/footer');
	}

	public function page() {
		//echo "About/page";
		$data['judul'] = 'My Page';
		$this->view ('templates/header', $data);

		$this->view ('about/page');

		$this->view ('templates/footer');
	}
	
}


 ?>