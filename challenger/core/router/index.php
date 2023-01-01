<?php

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        require_once '../view/home.php';
        break;
    case 'addClient':
        require_once '../view/addClient.php';
        break;
    case 'listClient':
        require_once '../controller/showClient.php';
        break;
    case 'submitClient':
        require_once '../controller/addClient.php';
        break;
    case 'purge':
        require_once '../controller/purge.php';
        break;
    default:
        require_once '../view/404.php';
        break;
}

