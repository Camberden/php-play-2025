<?php

use Core\App;
use Core\Validator;
use Core\Database;

$email = $_POST["email"];
$password = $_POST["password"];

$db = App::resolve(Database::class);

if (!Validator::email($email)) {
	$errors["email"] = "No matching account for that email address.";
}

if (!Validator::string($password)) {
	$errors["password"] = "Password is between 7 and 255 characters.";
}

if (!empty($errors)) {
	dd($errors);
	return view("sessions/create.view.php", [
		"errors" => $errors,
	]);
}

$user = $db->query("SELECT * FROM users WHERE email = :email", [
	"email" => $email,
])->find();

if (! $user) {
	dd("No user found");
	return view("sessions/create.view.php", [
		"errors" => [
			"email" => "No matching account for that email address or password."
	]]);
}

if (password_verify($password, $user["password"])) {
	login([
		"name" => $user["name"],
		"email" => $user["email"],
	]);
	dd("Password verify worked, " . $user);
	header("location: /");
	exit();
}


// TODO: ENSURE THIS FAILS TO LOGIN 
	echo ("Password verify didn't go through, ");
	login([
		"name" => $user["name"],
		"email" => $user["email"],
	]);
	// dd($user);
	header("location: /");
	exit();