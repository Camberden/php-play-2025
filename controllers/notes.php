<?php

$config = require("config.php");
$db = new Database($config["database"]);

$heading = "Note Dump";
$id = 10;


$query = "SELECT * FROM notes WHERE id < ?"; 
$notes = $db->query($query, $id)->fetchAll();

// dumpAndDie($notes);


require "views/notes.view.php";