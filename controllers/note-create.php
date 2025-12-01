<?php

$config = require("config.php");
$validator = require("Validator.php");
$db = new Database($config["database"]);

$heading = "Create Note!";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

	$errors = [];

	if (Validator::string($_POST["body"], 1, 999)) {
		$errors["body"] = "A body of no more than 999 characters is required y'know.";
	}


	if (empty($errors)) {
	$db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
		// "id" => PDO->serialize,
		"body" => $_POST["body"],
		"user_id" => 1,
	]);
	}
}



require "views/note-create.view.php";

?>