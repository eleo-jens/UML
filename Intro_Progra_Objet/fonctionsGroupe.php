<?php

function afficher(array $morceau)
{
    echo "\nLes données du morceaux sont: ";    
    foreach ($morceau as $cle => $valeur)
    {
        echo "\n" . $cle . " : " . $valeur;
    }
}