<?php 

interface InfoProduk{
	 public function getInfoProduk();
}

abstract class Produk {
	//Property
	// visibility 
	// 	~ public(publik/dimana saja), 
	// 	~ protected(hanya dapat digunakan dlm sebuah kelas beserta turunannya), dan 
	// 	~ private(hanya dapat digunakan di dalam sebuah kelas tertentu saja

	protected $judul, 
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
	
	
	abstract public function getInfo(); 
	

	
}


class Komik extends Produk implements InfoProduk {

	public $jmlHalaman;

	public function __construct ($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;

	}

	public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}

	public function getInfoProduk(){
		$str = "Komik :". $this->getInfo() ." -  {$this->jmlHalaman} Halaman.";

		return $str;
	}
}


class Game extends Produk implements InfoProduk{
	public $waktuMain;

	public function __construct ($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain=0){

		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->waktuMain = $waktuMain;

	}

	public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}

	public function getInfoProduk(){
		$str = "Game :". $this->getInfo() ."~  {$this->waktuMain} Jam.";

		return $str;
	}
}

class CetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk( Produk $produk){
		$this->daftarProduk[] = $produk;
	}

	public function cetak (){
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $p) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}
 		
		return $str;
	}
}



$produk1 = new Komik(" Naruto",  "Mas ashi Kishimoto",  "Shonen Jump",  30000, 100); 
$produk2 = new Game(" Uncharted", "Neil Druckmann",  "Sony Computer",  2500000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1);
$cetakProduk->tambahProduk( $produk2);
echo $cetakProduk->cetak();


