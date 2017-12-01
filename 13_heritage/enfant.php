<?php

class Enfant extends Papa{
	public function get_get_nombre_de_tetes(){
		return $this->get_nombre_de_tetes();
	}
}