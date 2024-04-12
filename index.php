<?php
require "auteur.php";
require "livre.php";

$a1 = new Auteur("Stephen", "King", 4892447793138);

$l1 = new Livre($a1, "Ca", 1138, new DateTime("1986-01-01"), 20, 1);
$l2 = new Livre($a1, "Simetierre", 374, new DateTime("1983-01-01"), 15, 2);
$l3 = new Livre($a1, "Le Fléau", 823, new DateTime("1978-01-01"), 14, 3);
$l4 = new Livre($a1, "Shining", 447, new DateTime("1977-01-01"), 16, 4);


// echo $a1 . "<br>";
// echo $l1 . "<br>";

echo $a1->bibliographie() . "<br>";


?>