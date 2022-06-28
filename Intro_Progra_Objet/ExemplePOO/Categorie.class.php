<?php

class Categorie {
    // définir les propriétés
    public string $nom;
    public string $description;

    // définir les méthodes
    public function __construct (string $n, string $d) {
        $this->nom = $n;
        $this->description = $d;
    }

    public function afficher() {
        echo "<br><br>Categorie : "; 
        echo "<br>Nom : " . $this->nom;
        echo "<br>Description : " . $this->description; 
    }
}

?>