<?php

class MorceauP {
    //structure de données
    private string $titre; //une propriété de la classe
    private float $prix;
    private int $duree;
    //public Auteur $auteur; //on peut avoir une propriété qui est un objet : n:1 1:n
    
    //constructeur reçoit les valeurs des propriétes: façon optimale pour construire les objets
    public function __construct(string $t, int $d, float $p)
    {
        $this->titre = $t;
        $this->duree = $d;
        $this->prix = $p;
    }

    public function setDuree (int $duree) {
        if ($duree < 0) {
            //crée un classe Exception qui crée une erreur
            throw new Exception ("Valeur doit être supérieure à 0.");
        }
        else {
            $this->duree = $duree;
        }
    }

    public function getDuree () {
        return $this->duree;
    }
    
    // fonctionnalité: méthodes de la classe: les fonctions
    public function afficher (){
        echo "<br>";
        echo "<br>Le titre du morceau : " . $this->titre;
        echo "<br>Le duree du morceau: " . $this->duree;
        echo "<br>Le prix du morceau: " . $this->prix;
    }


    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }
}

?>