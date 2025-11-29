<?php

require "action.php";

require "router.php";

require "Database.php";

$config = require "config.php";
$db = new Database($config["database"]);
// dumpAndDie($_GET);


$id = $_GET["id"] ?? null; //GET reaches to uri field.

$query = "SELECT * FROM posts WHERE id = ?"; // Wildcard can be ?
$posts = $db->query($query, $id)->fetch();
// $onePost = $db->query("SELECT * FROM posts WHERE id = 1")->fetch(PDO::FETCH_ASSOC);



// dumpAndDie($posts["title"]);
echo "<li>" . $posts["title"] . "</li>";
// echo "<code>" . $onePost["title"] . "</code>";

