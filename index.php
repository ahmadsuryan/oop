
<?php

require_once 'animal.php';

$sheep = new Animal("shaun");

echo $sheep->get_name()."<br>"; // "shaun"
echo $sheep->get_legs()."<br>"; // 2
echo $sheep->get_cold_blooded()."<br>"; // false

?>
