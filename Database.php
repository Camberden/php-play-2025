<?php
// Connect to the MySQL Database & Execute a Query:
class Database {

	public $connection;
	public function __construct() { 
		$config = [
			"host" => "localhost",
			"port" => 3306,
			"dbname" => "Blogging",
			"charset" => "utf8mb4",
		];

		// Called on initialization!
		// $dsn = `mysql:host={$config["host"]};port={$config["port"]};dbname={$config["dbname"]};charset={$config["charset"]}`;
		$dsn = "mysql:" . http_build_query($config, "", ";");
		$this->connection = new PDO($dsn, "root", "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]); //Data Source Name
	}
	public function query($query) {

		$statement = $this->connection->prepare($query);

		$statement->execute();

		// $posts = $statement->fetchAll();
		// return $statement->fetchAll(PDO::FETCH_ASSOC); Removes duplication!
		return $statement;
	}
}