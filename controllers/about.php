<?php

view("about.view.php", [
	"heading" => "About",
	"username" => $_SESSION["name"] ?? "Guest",
]);

?>