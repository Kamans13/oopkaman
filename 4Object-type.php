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
    public function __construct( $judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga=0 ){
    	$this-> judul = $judul;
    	$this-> penulis = $penulis;
    	$this-> penerbit = $penulis;
    	$this-> harga =  $harga;
    }

	// Method
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	
}

class CetakInfoProduk {
	public function cetak ( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new Produk(" Naruto",  "Mas ashi Kishimoto",  " Shonen Jump",  30000 ); 
$produk2 = new Produk("Uncharted", "Neil Druckmann",  " Sony Computer",  2500000);

echo"Komik :" . $produk1->getLabel();
echo "<br>";
echo "Game :" . $produk2->getLabel();
echo "<br>";
$infoproduk1 = new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);