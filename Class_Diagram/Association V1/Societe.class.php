<?php

include_once "Personne.class.php";

class Societe {
    public string $nom;
    public string $adress;
    public array $employes;

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
    }
}

?>