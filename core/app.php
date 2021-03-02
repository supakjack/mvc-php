<?php
include __DIR__ . '/Controller.php';
include __DIR__ . '/../src/configs/variable.php';
include __DIR__ . '/../src/helpers/autoload.php';

$requestUrl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$requestString = substr($requestUrl, strlen($baseUrl));

$urlParams = explode('/', $requestString);

$controllerName = ucfirst(array_shift($urlParams));
$actionName = strtolower(array_shift($urlParams));
