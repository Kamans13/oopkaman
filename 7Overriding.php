<?php 

// Jualan Produk
// Komik
// Game

class Produk {
	//Property
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga;
		   
		

	// Construction method
    public function __construct( $judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga=0){
    	$this-> judul = $judul;
    	$this-> penulis = $penulis;
    	$this-> penerbit = $penulis;
    	$this-> harga =  $harga;
    	
    }

	// Method
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	
	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}
}


class Komik extends Produk {

	public $jmlHalaman;

	public function __construct ($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;

	}

	public function getInfoProduk(){
		$str = "Komik :". parent::getInfoProduk() ." -  {$this->jmlHalaman} Halaman.";

		return $str;
	}
}


class Game extends Produk{
	public $waktuMain;

	public function __construct ($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain=0){

		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->waktuMain = $waktuMain;

	}

	public function getInfoProduk(){
		$str = "Game :". parent::getInfoProduk() ."~  {$this->waktuMain} Jam.";

		return $str;
	}
}

class CetakInfoProduk {
	public function cetak ( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new Komik(" Naruto",  "Mas ashi Kishimoto",  "Shonen Jump",  30000, 100); 
$produk2 = new Game(" Uncharted", "Neil Druckmann",  "Sony Computer",  2500000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

