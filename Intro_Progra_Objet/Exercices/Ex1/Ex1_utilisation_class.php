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
        include_once "CompteBancaire.class.php";

        $compte1 = new CompteBancaire("BE657894456165412", 6512);
        $compte1->afficher();
        // changer le solde
        $compte1->setSolde(3214);
        $compte1->setEtat("bloqué");
        echo "<br><br>Le solde de \$compte1 est de: " .$compte1->getSolde(). " euros";

        // ajouter un montant
        $resultatOperation = $compte1->ajouter_montant(250);
        echo "<br><br>Le solde de \$compte1 est de: " .$compte1->getSolde(). " euros";
        if ($resultatOperation == true) {
            echo "<br>Tout ok";
        }
        else {
            echo "<br>Le compte est bloqué";
        }
        // returer un montant
        $resulatOperation = $compte1->retirer_montant(56);
        echo "<br><br>Le solde de \$compte1 est de: " .$compte1->getSolde(). " euros";
        if ($resulatOperation == true) {
            echo "<br>Tout ok";
        }
        else {
            echo "Le compte est bloqué";
        }
    ?>
</body>
</html>