<?php

require_once("animal.php");
require_once("frog.php");
require_once("ape.php");


// Object Shaun
$shaun = new Animal("shaun");

echo "Name : " .$shaun->name . "<br>";
echo "Legs : " . $shaun->legs . "<br>";
echo "cold_blooded : " . $shaun->cold_blooded . "<br><br>";


// Object Frog
$frog = new Frog("Buduk");

echo "Name : " . $frog->name . "<br>";
echo "Legs : " . $frog->legs . "<br>";
echo "Cold_blooded : " . $frog->cold_blooded . "<br>";
echo "Jump : " . $frog->jump() . "<br><br>";

// Object Ape
$ape = new Ape("Kera Sakti");

echo "Name : " . $ape->name . "<br>";
echo "Legs : " . $ape->legs . "<br>";
echo "Cold_blooded : " . $ape->cold_blooded . "<br>";
echo "Jump : " . $ape->yell() . "<br>";


