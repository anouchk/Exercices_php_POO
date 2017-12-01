<?php

class Str {
	public static function upper ($string) {
		return mb_strtoupper($string);
	}

	public  static function lower ($string) {
		return mb_strtolower($string);
	}

	public static function length ($string){
		return mb_strlen($string);
	}
}

// si les fonction n'étaient pas statiques
// $str = new Str ;
// echo $str->upper("toto est cool") . PHP_EOL;

echo Str::upper("toto est cool") . "<br />";
echo Str::lower("toto est cool") . "<br />";
echo Str::length("toto est cool") . "<br />";