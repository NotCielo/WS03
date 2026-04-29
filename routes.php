<?php
    // // Return a simple routes map expected by `router.php`.
    // return [
    //     '/' => 'Controllers/home.php',
    //     '/listings' => 'Controllers/Listings/index.php',
    //     '/listings/create' => 'Controllers/Listings/create.php',
    //     '404' => 'Controllers/Error/404.php',
    // ];

    $router->get('/', 'Controllers/home.php');
    $router->get('/listings', 'Controllers/Listings/index.php');
    $router->get('/listings/create', 'Controllers/Listings/create.php');

?>