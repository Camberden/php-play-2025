<?php

// require "action.php";
$routes = require "routes.php";

// dumpAndDie($_SERVER);
// $uri = $_SERVER["REQUEST_URI"];
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
// dumpAndDie(parse_url($uri));

// $routes = [
// 	"/" => "controllers/index.php",
// 	"/about" => "controllers/about.php",
// 	"/notes" => "controllers/notes.php",
// 	"/note" => "controllers/note.php",
// 	"/contact" => "controllers/contact.php",
// ];

function routeToController($uri, $routes) {

	// if ($uri === "/") {
	// 	require "controllers/index.php";
	// } else if ($uri === "/about") {
	// 	require "controllers/about.php";
	// } else if ($uri === "/contact") {
	// 	require "controllers/contact.php";
	// }
	if (array_key_exists($uri, $routes)) {
		require $routes[$uri];
	} else {
		abort();
	}
}

function abort($code = 404) {
	http_response_code($code);
	// echo "Not found!";
	require "views/{$code}.php";
	die();
}

routeToController($uri, $routes);