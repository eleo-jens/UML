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
        include_once "Personne.class.php";
        include_once "Societe.class.php";

        $p1 = new Personne();
        $p1->setNom("Ele");
        $p1->setDate_naissance(new DateTime("21-05-1993"));

        $p2 = new Personne();
        $p2->setNom("Menen");
        $p2->setDate_naissance(new DateTime("21-05-1993"));

        $p3 = new Personne();
        $p3->setNom("Coco");
        $p3->setDate_naissance(new DateTime("21-05-1993"));

        $s1 = new Societe();
        $s1->setNom("Apple");

        // on se l'employeur pour l'employé
        $p1->setEmployeur($s1);
        $p2->setEmployeur($s1);
        $p3->setEmployeur($s1);

        // etape 1: on set les employés manuellement pour la société, mais il faut à chaque fois modifier le code pour ajouter un employé
        $s1->setEmployes([$p1, $p2]);

        // etape 2: ici on a amélioré le code en créant une méthode pour ajouter un nouvel employé
        $s1->addEmploye($p3);


        var_dump($p1);
        var_dump($s1);
        ?>
</body>
</html>