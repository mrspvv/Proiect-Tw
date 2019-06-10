<?php

define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);

require '../controllers/Controller_Register.php';

$controller = new Controller();
$controller->invoke();

?>