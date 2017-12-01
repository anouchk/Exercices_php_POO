@<?php
class Bank_account {
	private static $tax = 0.08 ;
	// const TAX = 0.08;
	public $account_number ;
	public $balance = 0;

	public function __construct($account_number) {
		$this->account_number = $account_number ;
		static::$tax = rand(0,10);
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

	public static function get_tax() {
		return static::$tax;
	}
}

$compte_bancaire_honore = new Bank_account ("987365876") ;
$compte_bancaire_honore->set_balance(50000);
//var_dump(Bank_account::$tax) ;
echo Bank_account::get_tax();
// echo Bank_account::TAX;
