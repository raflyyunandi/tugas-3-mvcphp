<?php 

class Mahasiswa_model {
	  // private $mhs = [
   //      [
   //          "nama" => "Rafly Yunandi A",
   //          "nrp" => "173040028",
   //          "email" => "raflyyunandia@mail.unpas.ac.id",
   //          "jurusan" => "Teknik Informatika"
   //      ],
   //      [
   //          "nama" => "Andrean",
   //          "nrp" => "173030041",
   //          "email" => "Andrean12@mail.unpas.ac.id",
   //          "jurusan" => "Teknik Perencanaan & Wilayah Kota"
   //      ],
   //      [
   //          "nama" => "Johny",
   //          "nrp" => "173020028",
   //          "email" => "Johny44@mail.unpas.ac.id",
   //          "jurusan" => "Teknik Mesin"
   //      ],
   //      [
   //          "nama" => "Edan",
   //          "nrp" => "183010019",
   //          "email" => "Edan33@mail.unpas.ac.id",
   //          "jurusan" => "Teknologi Pangan"
   //      ],
   //      [
   //          "nama" => "Ciciuk",
   //          "nrp" => "133060032",
   //          "email" => "Ciciuk223@mail.unpas.ac.id",
   //          "jurusan" => "Teknik Industri"
   //      ],
   //      [
   //          "nama" => "Markoso",
   //          "nrp" => "163050035",
   //          "email" => "Markoso@mail.unpas.ac.id",
   //          "jurusan" => "Teknik Lingkungan"
   //      ]
   //  ];
		
	private $dbh;
	private $stmt;
	
	public function __construct() {
		$dsn = 'mysql:host=localhost;dbname=phpmvc';
	try {
		$this->dbh = new PDO($dsn, 'root', '');
	} catch (PDOException $e) {
		die ($e->getMessage());
	}

	}

	public function getAllMahasiswa() {
		//return $this->mhs;
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}

 ?>