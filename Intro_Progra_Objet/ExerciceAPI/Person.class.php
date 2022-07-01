<?php

class Person {
    private string $first_name;
    private string $last_name;
    private DateTime $birthdate;

    public function __construct(string $first_name, string $last_name, DateTime $birthdate){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->birthdate = $birthdate;
    }

    public function getFirstName() : string {
        return $this->first_name;
    }

    public function setFirstName(string $name) {
        $this->first_name = $name;
        return $this;
    }

    public function getLastName() : string {
        return $this->last_name;
    }

    public function setLastName(string $name) {
        $this->last_name = $name;
        return $this;
    }

    public function getDate() {
        return $this->birthdate->format('d-m-Y');
    }

    public function setDate(DateTime $date) {
        $this->birthdate = $date;
        return $this;
    }

    // A faire : gérer deux choses: gestion des accents par exemple ne prend pas Eléonore, mais surtout la gestion
    // des nationalités null, par exemple abhijit n'a qu'une seule nationalité, et sapna en a 2 : idee verifier combien il y a de nationalité si null 1 2 ou 2 et en faire une variable pour le while
    public function check_nationality() : array {

        $url = "https://api.nationalize.io?name=". $this->first_name ."";

        $json_data = file_get_contents($url);

        $reponsePHP = json_decode($json_data);

        $array_nationalities = [];

        $i = 0;
        while ($i < 3){
            // if ($reponsePHP->country[$i]->country_id == null){
            //     $i++;
            // }
            // else {
                $array_nationalities[$i] = $reponsePHP->country[$i]->country_id;
            // }
            $i++;
        }
        
        return $array_nationalities;
    }
}

?>