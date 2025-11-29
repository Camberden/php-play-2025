<?php
// Connect to the MySQL Database & Execute a Query:
class Database {

	public $connection;
	public function __construct() { 
		// Called on initialization!
		$dsn = "mysql:host=localhost;port=3306;dbname=Blogging;charset=utf8mb4";
		$this->connection = new PDO($dsn, "root"); //Data Source Name
	}
	public function query($query) {

		$statement = $this->connection->prepare($query);

		$statement->execute();

		// $posts = $statement->fetchAll();
		// return $statement->fetchAll(PDO::FETCH_ASSOC); Removes duplication!
		return $statement;
	}
}