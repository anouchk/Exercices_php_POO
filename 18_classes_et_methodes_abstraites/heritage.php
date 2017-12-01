<?php

require "forme.php";
require "carre.php";
require "triangle.php";
require "cercle.php";

echo (new Carre)->aire() . "<br />";
echo (new Triangle)->aire() . "<br />";
echo (new Cercle)->aire() . "<br />";