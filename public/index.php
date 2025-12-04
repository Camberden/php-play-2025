<?php

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "action.php";

require base_path("Database.php");// Load Database before Router for deeper database granting [temporary].
require base_path("router.php");
require base_path("Response.php");


$id = $_GET["id"] ?? null;
$styles = base_path("styles.css");

// GET reaches to uri field.

// $query = "SELECT * FROM posts WHERE id = ?"; 
// $posts = $db->query($query, $id)->fetch();
// $onePost = $db->query("SELECT * FROM posts WHERE id = 1")->fetch(PDO::FETCH_ASSOC);

// dumpAndDie($posts["title"]);
// echo "<li>" . $posts["title"] . "</li>";
// echo "<code>" . $onePost["title"] . "</code>";

