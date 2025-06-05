<?php
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

// Release 0
$sheep = new Animal("shaun");
echo $sheep->name . "\n";           // shaun
echo $sheep->legs . "\n";           // 4
echo $sheep->cold_blooded . "\n";   // no

echo "\n <br>";

// Release 1
$sungokong = new Ape("kera sakti......");
echo $sungokong->name . "\n";       // kera sakti
echo $sungokong->legs . "\n";       // 2
$sungokong->yell();                 // Auooo

echo "\n <br>";

$kodok = new Frog("Katak");
echo $kodok->name . "\n";           // Katak
echo $kodok->legs . "\n";           // 4
$kodok->jump();                     // hop hop

?>
