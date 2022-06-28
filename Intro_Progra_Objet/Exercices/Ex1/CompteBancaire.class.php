<?php

// Créez une classe CompteBancaire qui contient les informations et 
// les opérations basiques d'un compte bancaire.
// Il faut pouvoir obtenir le solde du compte, enlever et rajouter un montant d'argent.
// On peut aussi bloquer et débloquer le compte

class CompteBancaire {
    //propriétes:
    private string $numero;
    private float $solde;
    private string $etat;

    //fonctionnalités:
    //ici on a crée un état par défaut, il est actif
    public function __construct(string $numero, float $solde, string $etat = "actif") {
        $this->numero = $numero;
        $this->solde = $solde;
        $this->etat = $etat;
    }

    // Get la value de compte
    public function getNumero() : string {
        return $this->numero;
    }
    
    // Get la value de solde
    public function getSolde() : int {
        return $this->solde;
    }
    
    // Get la value de etat
    public function getEtat() : string {
        return $this->etat;
    }
    
    // Set la value de numero
    public function setNumero(string $numero) {
        $this->numero = $numero;
    }

    // Set la value de solde
    public function setSolde(float $solde) {
        $this->solde = $solde;
    }
    
    // Set la value de etat
    public function setEtat (string $etat) {
        $this->etat = $etat;
    }

    // Afficher un compte
    public function afficher() {
        echo "<br><br> Le compte " . $this->numero. " contient " . $this->solde. " euros"; 
    }
    
    // Ajouter un montant
    public function ajouter_montant(float $montant) : bool {
        if ($this->etat == "actif") {
            $this->solde = $this->solde + $montant;
            return true;
        }
        else {
            return false;
        }
    }
    
    // Retirer un montant
    public function retirer_montant(float $montant) : bool {
        if ($this->etat == "bloqué") {
            $this->solde = $this->solde - $montant;
            return true;
        }
        else {
            return false;
        }
    }
}

?>