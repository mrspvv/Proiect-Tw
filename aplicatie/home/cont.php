<?php
    define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);

    session_start();

    require '../controllers/Controller_Cont.php';
    $controller = new Controller($_SESSION['id_client']);
    $controller->dispatch();

?>