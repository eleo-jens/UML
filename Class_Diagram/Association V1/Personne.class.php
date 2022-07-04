<?php

include_once "Societe.class.php";

class Personne {
    public string $nom;
    public string $prenom;
    public DateTime $date_naissance;
    public Societe $employeur; // ici on incruste un objet: et donc on crée le lien entre deux classes

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
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of date_naissance
     */ 
    public function getDate_naissance()
    {
        return $this->date_naissance;
    }

    /**
     * Set the value of date_naissance
     *
     * @return  self
     */ 
    public function setDate_naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    /**
     * Get the value of employeur
     */ 
    public function getEmployeur()
    {
        return $this->employeur;
    }

    /**
     * Set the value of employeur
     *
     * @return  self
     */ 
    public function setEmployeur($employeur)
    {
        $this->employeur = $employeur;
        // $employeur->employes[] = $this;

        return $this;
    }
}

?>