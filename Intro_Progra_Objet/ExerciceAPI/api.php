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

    $url = "https://api.nationalize.io?name=eleonore";

    $json_data = file_get_contents($url);

    $reponsePHP = json_decode($json_data);

    var_dump($reponsePHP);

    echo $reponsePHP->country[0]->country_id. "\n";
    echo $reponsePHP->country[1]->country_id. "\n";
    echo $reponsePHP->country[2]->country_id. "\n";
    ?> 
</body>
</html>