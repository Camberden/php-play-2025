<?php
require "Response.php";
$config = require("config.php");
$db = new Database($config["database"]);

$heading = "One Note, not a Microsoft Reference.";
// $id = $_GET["id"]; 
// Finds query string in HTML, between ? and = 
$currentUserId = 1;

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
	// "user" => 1,
	"id" => $_GET["id"], //the binding
	])->findOrFail();

	authorize($note["user_id"] === $currentUserId);

require "views/notes/show.view.php";