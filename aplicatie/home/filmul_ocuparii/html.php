<?php
    define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);

    require '../../controllers/Controller_Rezervare_Static.php';
    $controller = new Controller();
    $controller->dispatch();

?>