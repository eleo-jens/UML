<?php
// Créez une classe Adresse contenant le nom de la rue, 
// le numero et un code postal. Créez plusieurs objets 
// adresse et une fonction pour afficher la totalité de 
// l'adresse. Quand on essaie d'assigner une rue à l'adresse, 
// la méthode correspondante doit vérifier qu'il n'y pas de 
// chiffres dans la valeur à assigner.

class Adress {
    private string $rue;
    private int $numero;
    private int $code;

    public function __construct(string $rue, int $numero, int $code){
        $this->rue = $rue;
        $this->numero = $numero;
        $this->code = $code;
    }

    public function afficher(){
        echo "<br>" .$this->numero. ", " . $this->rue. ", " .$this->code;
    }

    public function getRue()
    {   
        return $this->rue;
    }

    public function setRue(string $rue)
    {   // trouver une autre fonction ou creer ma propre fonction pour trouver s'il y a des char numérique dans la string
        if(ctype_digit($rue) == false) {
            $this->rue = $rue;
            return $this;
        }
        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }
}

?>