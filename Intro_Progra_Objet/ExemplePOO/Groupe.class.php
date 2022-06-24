<?php

// Une classe
class Groupe {
    // La structure de données de la classe: ses propriétés:
    public string $nom;
    public string $origin;
    public string $genre;
    public DateTime $date_creation; //DateTime est un objet d'une classe 

    // Un constructeur pour construire les instances de la classe: 
    public function __construct(string $n, string $o, string $g, DateTime $d) {
        $this->nom = $n;
        $this->origin = $o;
        $this->genre = $g;
        $this->date_creation = $d;
    }

    // Les méthodes de la classe: ses fonctions
    public function afficher() {
        echo "<br>";
        echo "<br>Le nom du groupe est: " . $this->nom;
        echo "<br>L'origine du groupe est: " . $this->origin;
        echo "<br>Le genre du groupe est: " . $this->genre;
        echo "<br>La date de création du groupe est: " . $this->date_creation->format('d-m-Y');
    }
}







