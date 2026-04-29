<?php
    define('BASE_PATH', dirname(__DIR__));

    require '../helpers.php';

    require basePath('router.php');
    require basePath('Database.php');
    // $config = require basePath('config/db.php');
    // $db = new Database($config);
    $router = new Router();
    $routes = require basePath('routes.php');

    $uri = $_SERVER['REQUEST_URI']; // uniform resource identifier
    $method = $_SERVER['REQUEST_METHOD'];

    $router->route($uri, $method);
?>