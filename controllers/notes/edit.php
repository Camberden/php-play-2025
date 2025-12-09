<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = $db->query("SELECT id FROM users WHERE name = :name", [
	"name" => $_SESSION["name"],
])->find()["id"]; //specifying to get the id only

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
	"id" => $_GET["id"],
])->findOrFail();

authorize($note["user_id"] === $currentUserId);

view("notes/edit.view.php", [
	"heading" => "Edit Note",
	"errors" => [],
	"note" => $note,
]);