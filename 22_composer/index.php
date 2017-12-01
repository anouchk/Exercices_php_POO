<?php
// require the Faker autoloader
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo $faker->name . "<br />";
echo $faker->address . "<br />";
echo $faker->text . "<br />";
