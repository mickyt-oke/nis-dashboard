<?php
class Apptype {
	private $database;
	public $id, $app;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Read row(s) from the database table
	public function getApptype() {
		$statement = $this->database->prepare("SELECT FROM app_type");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}
}
