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
        include "Voiture.class.php";

        $voiture1 = new Voiture("1k553f", "Citroen");
        $voiture1->afficher();

        $voiture1->demarrer();
        $voiture1->accelerer();
        $voiture1->afficher();
        $voiture1->accelerer();
        $voiture1->afficher();
        $voiture1->freiner();
        $voiture1->afficher();

        $voiture1->arreter();
        $voiture1->afficher();
    ?>
</body>
</html>