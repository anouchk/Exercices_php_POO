<?php

class Cercle implements Forme {
	private $rayon;

	public function __construct($rayon) {
		$this->rayon = $rayon;
	}

	public function aire () {
		return pi() * pow($this->rayon, 2);
	}
}