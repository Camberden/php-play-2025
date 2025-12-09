<?php


// dd($_SESSION);
// $_SESSION["name"] = "Chrispy";
// $_SESSION["last"] = "Camberden";

view("index.view.php", [
	"heading" => "ほめぱげ",
	"username" => $_SESSION["name"] ?? "Guest",
]);

?>