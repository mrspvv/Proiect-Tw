<?php
    define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);

    session_start();
    
    require 'controllers/Controller_Principala.php';
    $controller = new Controller();
    $controller->dispatch();

?>