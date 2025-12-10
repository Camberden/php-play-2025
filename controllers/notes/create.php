<?php

view("notes/create.view.php", [
	"heading" => "Create Note!",
	"errors" => [],
	"username" => $_SESSION["user"]["name"] ?? "Guest",
]);

?>