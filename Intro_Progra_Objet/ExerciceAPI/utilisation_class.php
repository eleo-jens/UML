<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nationality Guesser</title>
</head>
<body>
    <?php 

    include_once (".\Person.class.php");

    $array_person = [];

    $array_person[0] = new Person("Eleonore", "Stultjens", new DateTime("29-09-1993"));
    $array_person[1] = new Person("Iliana", "Singh", new DateTime("29-09-1993"));
    $array_person[2] = new Person("Lena", "Stultjens", new DateTime("29-09-1993"));
    $array_person[3] = new Person("Natacha", "De Boosere", new DateTime("29-09-1993"));
    // $array_person[4] = new Person("Abhijit", "Kumar");

    foreach ($array_person as $key){
        echo "Prénom: ". $key->getFirstName() ."<br>";
        echo "Nom: ". $key->getLastName() ."<br>";
        echo "Date de naissance: ". $key->getDate() ."<br>";
        $array_nationalities = $key->check_nationality();
        foreach ($array_nationalities as $nationality){
            echo "<br>Nationalité : " . $nationality ."<br>";
            $img = "https://www.countryflagsapi.com/png/" . $nationality . "";
            echo "<img src=" .$img . ">";
        }
        echo "<br>";
    }
    ?>
</body>
</html>