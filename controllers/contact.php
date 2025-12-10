<?php

function returnSerialized($array) {
	return serialize($array);
}
$unserialized = null;
if (isset($_SESSION)) {
	$unserialized = unserialize(returnSerialized($_SESSION));
	// echo (print_r($unserialized));
}

view("contact.view.php", [
	"heading" => "Contact",
	"username" => $_SESSION["user"]["name"] ?? "Guest",
	"processedArray" => $unserialized ?? "Placeholder Data!",
]);

?>