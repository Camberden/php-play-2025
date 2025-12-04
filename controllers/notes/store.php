<?php

use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];

// if ($_SERVER["REQUEST_METHOD"] === "POST") {

if (! Validator::string($_POST["body"], 1, 999)) {
	$errors["body"] = "A body of no more than 999 characters is required y'know.";
}

if (! empty($errors)) {
	// Validation Issues
	view("notes/create.view.php", [
		"heading" => "Issue found. Rewrite!",
		"errors" => $errors,
	]);
}

if (empty($errors)) {
	$db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
		// "id" => PDO->serialize,
		"body" => $_POST["body"],
		"user_id" => 1,
	]);

	header("location: /notes");
	exit();
}