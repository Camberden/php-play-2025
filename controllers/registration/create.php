<?php

// $_SESSION["name"] = "Guest";
session_destroy();


view("registration/create.view.php", [
	"heading" => "Register",
	"errors" => [],
]);