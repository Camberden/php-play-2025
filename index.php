<?php

require "action.php";

require "router.php";

require "Database.php";

$db = new Database();
$posts = $db->query("SELECT * FROM posts WHERE id > 1");
$onePost = $db->query("SELECT * FROM posts WHERE id = 1")->fetch(PDO::FETCH_ASSOC);
// dumpAndDie($onePost);
foreach ($posts as $post) {
	echo "<li>" . $post["title"] . "</li>";
}

echo "<code>" . $onePost["title"] . "</code>";

/*
class Person {
	public $name;
	public $age;
	
	public function breathe() {
		echo $this->name . " is present and accounted for!";
	}
}
$person = new Person();
$person->name = "Chrispy Camberden";
$person->age = 25;
dumpAndDie($person->breathe());
*/
