<?php 

// creation de fonction

//dans la programmation fonctionnelle on fait des fonctions qui renvoient
function prixTVA (array $morceau): float 
{
    $prixTVA = $morceau['prix'] * 1.21;
    return $prixTVA;
}

// rajouter & pour que cela soit en référence car autrement la valeur est juste modifiée en copie et comme
//on ne renvoit pas la copie, il faut ici modifier l'originale par une reference
function titreMajuscules (array &$morceau) : void {
    $morceau['titre'] = strtoupper($morceau['titre']);
}

function afficher(array $morceau)
{
    echo "\nLes données du morceaux sont: ";    
    foreach ($morceau as $cle => $valeur)
    {
        echo "\n" . $cle . " : " . $valeur;
    }
}