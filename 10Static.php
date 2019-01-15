<?php 

class COntohStatic{
	public static $angka = 1;

	public static function halo(){
		return "Halo ". self::$angka++ . " kali";
	}
}

echo ContohStatic::$angka;
echo"<br>";
echo ContohStatic::halo();
echo"<hr>";
echo COntohStatic::halo();