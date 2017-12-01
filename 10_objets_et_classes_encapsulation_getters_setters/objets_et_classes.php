<?php
class Person  {
	// attributs
	public $first_name ;
	public $last_name ;
	public $age ;

	// constructeur appelé à chaque fois qu'on instancie un objet de cette classe
	public function __construct($first_name, $last_name, $age) {
		$this->first_name = $first_name ;
		$this->last_name = $last_name ;
		$this->age = $age ;
	}

	public function danser() {
		echo $this->last_name . " est en train de danser. <br />";
	}

	public function full_name() {
		return $this->first_name . ' ' . $this->last_name . '<br />';
	}

	public function reverse_full_name() {
		return sprintf("%s %s", $this->last_name, $this->first_name) ;
	}
}

$honore = new Person ('Honoré', 'Hounwouanou', 146) ; //('honoré', "hounwouanou", 146) ;
$toto = new Person ('Toto', 'Dupont', 4) ;
$tata = new Person ('Tata', 'Gateau', 18) ;

echo "<pre>";
var_dump($honore->first_name) ;
var_dump($honore->last_name) ;
var_dump($honore->age) ;
var_dump($toto->first_name) ;
var_dump($toto->last_name) ;
var_dump($toto->age) ;

echo "<br />" ;
$honore->danser();
$toto->danser();

$nom_complet_honore = $honore->full_name();
$nom_complet_toto = $toto->full_name();

echo "<br />" ;
echo $nom_complet_toto ;
echo $nom_complet_honore ;

$nom_complet_envers_honore = $honore->reverse_full_name();
$nom_complet_envers_toto = $toto->reverse_full_name();

echo "<br />" ;
echo $nom_complet_envers_toto ;
echo "<br />" ;
echo $nom_complet_envers_honore ;