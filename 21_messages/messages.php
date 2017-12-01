<?php

class Person {
	private $name;

	public function __construct($name){
		$this->name = $name;
	}

	public function favorite(Team $team) {
		$team->favorite();
	}
}

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

$honore = new Person ("Honore Hounwanou");
$caroline = new Person ("Caroline Dupont");


$barcelona = new Team("Barcelona");
$real_madrid = new Team("Real Madrid");

$honore->favorite($real_madrid);
$caroline->favorite($real_madrid);
$caroline->favorite($barcelona);

echo $barcelona->get_name() . " a " . $barcelona->get_nombre_fans() . " fans. <br />";
echo $real_madrid->get_name() . " a " . $real_madrid->get_nombre_fans() . " fans. <br />";

$liga = new League("Liga");
$liga->add_team($barcelona);
$liga->add_team($real_madrid);
echo $liga->get_name() . " a " .$liga->get_team_count() . " équipes. <br />";
