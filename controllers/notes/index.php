<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id = [100];

$query = "SELECT * FROM notes WHERE id < ?"; 
$notes = $db->query($query, $id)->get();


view("notes/index.view.php", [
	"heading" => "Note Dump",
	"notes" => $notes,
]);