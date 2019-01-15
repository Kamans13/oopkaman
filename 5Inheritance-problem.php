<?php 

// Jualan Produk
// Komik
// Game

class Produk {
	//Property
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain,
		   $tipe;

	// Construction method
    public function __construct( $judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0, $waktuMain=0, $tipe ){
    	$this-> judul = $judul;
    	$this-> penulis = $penulis;
    	$this-> penerbit = $penulis;
    	$this-> harga =  $harga;
    	$this-> jmlHalaman = $jmlHalaman;
    	$this-> waktuMain = $waktuMain;
    	$this-> tipe = $tipe; 
    }

	// Method
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	
	public function getInfoLengkap(){
		 // Komik : Naruto | Masashi Kishimoto, Shonen Jump (RP. 30000) - 100 Halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if( $this->tipe == "Komik"){
			$str .= " - {$this->jmlHalaman} Halaman.";
		} else if($this->tipe == "Game"){
			$str .= " - {$this->waktuMain} Jam.";
		}

		return $str;
	}
}

class CetakInfoProduk {
	public function cetak ( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new Produk(" Naruto",  "Mas ashi Kishimoto",  "Shonen Jump",  30000, 100, 0, "Komik" ); 
$produk2 = new Produk("Uncharted", "Neil Druckmann",  "Sony Computer",  2500000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

// Komik : Naruto | Masashi Kishimoto, Shonen Jump (RP. 30000) - 100 Halaman.
// Game : Uncharted | Neil Druckmann, Sony COmputer (RP. 2500000) - 50 Jam.
