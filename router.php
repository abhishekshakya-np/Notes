<?php


$routes = require ('routes.php');

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
       abort();
    }
}


function abort($code = 404) {

    http_response_code($code);

    require "views/{$code}.php";

    die();

}


// $uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//parse_url will parse it and separate the path from the query string.


routeToController($uri, $routes);