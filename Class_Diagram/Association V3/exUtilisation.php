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

        $p1 = new Personne("Stultj", "Ele", new DateTime("21-05-1993"));

        $p2 = new Personne("Yo", "Menen", new DateTime("21-05-1993"));

        $p3 = new Personne("Yo", "Coco", new DateTime("21-05-1993"));

        // si on voulait injecter des employés dans le constructeur: $s1 = new Societe("Apple","Rue Gaucheret", [$p1,$p2]);
        $s1 = new Societe("Apple","Rue Gaucheret"); // ici l'array d'employé est null donc optionnel
        $s1->setNom("Apple");

        // on set l'employeur pour l'employé pas besoin
        // $p1->setEmployeur($s1); 
        // $p2->setEmployeur($s1); 
        // $p3->setEmployeur($s1);

        // etape 1: on set les employés manuellement pour la société, mais il faut à chaque fois modifier le code pour ajouter un employé
        // $s1->setEmployes([$p1, $p2]);

        // etape 2: ici on a amélioré le code en créant une méthode pour ajouter un nouvel employé
        // dans le code de add on a un double lien pour que la société soit aussi rajoutée à la personne
        $s1->addEmploye($p1);
        $s1->addEmploye($p2);
        $s1->addEmploye($p3);


        var_dump($p1);
        var_dump($s1);
        ?>
</body>
</html>