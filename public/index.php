<?php

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "Core/action.php";

// require base_path("Database.php");
// Load Database before Router for deeper database granting [temporary].
// require base_path("Response.php");

spl_autoload_register(function ($class) {
	// require base_path("Core/{$class}.php");
	$class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
	require base_path("{$class}.php");
}); //Dec04: shows needed classes!

require base_path("Core/router.php");


// GET reaches to uri field.
// $query = "SELECT * FROM posts WHERE id = ?"; 
// $posts = $db->query($query, $id)->fetch();
// $onePost = $db->query("SELECT * FROM posts WHERE id = 1")->fetch(PDO::FETCH_ASSOC);
// dumpAndDie($posts["title"]);
// echo "<li>" . $posts["title"] . "</li>";
// echo "<code>" . $onePost["title"] . "</code>";

