<?php

require('Core/functions.php');
require('Core/routes/Router.php');
$router = new Router();
require('Core/routes/routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
