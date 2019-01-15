<?php 

require_once 'App/Init.php';

// $produk1 = new Komik(" Naruto",  "Mas ashi Kishimoto",  "Shonen Jump",  30000, 100); 
// $produk2 = new Game(" Uncharted", "Neil Druckmann",  "Sony Computer",  2500000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1);
// $cetakProduk->tambahProduk( $produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUSer;
use App\Produk\User as ProdukUser;
new ServiceUser();
echo "<br>";
new ProdukUser();