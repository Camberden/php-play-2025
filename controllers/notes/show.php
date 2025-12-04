<?php

use Core\Database;

// require base_path("Core\Response.php");
$config = require base_path("config.php");
$db = new Database($config["database"]);

// $heading = "One Note, not a Microsoft Reference.";
// $id = $_GET["id"]; 
// Finds query string in HTML, between ? and = 
$currentUserId = 1;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	//form submitted; delete note
	$note = $db->query("SELECT * FROM notes WHERE id = :id", [
		"id" => $_GET["id"],
	])->findOrFail();

	authorize($note["user_id"] === $currentUserId);

	$db->query("DELETE FROM notes WHERE id = :id", [
		"id" => $_GET["id"],
	]);

	header("location: /notes");
	exit();

} else {
	$note = $db->query("SELECT * FROM notes WHERE id = :id", [
	// "user" => 1,
	"id" => $_GET["id"], //the binding
	])->findOrFail();

	// authorize($note["user_id"] === $currentUserId);

view("notes/show.view.php", [
	"heading" => "One Note, not a Microsoft Reference.",
	"note" => $note,
]);
}



