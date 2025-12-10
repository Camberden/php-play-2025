<?php

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "Core/action.php";

spl_autoload_register(function ($class) {
	// require base_path("Core/{$class}.php");
	$class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
	require base_path("{$class}.php");
}); //Dec04: shows needed classes!

require base_path("bootstrap.php");

$router = new Core\Router();
$routes = require base_path("routes.php"); // Populates the routes for the Router object
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];

$router->route($uri, $method);
