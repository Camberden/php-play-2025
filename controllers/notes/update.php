<?php

use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
	"id" => $_POST["id"],
])->findOrFail();

authorize($note["user_id"] === $currentUserId);

$errors = [];

if (! Validator::string($_POST["body"], 1, 999)) {
	$errors["body"] = "A body of no more than 999 characters is required y'know.";
}

if (! empty($errors)) {
	// Validation Issues
	view("notes/edit.view.php", [
		"heading" => "Issue found. Rewrite!",
		"errors" => $errors,
	]);
}

if (empty($errors)) {
	$db->query("UPDATE notes SET body = :body WHERE id = :id", [
		"body" => $_POST["body"],
		"id" => $_POST["id"],
	]);

	header("location: /notes");
	exit();
}