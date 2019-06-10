<?php
    define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);

    require '../controllers/Controller_Rezervare.php';
    $controller = new Controller();
    $controller->dispatch();

?>