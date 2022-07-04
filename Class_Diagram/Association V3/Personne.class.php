<?php

include_once "Societe.class.php";

class Personne {
    private string $nom;
    private string $prenom;
    private DateTime $date_naissance;
    private Societe $employeur; // ici on incruste un objet: et donc on crée le lien entre deux classes

    // = null: le parametre est optionnel 0..1 dans le schéma pas 1
    public function __construct (string $nom, string $prenom, DateTime $date, Societe $employeur = null){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date;
        // si pas défini on ne peut pas l'injecter: s'il n'est pas null (optionnel) alors il est true car un objet est évalué comme trye
        if ($employeur == true) // (!is_null ($employeur))
        {
            $this->employeur = $employeur; // injection de dépendance 
        }
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
    public function setEmployeur($employeur)  // injection de dépendance
    {
        $this->employeur = $employeur;
        // $employeur->addEmploye($this);

        return $this;
    }
}

?>