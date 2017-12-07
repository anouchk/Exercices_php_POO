<?php

require 'vendor/autoload.php';

(new Image)->like();
(new Video)->dislike();

(new Chien) -> communiquer();
(new Chat) -> communiquer();

echo (new Carre(4))->aire() . "<br />";
echo (new Cercle(3))->aire() . "<br />";
echo (new Triangle(3, 2))->aire() . "<br />";

function toto(Animal $animal) {
	$animal ->communiquer();
}

toto(new Chat);
toto(new Chien);