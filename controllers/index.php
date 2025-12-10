<?php

view("index.view.php", [
	"heading" => "ほめぱげ",
	"username" => $_SESSION["name"] ?? "Guest",
]);

?>