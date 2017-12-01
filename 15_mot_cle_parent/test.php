<?php

class A {
	public static $x = 4;
	public function toto() {
		echo "Je suis la méthode toto appelée depuis la classe A";
	}
}

class B extends A {
	public static $x = 5;
	public function tata() {
		echo parent::$x . '<br />';
		echo static::$x . '<br />';
		parent::toto();
		echo "Je suis la méthode tata appelée depuis la classe B";
	}

}

echo "<p>" . (new A)-> toto() . "</p>";
echo "<p>" . (new B)-> tata() . "</p>";