<?php

define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);

require '../controllers/Controller_Login.php';

$controller = new Controller();
$controller->invoke();

?>