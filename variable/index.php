<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les variables en PHP</title>
</head>
<body>
<!--

1) Créez une variable $nom et affectez-lui votre nom. Affichez la variable avec echo.
2) Créez une variable $age et affectez-lui votre âge. Affichez la variable avec echo.
3) Créez une variable $estEtudiant et affectez-lui true si vous êtes étudiant, false sinon.
     Affichez la variable avec echo.
4) Créez une variable $taille et affectez-lui votre taille en centimètres. Affichez la variable avec echo.
5) Créez une variable $prix et affectez-lui le prix d'un article à 50 euros.
     Affichez le prix avec echo en utilisant la fonction number_format pour afficher le prix avec des virgules comme séparateur des milliers.
6) Créez une variable $phrase et affectez-lui une phrase de votre choix.
     Affichez la longueur de la phrase avec echo en utilisant la fonction strlen.
7) Créez une variable $texte et affectez-lui un texte de votre choix.
     Affichez la première lettre du texte avec echo en utilisant la fonction substr.
8) Créez une variable $nombre et affectez-lui un nombre de votre choix.
     Affichez le nombre au carré avec echo en utilisant l'opérateur **.
9) Créez une variable $nombre1 et affectez-lui un nombre de votre choix.
     Créez une variable $nombre2 et affectez-lui un autre nombre de votre choix.
     Affichez la somme des deux nombres avec echo en utilisant l'opérateur +.
10) Créez une variable $animal et affectez-lui le nom d'un animal de votre choix.
     Affichez la variable avec echo en utilisant la fonction strtoupper pour mettre le nom de l'animal en majuscules.
-->


<h1>Les variables en PHP</h1>

<h2>Exercice 1</h2>

<?php
$nom = "Ricci";
echo $nom;
?>

<h2>Exercice 2</h2>

<?php
$age = 27;
echo $age;
?>

<h2>Exercice 3</h2>

<?php
$estEtudiant = "false";
echo $estEtudiant;
?>

<h2>Exercice 4</h2>

<?php
$taille = 1.80;
echo $taille;
?>

<h2>Exercice 5</h2>

<?php
$prix = 50;
echo number_format($prix, 2, '.', ', ');
?>

<h2>Exercice 6</h2>

<?php
$phrase = "Ceci est une phrase";
echo strlen($phrase);
?>

<h2>Exercice 7</h2>

<?php
$texte = "Ceci est un texte";
echo substr($texte, 0, 1);
?>

<h2>Exercice 8</h2>

<?php
$nombre = 5;
echo $nombre ** 2;
?>

<h2>Exercice 9</h2>

<?php
$nombre1 = 5;
$nombre2 = 10;
echo $nombre1 + $nombre2;
?>

<h2>Exercice 10</h2>

<?php
$animal = "chien";
echo strtoupper($animal);
?>

</body>
</html>
