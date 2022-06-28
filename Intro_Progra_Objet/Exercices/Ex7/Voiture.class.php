<!-- Créez une classe Voiture pour représenter une voiture. 
Rajoutez les propriétés et les méthodes permettant de 
réaliser les fonctions basiques d'une voiture. -->

<!-- Dans la classe Voiture, créez une méthode démarrer(). Dans le code de cette méthode on doit appeler une autre méthode preparerMoteur() aussi définie dans la classe mais pas accessible depuis l'extérieur. -->

<?php 

class Voiture {
    private string $numero;
    private string $marque;
    private int $vitesse;
    private bool $running;

    public function __construct(string $numero, string $marque, int $vitesse = 0, bool $running=false)
    {
        $this->numero = $numero;
        $this->marque = $marque;
        $this->vitesse = $vitesse;
        $this->running = $running;
    }

    public function afficher(){
        echo "<br><br>Numero: " . $this->numero;
        echo "<br>marque: " . $this->marque;
        echo "<br>Vitesse: " . $this->vitesse;
        echo "<br>Demarré: " . $this->running;
    }

    // cette méthode ne sera jaùais utiliséer par les developpeurs
    private function preparerMoteur(){
        echo "<h4>ON prépare le moteur</h6>";
    }

    public function demarrer() : bool {
        $this->preparerMoteur();
        if ($this->running == false){
            $this->running = true;
            echo "<br><br>Vrooouumm";
            return true;
        }
        else {
            return false;
        }
    }

    public function arreter() : bool {
        if ($this->running == true){
            $this->running = false;
            $this->vitesse = 0;
            return true;
        }
        else {
            return false;
        }
    }

    public function accelerer() : bool {
        if ($this->running){
            $this->vitesse += 10;
            return true;
        }
        else {
            return false;
        }
    }

    // il faut gerer quand la vitesse est plus petite ou égale que 10
    public function freiner() : bool {
        if($this->running){
            $this->vitesse -= 10;
            return true;
        }
        else {
            return false;
        }
    }

    // ATTENTION: il faut voir si cela a du sens que le développeur accede et modifie ces valeurs, la programmation est souple, il faut voir ce dont on a besoin
    // public function getNumero()
    // {
    // return $this->numero;
    // }

    // public function setNumero($numero)
    // {
    //     $this->numero = $numero;

    //     return $this;
    // }

    // public function getMarque()
    // {
    //     return $this->marque;
    // }

    // public function setMarque($marque)
    // {
    //     $this->marque = $marque;

    //     return $this;
    // }

    // public function getVitesse()
    // {
    //     return $this->vitesse;
    // }

    // public function setVitesse($vitesse)
    // {
    //     $this->vitesse = $vitesse;

    //     return $this;
    // }
}

?>