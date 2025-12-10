<?php

// namespace Core;
use Core\Response;

session_start();
// $_SESSION = [
// 	"user"=>"Chrispy",
// 	"name"=>"Chrispy",
// 	"email"=>"chrispy@moon.com",
// 	"role"=>"admin",
// 	"id"=>1,
// ];

function dd($value) {
	echo "<pre>";
	var_dump($value);
	echo "</pre>";

	die();
}

function urlIs($value) {
	return $_SERVER["REQUEST_URI"] === $value;
}

function base_path($path) {
	return BASE_PATH . $path;
}

function view($path, $attributes = []) {
	extract($attributes); //extract creates variable key from string!
	require base_path("views/" . $path);
}

function abort($code = 404) {
		http_response_code($code);
		// echo "Not found!";
		require base_path("views/{$code}.php");
		die();
}

function authorize($condition, $status = Response::FORBIDDEN) {
	if(! $condition) {
		abort($status);
	}
}

function login($user) {

	// session_start();

	$_SESSION["user"] = [
		"name" => $user["name"],
		"email" => $user["email"],
	];

	dd($_SESSION);
}