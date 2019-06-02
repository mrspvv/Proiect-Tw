<?php
    define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);

    require  '../controllers/Controller_Produs.php';
    $controller = new Controller($_GET['produs']);
    $controller->dispatch();

?>