<?php

namespace Acme;

Class League {
	private $name;
	private $teams;

	public function __construct($name){
		$this->name = $name;
		$this->teams = [];
	}
	
	// dans la fonction add_team, on oblige à ce que l'objet ajouté soit de la classe Team
	public function add_team( Team $team) {
		// syntaxe PHP pour ajouter un élément à un tableai
		$this->teams[] = $team;
	}

	public function get_team_count() {
		return count($this->teams);
	}

	public function get_name(){
		return $this->name;
	}

}