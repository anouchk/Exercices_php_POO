<?php

class A {
	// static ça fait que l'attribut sera partagée par tous les objets
	private static $attribut1 = 8;

	public function methode1() {
		echo static::$attribut1;
	}
}

class B extends A {
	public function methodeCool(){
		parent::methode1();
	}
}

(new B)->methodeCool();