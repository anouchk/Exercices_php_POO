<?php

namespace Acme;

class Team {
	private $name;
	private $nombre_fans = 0;

	public function __construct($name){
		$this->name = $name;
	}

	public function get_name(){
		return $this->name;
	}

	public function get_nombre_fans(){
		return $this->nombre_fans;
	}

	public function favorite(){
		$this->nombre_fans++;
	}
}