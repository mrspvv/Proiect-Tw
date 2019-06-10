<?php
    define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);

    session_start();
    
    require '../controllers/Controller_Stoc.php';
    $controller = new Controller();
    $controller->dispatch();

?>