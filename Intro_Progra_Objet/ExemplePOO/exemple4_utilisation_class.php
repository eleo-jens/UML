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
    include_once "Categorie.class.php";

    $c = new Categorie("jazz", "musique de dance");
    $c2 = new Categorie("rock", "musique de tete");

    $c->afficher();
    $c2->afficher();
    ?>
</body>
</html>