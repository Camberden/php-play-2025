<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$query = "SELECT * FROM notes"; 
$notes = $db->query($query)->get();


view("notes/index.view.php", [
	"heading" => "Note Dump",
	"username" => $_SESSION["name"] ?? "Guest",
	"notes" => $notes,
]);