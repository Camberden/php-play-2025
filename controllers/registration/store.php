<?php

use Core\App;
use Core\Validator;
use Core\Database;

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$db = App::resolve(Database::class);

if (!Validator::string($name, 4, 20)) {
	$errors["name"] = "Name must be between 4 and 20 characters.";
}

if (!Validator::email($email)) {
	$errors["email"] = "Please provide a valid email address.";
}

if (!Validator::string($password, 7, 255)) {
	$errors["password"] = "Password must be between 7 and 255 characters.";
}

if (!empty($errors)) {
	return view("registration/create.view.php", [
		"errors" => $errors,
	]);
}

$user = $db->query("SELECT * FROM users WHERE email = :email", [
	":email" => $email,
])->find();

if ($user) {
	
	header("location: /");

} else {
	$db->query("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)", [
		":name" => $name,
		":email" => $email,
		// ":password" => password_hash($password, PASSWORD_BCRYPT),
		":password" => $password,
	]);

	// session_start();

	$_SESSION = [
		"user" => $name,
		"name" => $name,
		"email" => $email,
	];
	header("location: /");
}