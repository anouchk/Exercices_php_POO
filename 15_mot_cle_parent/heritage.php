<?php
require "person.php";
require "policier.php";

echo (new Policier("Jean", "Dupont", 34, "sergent"))->reverse_full_name();