<?php

include_once "Personne.class.php";

class Societe {
    private string $nom;
    private string $adress;
    private array $employes;

    // du coup la cardinalité droite est 0..1
    public function __construct (string $nom, string $adress, array $employes = null){
        $this->nom = $nom;
        $this->adress = $adress;
        $this->employeur = $employes;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of adress
     */ 
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @return  self
     */ 
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of employes
     */ 
    public function getEmployes()
    {
        return $this->employes;
    }

    /**
     * Set the value of employes
     *
     * @return  self
     */ 
    public function setEmployes($employes)
    {
        $this->employes = $employes;

        return $this;
    }

    public function addEmploye (Personne $nouvelEmploye) {
        $this->employes[] = $nouvelEmploye;
        //pour l'employé qu'on vient de rajouter on va le fixer/le set à la société $this que je suis en train de manipuler
        $nouvelEmploye->setEmployeur($this);
    }
}

?>