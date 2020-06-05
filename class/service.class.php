<?php
class Service {
	private $database;
	public $id, $name, $category, $photo, $description, $created;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Create record in database table
	public function createService() {
		$statement = $this->database->prepare("INSERT INTO service (name, category, photo, description) VALUES (?, ?, ?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->name);
		$statement->bindParam(2, $this->category);
		$statement->bindParam(3, $this->phone);
		$statement->bindParam(4, $this->description);

		// Execute the query
		$result = $statement->execute();

		return $result ? true : false;
	}

	public function getServices() {
		$statement = $this->database->prepare("SELECT * FROM service ORDER BY created DESC");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	// Read row(s) from the database table
	public function countAll() {
		$statement = $this->database->prepare("SELECT COUNT(*) AS count FROM service");
		$statement->execute();
		$result = $statement->fetch();

		return !empty($result['count']) ? $result['count'] : false;
	}

	// Update row in table

	// Delete record from table
}
