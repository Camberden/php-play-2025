<?php

$config = require("config.php");
$db = new Database($config["database"]);

$heading = "Note Dump";
$id = [100];


$query = "SELECT * FROM notes WHERE id < ?"; 
$notes = $db->query($query, $id)->get();


require "views/notes/index.view.php";