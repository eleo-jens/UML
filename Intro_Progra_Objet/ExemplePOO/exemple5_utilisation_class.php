<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "MorceauP.class.php";

    $m1 = new MorceauP("jazz", 4, 3);
    $m1->afficher();

    $m1->setDuree(90);
    //$m1->duree = 90;
    //$m1->duree = -90;
    echo "<br><br>La durée de \$m1 est : " .$m1->getDuree();
    echo "<br><br>Le nom de \$m1 est : " .$m1->getTitre();
    ?>
</body>
</html>