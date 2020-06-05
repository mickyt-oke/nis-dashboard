<?php
class Nationality {
	private $database;
	public $id, $nationality;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Create record in database table
	public function createState() {
		$statement = $this->database->prepare("INSERT INTO tbl_nationality (id,nationality) VALUES (?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->id);
		$statement->bindParam(2, $this->nationality);

		// Execute the query
		$result = $statement->execute();

		return $result ? true : false;
	}

	// Read row(s) from the database table
	public function getNationality() {
		$statement = $this->database->prepare("SELECT id, nationality FROM tbl_nationality");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function countAll() {
		$statement = $this->database->prepare("SELECT COUNT(*) AS count FROM tbl_nationality");
		$statement->execute();
		$result = $statement->fetch();

		return !empty($result['count']) ? $result['count'] : false;
	}

	// Update row in table

	// Delete record from table
}
