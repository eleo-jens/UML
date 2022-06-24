<?php

// on va utiliser les classes 
include "./Morceau.class.php";

$morceau1 = new Morceau(); //un objet ou une instance
$morceau2 = new Morceau();
var_dump($morceau1);
var_dump($morceau2);

// affecter une propriété: propriété = valeur
$morceau1->titre = "Lalala"; // en C# on utilise le . au lieu de ->: exemple: morceau1.titre = "Lalala";
$morceau1->duree = 500;
$morceau1->prix = 2;

//ceci n'est pas optimal: on va faire un constructeur
$morceau2->titre = "Hello"; // en C# on utilise le . au lieu de ->: exemple: morceau1.titre = "Lalala";
$morceau2->duree = 400;
$morceau2->prix = 3;
