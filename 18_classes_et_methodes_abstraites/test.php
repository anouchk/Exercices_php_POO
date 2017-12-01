<?php

class A {
	public function toto() {
		echo "toto de A";
	}
	
}

class B extends A {
	public function toto(){
		echo "toto de B";
	}
	
}

echo (new B)->toto() . "<br />";
echo (new A)->toto() . "<br />";