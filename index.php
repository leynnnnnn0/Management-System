<?php
session_start();
require('Core/functions.php');
require('routes/Router.php');
$router = new Router();
require('Core/Validator.php');
require('routes/routes.php');
require('Database/Database.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
unset($_SESSION['errors']);
