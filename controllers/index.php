<?php

function strThing($haystack, $needle) {
	// if (str_contains($haystack, $needle)) {
	// 	return strpos($haystack, $needle);
	// } else {
	// 	return -1;
	// }
	$result = str_contains($haystack, $needle) ? strpos($haystack, $needle) : -1;
	return $result;
}

view("index.view.php", [
	"heading" => "ほめぱげ",
	"username" => $_SESSION["name"] ?? "Guest",
]);

?>