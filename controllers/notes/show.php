<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// $currentUserId = 1;
$currentUserId = $db->query("SELECT id FROM users WHERE name = :name", [
	"name" => $_SESSION["name"],
])->find()["id"]; //specifying to get the id only

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
	"id" => $_GET["id"], //the binding
])->findOrFail();

authorize($note["user_id"] === $currentUserId);

view("notes/show.view.php", [
	"heading" => "One Note, not a Microsoft Reference.",
	"username" => $_SESSION["name"] ?? "Guest",
	"note" => $note,
]);



