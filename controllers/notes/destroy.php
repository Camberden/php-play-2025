<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = $db->query("SELECT id FROM users WHERE name = :name", [
	"name" => $_SESSION["user"]["name"],
])->find()["id"]; //specifying to get the id only

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
	"id" => $_POST["id"],
])->findOrFail();

authorize($note["user_id"] === $currentUserId);

$db->query("DELETE FROM notes WHERE id = :id", [
	"id" => $_POST["id"],
]);

header("location: /notes");
exit();



