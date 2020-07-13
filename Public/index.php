<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';
var_dump($_SERVER['REQUEST_URI']);

$request = new \Philip\Work\Base\Request();

$config = __DIR__ . '/../config.json';

$app = new \Philip\Work\Base\Application($config);
$response = $app->handleRequest($request);
$response->send();