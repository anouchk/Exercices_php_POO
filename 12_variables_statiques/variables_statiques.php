<?php
class Person  {
	// attributs
	public $first_name ;
	public $last_name ;
	public $age ;
	public static $total_count =0;

	// constructeur appelé à chaque fois qu'on instancie un objet de cette classe
	public function __construct($first_name, $last_name, $age) {
		//this fait référence à 'objet courant'
		$this->first_name = $first_name ;
		$this->last_name = $last_name ;
		$this->age = $age ;
		// on incrémente dès qu'on instancie un nouvel objet
		static::$total_count++;


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

	public function get_age_in_days () {
		return $this->age*365;
	}	

	public function set_age($age) {
		if ($age>0) {
			$this->age = $age;
		}
	}
}

$honore = new Person ('Honoré', 'Hounwouanou', 146) ; //('honoré', "hounwouanou", 146) ;
$toto = new Person ('Toto', 'Dupont', 4) ;
$tata = new Person ('Tata', 'Gateau', 18) ;

echo Person::$total_count . PHP_EOL;
// :: opérateur de résolution de portée ou 'scope resolution operator'

