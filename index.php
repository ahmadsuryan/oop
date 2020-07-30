<?php

require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

$sheep = new Animal("shaun");

echo $sheep->get_name()."<br>"; // "shaun"
echo $sheep->get_legs()."<br>"; // 2
echo $sheep->get_cold_blooded()."<br>"; // false

?>
