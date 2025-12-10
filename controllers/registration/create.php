<?php

// $_SESSION["name"] = "Guest";
// session_destroy();

// if ($_SESSION["name"] ?? false) {
// 	header("location: /");
// 	exit();
// }

view("registration/create.view.php", [
	"heading" => "Register",
	"errors" => [],
]);