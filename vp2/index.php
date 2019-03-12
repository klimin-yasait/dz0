<?php

$getUrl = $_SERVER["REQUEST_URI"];
$url = substr(strstr($getUrl, '?'), 1, strlen($getUrl));

$url = rtrim($url, '/');
$url = explode('&', $url);
require_once 'app/controllers/MainController.php';
require_once 'app/controllers/'.$url[0].'.php';
$controller = new $url[0]($url);
if ($controller instanceof MainController) {
    $controller->params($url);
}
