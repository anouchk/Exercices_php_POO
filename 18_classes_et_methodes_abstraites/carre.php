<?php

class Carre extends Forme {
	private $cote = 4;

	public function aire () {
		return pow($this->cote, 2) ;
	}
}