<?php

// Dec 03 => Created folders for each use case within controllers and views.

return [
	"/" => "controllers/index.php",
	"/about" => "controllers/about.php",
	"/notes" => "controllers/notes/index.php", // notes/notes would be notes/index
	"/note" => "controllers/notes/show.php", //notes/note to notes/show
	"/notes/create" => "controllers/notes/create.php",
	"/contact" => "controllers/contact.php",
];

?>