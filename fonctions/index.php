<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les fonctions en php</title>
</head>
<body>
<!--
    1) Écrivez une fonction qui prend une chaîne de caractères en entrée et renvoie une chaîne de caractères qui contient tous les caractères de la chaîne d'entrée, mais en ordre inverse.
    2) Écrivez une fonction qui prend un tableau de chaînes de caractères en entrée et renvoie un tableau de chaînes de caractères qui contient toutes les chaînes du tableau d'entrée, mais en ordre alphabétique.
    3) Écrivez une fonction qui prend un tableau d'entiers en entrée et renvoie le nombre d'éléments du tableau qui sont supérieurs à la moyenne des éléments du tableau.
    4) Écrivez une fonction qui prend un entier en entrée et renvoie le nombre de diviseurs de cet entier.
    5) Écrivez une fonction qui prend un tableau d'entiers en entrée et renvoie le nombre de valeurs uniques dans le tableau.
-->

<h1>Les fonctions en php</h1>

<h2>Exercice 1</h2>

<?php
$maChaine = "Bonjour";
function reverseString($string)
{
    $reversedString = "";
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }
    return $reversedString;
}
echo reverseString($maChaine);
?>

<h2>Exercice 2</h2>

<?php
$monTableau = ["Bonjour", "Hello", "Hola", "Ciao"];
function sortArray($array)
{
    $sortedArray = [];
    $arrayLength = count($array);
    for ($i = 0; $i < $arrayLength; $i++) {
        $smallestString = $array[0];
        $smallestStringIndex = 0;
        for ($j = 0; $j < count($array); $j++) {
            if ($array[$j] < $smallestString) {
                $smallestString = $array[$j];
                $smallestStringIndex = $j;
            }
        }
        $sortedArray[] = $smallestString;
        unset($array[$smallestStringIndex]);
        $array = array_values($array);
    }
    return $sortedArray;
}
print_r(sortArray($monTableau));
?>

<h2>Exercice 3</h2>

<?php
$monTableau = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function countAboveAverage($array)
{
    $average = 0;
    foreach ($array as $value) {
        $average += $value;
    }
    $average /= count($array);
    $count = 0;
    foreach ($array as $value) {
        if ($value > $average) {
            $count++;
        }
    }
    return $count;
}
echo countAboveAverage($monTableau);
?>

<h2>Exercice 4</h2>

<?php
$monEntier = 12;
function countDivisors($integer)
{
    $count = 0;
    for ($i = 1; $i <= $integer; $i++) {
        if ($integer % $i === 0) {
            $count++;
        }
    }
    return $count;
}
echo countDivisors($monEntier);
?>

<h2>Exercice 5</h2>

<?php
$monTableau = [1, 2, 3, 4, 5, 6, 7, 7, 7, 4, 10, 2];
function countUniqueValues($array)
{
    $uniqueValues = [];
    $nonUniqueValues = [];
    foreach ($array as $value) {
        if (!in_array($value, $uniqueValues) && !in_array($value, $nonUniqueValues)) {
            $uniqueValues[] = $value;
        } elseif (in_array($value, $uniqueValues)) {
            $nonUniqueValuesIndex = array_search($value, $uniqueValues);
            unset($uniqueValues[$nonUniqueValuesIndex]);
            $nonUniqueValues[] = $value;
        }
    }
    print_r($uniqueValues);
    return count($uniqueValues);
}
echo countUniqueValues($monTableau);
?>
</body>
</html>