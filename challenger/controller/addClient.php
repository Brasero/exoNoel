<?php
require_once '../model/Personne.php';
require_once '../model/CompteBancaire.php';
session_start();
if (isset($_POST['first-name']) && isset($_POST['last-name']) && isset($_POST['age']) && isset($_POST['account-balance'])) {
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $age = $_POST['age'];
    $accountBalance = $_POST['account-balance'];
    $client = new Personne($firstName, $lastName, $age);
    $compBancaire = new CompteBancaire($accountBalance);
    $client->setCompteBancaire($compBancaire);
    $session = $_SESSION['clients'] ?? [];
    $session[] = $client;
    $_SESSION['clients'] = $session;
    header('Location: ../index.php?page=listClient');
}