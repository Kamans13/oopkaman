<?php 

// Jualan Produk
// Komik
// Game

class Produk {
	//Property
	// visibility 
	// 	~ public(publik/dimana saja), 
	// 	~ protected(hanya dapat digunakan dlm sebuah kelas beserta turunannya), dan 
	// 	~ private(hanya dapat digunakan di dalam sebuah kelas tertentu saja

	private $judul, 
		   $penulis,
		   $penerbit,
		   $harga,
		   $diskon = 0;
			   
		

	// Construction method
    public function __construct( $judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga=0){
    	$this-> judul = $judul;
    	$this-> penulis = $penulis;
    	$this-> penerbit = $penerbit;
    	$this-> harga =  $harga;
    	
    }

	// Method
    	// setter
    	public function setJudul( $judul){
    		$this->judul = $judul;
    	}

    	public function setPenulis ($penulis){
    		$this->penulis = $penulis;
    	}

    	public function setPenerbit($penerbit){
    		$this->penerbit = $penerbit;
    	}

    	public function setHarga($harga){
    		$this->harga = $harga;
    	}

    	public function setDiskon( $diskon ){
    	$this->diskon = $diskon;
    }

    	// getter
	   public function getJudul(){
	   	return $this->judul;
	   }

	   public function getPenulis(){
	   	return $this->penulis;
	   }

	   public function getPenerbit(){
	   	return $this->penerbit;
	   }

		public function getHarga(){
			return $this->harga - ( $this->harga * $this->diskon / 100 );
	   }


	   public function getDiskon(){
	   	return $this->diskon;
	   }

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
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

// setter
$produk1->setPenulis("Kaman Septia");
// getter
echo $produk1->getPenulis();

