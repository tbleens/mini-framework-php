<?php

require 'autoload.php';

use Controllers\HomeController;
use Core\Router;

Router::GET('/', HomeController::class);

$route = new Router();
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$scriptName = dirname($_SERVER['SCRIPT_NAME']);

// Supprimer le chemin de base de l'URI pour obtenir la route relative
if (strpos($uri, $scriptName) === 0) {
    $uri = substr($uri, strlen($scriptName));
}

$route->dispatch($uri);