<?php

//on veut stocker des donnees de morceaux; dans l'exemple 1 on a cree des variables une par une
// mais ce n'est pas pratique, donc on cree un array associatif par morceau dans l'exemple 2.

// Nos données

    $morceau = [
        'titre' => 'And justice for all',
        'duree' => '300',
        'prix' => 2];
    
    $morceau2 = [
        'titre' => 'Mercy',
        'duree' => '350',
        'prix' => 2.5];
        
        $groupe = [
            'nom' => 'Muse',
            'nationalite' => 'UK'
        ];
        
        $groupe2 = [
            'nom' => 'Metallica',
            'nationalite' => 'USA'
        ];
        
        // inclure la fonctionnalité des morceaux
        include "./fonctionsMorceau.php";
        include "./fonctionsGroupe.php";
        
        // utilisation des fonctions
        
        foreach ($morceau as $cle => $valeur){
            echo "\n" . $cle . " : " . $valeur;
        }
        
        echo "\nPrix avec la TVA: " . prixTVA($morceau);
        
    titreMajuscules($morceau);
    echo "\nTitre majuscule: " . $morceau['titre'];

    afficher ($morceau);
    afficher ($morceau2);
    afficher ($groupe);

?>