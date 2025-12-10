<?php

view("about.view.php", [
	"heading" => "About",
	"username" => $_SESSION["user"]["name"] ?? "Guest",
]);

?>