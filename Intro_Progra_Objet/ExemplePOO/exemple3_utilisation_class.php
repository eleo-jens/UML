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
    include "./Groupe.class.php";
    include "./MorceauC.class.php";

    $g1 = new Groupe("Muse", "UK", "Rock", new DateTime("20-5-1980")); //une des propriété est un objet (un objet dans un autre objet)
    $g2 = new Groupe("Florence & The Machine", "UK", "POP", new DateTime("29-09-2001"));
    var_dump($g1);
    var_dump($g2);

    $m1 = new MorceauC("Lalala", 400, 5);// les capsules morceau et groupe sont indépendantes

    $g1->afficher();
    $g2->afficher();

    $m1->afficher(); //on a plus le probleme de base; ici on peut avoir le meme nom de methode car chaque classe est independante
    // et possede sa propre methode
    ?>
</body>
</html>