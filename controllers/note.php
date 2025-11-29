<?php

$config = require("config.php");
$db = new Database($config["database"]);

$heading = "One Note, not a Microsoft Reference.";
$id = $_GET["id"]; // Finds query string in HTML, between ? and = 

$note = $db->query("SELECT * FROM notes WHERE id = " . "?", $id)->fetch();

require "views/note.view.php";