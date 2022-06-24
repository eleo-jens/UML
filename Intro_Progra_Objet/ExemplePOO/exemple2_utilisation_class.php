<?php

// on va utiliser les classes 
include "./MorceauC.class.php";

//on va creer un objet via un constructeur qui se trouve dans l'autre fichier
$m1 = new MorceauC("Lalala", 300, 2.5);
var_dump($m1);

$m2 = new MorceauC("Hello", 200, 5);
var_dump($m2);

//pour afficher les valeurs des propriétés "manuellement"
// echo "\nLe titre de m1 est : " . $m1->titre;
// echo "\nLe titre de m1 est : " . $m2->titre;

//pour afficher via une méthode (fonction de classe)
$m1->afficher();
$m2->afficher();