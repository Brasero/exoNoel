<?php
require_once '../model/Personne.php';
require_once '../model/CompteBancaire.php';
session_start();
$clients = $_SESSION['clients'] ?? [];
require_once '../view/list.php';