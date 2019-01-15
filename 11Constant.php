<?php  

// define ('NAMA', 'Kaman Septia');
// echo NAMA;

// echo "<br>";

// const UMUR = 16;
// echo UMUR;

// class Coba {
// 	const NAMA ="Kaman Septia";
// }
// echo Coba::NAMA;

// echo __FILE__;

// function coba(){
// 	return __FUNCTION__;
// }
// echo coba();

class Coba{
	public $class = __CLASS__;
}

$obj = new Coba;
echo $obj->class;

?>