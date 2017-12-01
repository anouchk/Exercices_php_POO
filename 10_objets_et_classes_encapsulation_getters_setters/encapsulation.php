<?php
class Voiture {
	public $marque ;
	public $couleur ;

	public function demarrer(){
		echo "Vroum vroum" ;
	}

	public function arreter(){
		echo "Pummm" ;
	}

	public function klaxonner(){
		echo "Pim Pimm !!" ;
	}

	// il faut être dans la classe Voiture pour y avoir accès
	private function relier_fil_bleu_au_fil_rouge() {

	}
	// autre possibilité : protected. C'est lié à l'héritage : l'objet qui hérite de la classe, mais aussi les classes filles qui en héritent, y ont accès. 
}

Class Bank_account {
	public $account_number ;
	private $balance = 0;

	public function __construct($account_number) {
		$this->account_number = $account_number ;
	}

	// setter (fonction qui modifier des attributs) => ça permet de faire toutes les vérifications qu'on souhaite
	public function set_balance($balance) {
		if($balance < 10000) {
			throw new Exception("L'argent est trop petit !");	
		}
		$this->balance = $balance ;
	}

	// getter (fonction qui permet d'accéder à des attributs)
	public function get_balance_en_centimes() {
		return $this-> balance * 100;
	}
}

$compte_bancaire_honore = new Bank_account ("987365876") ;
echo "<pre>";
var_dump($compte_bancaire_honore) ;

// $compte_bancaire_honore->balance = 5000;
// var_dump($compte_bancaire_honore) ;

$compte_bancaire_honore->set_balance(50000);
var_dump($compte_bancaire_honore) ;
var_dump($compte_bancaire_honore->get_balance_en_centimes()); 