<?php

namespace Core;

use PDO;

class Database {

	public $connection;
	public $statement;
	public function __construct($config, $username = "root", $password = "") { 
		$dsn = "mysql:" . http_build_query($config, "", ";",);
		$this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC],); //Data Source Name
	}

	public function lesserQuery($query) {
		$statement = $this->connection->prepare($query);

		$statement->execute();

		return $statement;
	}
	
	public function query($query, $params = []) { //specifies type array

		$this->statement = $this->connection->prepare($query); 

		$this->statement->execute($params); //updated to $this->

		// $posts = $statement->fetchAll();
		// return $statement->fetchAll(PDO::FETCH_ASSOC); Removes duplication!
		// return $statement;
		return $this;
	}

	public function get() {
		return $this->statement->fetchAll();
	}

	public function find() {
		return $this->statement->fetch();
	}

	public function findOrFail() {
		$result = $this->find();

		if (! $result) {
			abort(404);
		}
		return $result;
	}
}