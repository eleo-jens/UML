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

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    // $date = $_POST['date'];
    // var_dump($date);

    $p1 = new Person($fname, $lname, new DateTime("29-09-1993"));

        echo "Prénom: ". $p1->getFirstName() ."<br>";
        echo "Nom: ". $p1->getLastName() ."<br>";
        echo "Date de naissance: ". $p1->getDate() ."<br>";
        echo "Nationalités possibles: <br>";
        $array_nationalities = $p1->check_nationality();
        foreach ($array_nationalities as $nationality){
            echo "<br>" . $nationality ."<br>";
            $img = "https://www.countryflagsapi.com/png/" . $nationality . "";
            echo "<img src=" .$img . ">";
        }
        echo "<br>";
    ?>
</body>
</html>