<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once "Adresse.class.php";

        $adresse1 = new Adress ("Rue Gaucheret", 12, 1030);
        $adresse1->afficher();
        $adresse1->setRue("Boulevard Louis 10")->afficher();
        $adresse1->setRue("Boulevard Louis")->afficher();

    ?>
</body>
</html>