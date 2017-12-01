<?php
class Policier extends Person {
	private $grade;

	public function __construct($first_name, $last_name, $age, $grade){
		$this->first_name = $first_name ;
		$this->last_name = $last_name ;
		$this->age = $age ;
		$this->grade = $grade ;
	}

	public function reverse_full_name() {
		return parent::reverse_full_name() . ', policier ' . $this->grade . '.' ;
	}
}
