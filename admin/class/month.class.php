<?php
class Month {
	private $database;
	public $id, $country;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Read row(s) from the database table
	public function getMonth() {
		$statement = $this->database->prepare("SELECT * FROM tbl_month");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function countAll() {
		$statement = $this->database->prepare("SELECT COUNT(*) AS count FROM tbl_month");
		$statement->execute();
		$result = $statement->fetch();

		return !empty($result['count']) ? $result['count'] : false;
	}

}
