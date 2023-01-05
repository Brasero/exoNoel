<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les boucles en PHP</title>
</head>
<body>

<!--
    1) Créez une boucle for qui affiche les nombres de 1 à 10.
    2) Créez une boucle while qui affiche les nombres de 1 à 10.
    3) Créez une boucle do while qui affiche les nombres de 1 à 10.
    4) Créez une boucle for qui affiche les nombres de 1 à 10, mais seulement les nombres pairs.
    5) Créez une boucle for qui affiche les nombres de 1 à 10, mais seulement les nombres impairs.
    6) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui saute le nombre 5.
    7) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui s'arrête au nombre 5.
    8) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche le nombre 5 en rouge et les autres nombres en noir.
    9) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche uniquement le nombre 5.
    10) Créez une boucle for qui affiche les nombres de 1 à 10, mais qui affiche uniquement le nombre 7.
    11) Créez un tableau contenant les noms de 5 de vos amis.
         Utilisez une boucle foreach pour afficher chaque nom dans une liste HTML en utilisant la balise <li>.
    12) Créez un tableau contenant les noms de 5 de vos amis.
         Utilisez une boucle foreach pour afficher chaque nom dans une phrase différente, par exemple "Mon ami s'appelle nom_amis".
    13) Créez un tableau contenant 5 noms de fruits et utilisez une boucle foreach pour afficher chaque fruit.
    14) Créez un tableau associatif qui associe des noms de fruits à leurs couleurs respectives et utilisez une boucle foreach pour afficher chaque fruit et sa couleur.
    15) Créez un tableau contenant des nombres et utilisez une boucle foreach pour afficher la somme de tous les nombres.
    16) Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en majuscules.
    17) Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en minuscules.
    18) Créez un tableau contenant des noms de pays et utilisez une boucle foreach pour afficher chaque pays en capitalisant la première lettre du nom.
    19) Créez un tableau associatif qui associe des noms de personnes à leur âge respectif et utilisez une boucle foreach pour afficher chaque personne et son âge.
    20) Créez un tableau associatif qui associe des noms de personnes à leur âge respectif et utilisez une boucle foreach pour afficher uniquement les personnes âgées de plus de 30 ans.
    21) Créez un tableau contenant des noms de villes et utilisez une boucle foreach pour afficher chaque ville précédée de la phrase "J'aimerais visiter la ville de".
    22) Créez un tableau associatif qui associe des noms de villes à leurs pays respectifs et utilisez une boucle foreach pour afficher chaque ville et son pays.
-->

<h1>Les boucles en PHP</h1>

<h2>Exercice 1</h2>

<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . '<br>';
}
?>

<h2>Exercice 2</h2>

<?php
$i = 1;
while ($i <= 10) {
    echo $i . '<br>';
    $i++;
}
?>

<h2>Exercice 3</h2>

<?php
$i = 1;
do {
    echo $i . '<br>';
    $i++;
} while ($i <= 10);
?>

<h2>Exercice 4</h2>

<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 === 0) {
        echo $i . '<br>';
    }
}
?>

<h2>Exercice 5</h2>

<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 !== 0) {
        echo $i . '<br>';
    }
}
?>

<h2>Exercice 6</h2>

<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        continue;
    }
    echo $i . '<br>';
}
?>

<h2>Exercice 7</h2>

<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        break;
    }
    echo $i . '<br>';
}
?>

<h2>Exercice 8</h2>

<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        echo '<span style="color: red">' . $i . '</span><br>';
    } else {
        echo $i . '<br>';
    }
}
?>

<h2>Exercice 9</h2>

<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        echo $i . '<br>';
    }
}
?>

<h2>Exercice 10</h2>

<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i === 7) {
        echo $i . '<br>';
    }
}
?>

<h2>Exercice 11</h2>

<?php
$friends = ['John', 'Paul', 'George', 'Ringo', 'Pete'];
echo '<ul>';
foreach ($friends as $friend) {
    echo '<li>' . $friend . '</li>';
}
echo '</ul>';
?>

<h2>Exercice 12</h2>

<?php
$friends = ['John', 'Paul', 'George', 'Ringo', 'Pete'];
$i = 1;
foreach ($friends as $friend) {
    echo 'Mon ami numéro '.$i.' s\'appelle ' . $friend . '<br>';
    $i++;
}
?>

<h2>Exercice 13</h2>

<?php
$fruits = ['Banane', 'Pomme', 'Orange', 'Ananas', 'Fraise'];
foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}
?>

<h2>Exercice 14</h2>

<?php
$fruits = [
    'Banane' => 'Jaune',
    'Pomme' => 'Rouge',
    'Orange' => 'Orange',
    'Ananas' => 'Jaune',
    'Fraise' => 'Rouge',
];
foreach ($fruits as $fruit => $color) {
    echo $fruit . ' est de couleur ' . $color . '<br>';
}
?>

<h2>Exercice 15</h2>

<?php
$numbers = [1, 2, 3, 4, 5];
$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}
echo $sum;
?>

<h2>Exercice 16</h2>

<?php
$countries = ['France', 'Belgique', 'Suisse', 'Luxembourg', 'Allemagne'];
foreach ($countries as $country) {
    echo strtoupper($country) . '<br>';
}
?>

<h2>Exercice 17</h2>

<?php
$countries = ['France', 'Belgique', 'Suisse', 'Luxembourg', 'Allemagne'];
foreach ($countries as $country) {
    echo strtolower($country) . '<br>';
}
?>

<h2>Exercice 18</h2>

<?php
$countries = ['France', 'Belgique', 'Suisse', 'Luxembourg', 'Allemagne'];
foreach ($countries as $country) {
    echo ucfirst($country) . '<br>';
}
?>

<h2>Exercice 19</h2>

<?php
$persons = [
    'John' => 30,
    'Paul' => 38,
    'George' => 57,
    'Ringo' => 26,
    'Pete' => 45,
];
foreach ($persons as $person => $age) {
    echo $person . ' a ' . $age . ' ans.<br>';
}
?>

<h2>Exercice 20</h2>

<?php
$persons = [
    'John' => 30,
    'Paul' => 38,
    'George' => 57,
    'Ringo' => 26,
    'Pete' => 45,
];
foreach ($persons as $person => $age) {
    if ($age >= 30) {
        echo $person . ' a plus de 30 ans.<br>';
    }
}
?>

<h2>Exercice 21</h2>

<?php
$towns = [
    'Paris',
    'Lyon',
    'Marseille',
    'Bordeaux',
    'Lille',
    'Toulouse'
];
foreach ($towns as $town) {
    echo 'j\'aimerais visiter la ville de ' . $town . '<br>';
}
?>

<h2>Exercice 22</h2>

<?php
$pays = [
    'France' => [
        'Paris',
        'Lyon',
        'Marseille',
        'Bordeaux',
        'Lille',
        'Toulouse'
    ],
    'Belgique' => [
        'Bruxelles',
        'Liège',
        'Namur',
        'Charleroi',
        'Mons',
        'Anvers'
    ],
    'Suisse' => [
        'Genève',
        'Lausanne',
        'Bâle',
        'Zurich',
        'Berne',
        'Lucerne'
    ],
    'Luxembourg' => [
        'Luxembourg',
        'Esch-sur-Alzette',
        'Dudelange',
        'Differdange',
        'Remich',
        'Vianden'
    ],
    'Allemagne' => [
        'Berlin',
        'Hambourg',
        'Munich',
        'Cologne',
        'Frankfurt',
        'Stuttgart'
    ],
];

foreach ($pays as $pays => $villes) {
    echo '<h3>' . $pays . '</h3>';
    echo '<ul>';
    foreach ($villes as $ville) {
        echo '<li>' . $ville . '</li>';
    }
    echo '</ul>';
}
?>


</body>
</html>