<?php

// On développe une application d'e-commerce et on veut représenter 
// les produits en utilisant une classe. Les informations à stocker 
// seront un code, le nom et le prix de chaque produit. 
// Créez le code correspondant à cette classe Product (dans un autre fichier) 
// et testez-la. A part des fonctions de base (get et set), 
// créez une autre pour afficher les infos d'un produit sur le site web.

// Rajoutez une méthode à la classe précédente capable d'obtenir 
// le prix du produit TVAC. La méthode reçoit le taux de TVA

class Produit {
    //propriétés:
    private string $nom;
    private float $prix;
    private string $description;

    public function __construct(string $nom, float $prix, string $description)
    {
        $this->nom = $nom;    
        $this->prix = $prix;
        $this->description = $description;
    }

    public function afficher() 
    {
        echo "<br><br>Le produit " . $this->nom . " coute " . $this->prix . " euro ";
        echo "<br>Description du produit: " . $this->description;
    }

    public function getPrix_TVAC(int $tva) : float {
        return $this->prix * (1 + $tva/100);
    }

    public function getNom() : string {
        return $this->nom;
    }

    public function getPrix() : float {
        return $this->prix;
    }

    public function getDescription() : string {
        return $this->description;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;

        // permet d'enchainer les appels et pour cela chaque appel doit de revoyer 
        // un objet sur lequel on va pouvoir faire un appel: sinon ca fait office de null->afficher();
        return $this;
    }

    public function setPrix(float $prix) {
        $this->prix = $prix;

        return $this;
    }

    public function setDescription(string $description) {
        $this->description = $description;

        return $this;
    }
}
?>