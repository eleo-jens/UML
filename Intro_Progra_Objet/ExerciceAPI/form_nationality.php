<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nationality Guesser</title>
</head>
<body>
    <div class="container">    
        <h1>Nationality Guesser</h1>
        <form method="POST" action="./form_traitement.php">
            <label for="fname">Prénom: </label>
            <input type="text" name="fname" id="fname"><br>
            <label for="lname">Nom de famille: </label>
            <input type="text" name="lname" id="lname"><br>
            <label>Date de naissance: </label><input type="date"><br>
            <button type="submit" value="Envoyer">Envoyer</button>
        </form>
    </div>
</body>
</html>