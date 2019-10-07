<?php 

class Mahasiswa_model {
	  private $mhs = [
        [
            "nama" => "Rafly Yunandi A",
            "nrp" => "173040028",
            "email" => "satria.bagus18@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Andrean",
            "nrp" => "173030041",
            "email" => "Andrean12@mail.unpas.ac.id",
            "jurusan" => "Teknik Perencanaan & Wilayah Kota"
        ],
        [
            "nama" => "Johny",
            "nrp" => "173020028",
            "email" => "Johny44@mail.unpas.ac.id",
            "jurusan" => "Teknik Mesin"
        ],
        [
            "nama" => "Edan",
            "nrp" => "183010019",
            "email" => "Edan33@mail.unpas.ac.id",
            "jurusan" => "Teknologi Pangan"
        ],
        [
            "nama" => "Ciciuk",
            "nrp" => "133060032",
            "email" => "Ciciuk223@mail.unpas.ac.id",
            "jurusan" => "Teknik Industri"
        ],
        [
            "nama" => "Markoso",
            "nrp" => "163050035",
            "email" => "Markoso@mail.unpas.ac.id",
            "jurusan" => "Teknik Lingkungan"
        ]
    ];
		
	public function getAllMahasiswa() {
		return $this->mhs;
	}

}

 ?>