<?php
// // classe abstraite : qu'on ne peut pas instancier
// abstract class Forme {
// 	// methode abstraite : qui n'a pas de corps, pas de contenu. Ce sera défini au niveau des classes filles
// 	abstract public function aire();
// }

interface Forme {
	public function aire();
}

