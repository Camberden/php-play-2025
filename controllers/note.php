<?php

$config = require("config.php");
$db = new Database($config["database"]);

$heading = "One Note, not a Microsoft Reference.";
// $id = $_GET["id"]; 
// Finds query string in HTML, between ? and = 

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
	// "user" => 1,
	"id" => $_GET["id"], //the binding
	])->fetch();

	if (! $note) {
		abort();
	}

	if ($note["user_id"] !== 1) {
		abort(403);
	}


require "views/note.view.php";