<?php
use Acme\{Person, Team, League} ;

echo random_number() . " <br />";

new Song;

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