<?php

view("contact.view.php", [
	"heading" => "Contact",
	"username" => $_SESSION["name"] ?? "Guest",
]);

?>