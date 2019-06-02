<?php
    define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);

    require '../controllers/Controller_Produse.php';
    $controller = new Controller($_GET['categorie']);
    $controller->dispatch();

?>