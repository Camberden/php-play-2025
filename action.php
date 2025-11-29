<?php

$lastUpdated = "November 29th, 2025";
$currentDate = date("FdY");

function dumpAndDie($value) {
	echo "<pre>";
	var_dump($value);
	echo "</pre>";

	die();
}

function urlIs($value) {
	return $_SERVER["REQUEST_URI"] === $value;
}

?>