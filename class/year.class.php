<?php
class Year {
	private $database;
	public $id, $country;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Read row(s) from the database table
	public function getYear() {
		$statement = $this->database->prepare("SELECT * FROM tbl_year");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function countAll() {
		$statement = $this->database->prepare("SELECT COUNT(*) AS count FROM tbl_year");
		$statement->execute();
		$result = $statement->fetch();

		return !empty($result['count']) ? $result['count'] : false;
	}

}
