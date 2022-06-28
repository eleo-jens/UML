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
        include_once "Produit.class.php";

        $produit1 = new Produit("Laptop", 560, "Ordinateur portable Asus");
        $produit2 = new Produit("Livre", 12, "Ebook de 300 pages sur PHP");

        $produit1->afficher();
        $produit2->afficher();
        $produit1->setPrix(499);
        echo "<br><br>Le nouveau prix de \$produit1 est " . $produit1->getPrix();

        echo "<br><br>Le prix TVA comprise de \$produit2 est " . $produit2->getPrix_TVAC(21) . " euro";
        $produit1->setPrix(1000)->setNom("Ordinateur")->setDescription("Tour ordinateur pour bureau")->afficher();
    ?>
</body>
</html>