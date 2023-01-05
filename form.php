Creer une interface visuelle sous forme de formulaire qui permet de créer une personne et un compte bancaire. Le formulaire doit permettre de saisir le nom, l'âge et le solde du compte bancaire.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un nouveau client</title>
</head>
<body>
    <h1>Enregistrer un nouveau client</h1>
    <form method="post" action="./personne.php">
    <label for="nom">Nom :</label><br>
    <input type="text" id="nom" name="nom"><br>
    <label for="age">Age :</label><br>
    <input type="number" id="age" name="age"><br>
    <label for="solde">Solde du compte :</label><br>
    <input type="number" id="solde" name="solde"><br><br>
    <input type="submit" value="Créer la personne et le compte bancaire">
</form> 
<?php
    require './Personne.php';

    

    
?>
</body>
</html>
