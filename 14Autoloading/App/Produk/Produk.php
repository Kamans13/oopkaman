<?php 
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