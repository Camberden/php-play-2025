<?php
// Connect to the MySQL Database & Execute a Query:
class Database {

	public $connection;
	public function __construct($config, $username = "root", $password = "") { 
		// Called on initialization!
		// $dsn = `mysql:host={$config["host"]};port={$config["port"]};dbname={$config["dbname"]};charset={$config["charset"]}`;
		$dsn = "mysql:" . http_build_query($config, "", ";",);
		$this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC],); //Data Source Name
	}

	public function lesserQuery($query) {
		$statement = $this->connection->prepare($query);

		$statement->execute();

		return $statement;
	}
	
	public function query($query, $params = []) {

		$statement = $this->connection->prepare($query);

		$statement->execute([$params]);

		// $posts = $statement->fetchAll();
		// return $statement->fetchAll(PDO::FETCH_ASSOC); Removes duplication!
		return $statement;
	}
}