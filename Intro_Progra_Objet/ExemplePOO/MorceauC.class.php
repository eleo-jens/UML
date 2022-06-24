<?php

class MorceauC {
    //structure de données
    public string $titre; //une propriété de la classe
    public float $prix;
    public int $duree;
    //public Auteur $auteur; //on peut avoir une propriété qui est un objet : n:1 1:n
    
    //constructeur reçoit les valeurs des propriétes: façon optimale pour construire les objets
    public function __construct(string $t, int $d, float $p)
    {
        $this->titre = $t;
        $this->duree = $d;
        $this->prix = $p;
    }
    
    // fonctionnalité: méthodes de la classe: les fonctions
    public function afficher (){
        echo "<br>";
        echo "<br>Le titre du morceau : " . $this->titre;
        echo "<br>Le duree du morceau: " . $this->duree;
        echo "<br>Le prix du morceau: " . $this->prix;
    }

}

?>