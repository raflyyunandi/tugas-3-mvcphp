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
		
	// private $dbh;
	// private $stmt;
	
	// public function __construct() {
	// 	$dsn = 'mysql:host=localhost;dbname=phpmvc';
	// try {
	// 	$this->dbh = new PDO($dsn, 'root', '');
	// } catch (PDOException $e) {
	// 	die ($e->getMessage());
	// }

	// }

  
    private $table = 'mahasiswa';
    private $db;

    public function __construct(){
        $this->db=new Database;
    }

    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

       public function tambahDataMahasiswa($data){
        $query = "INSERT INTO mahasiswa
                    VALUES ('', :nama, :nrp, :email, :jurusan)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}

 ?>