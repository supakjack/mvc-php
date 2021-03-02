<?php
include __DIR__ . '/core/app.php';
include __DIR__ . '/src/controllers/' . $controllerName . '.php';

$controller = new $controllerName;
$controller->$actionName(...$urlParams);