<?php
class Contact {
	private $database;
	public $id, $name, $email, $subject, $message, $is_read, $created;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Create record in database table
	public function createContact() {
		$statement = $this->database->prepare("INSERT INTO contact (name, email, subject, message) VALUES (?, ?, ?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->name);
		$statement->bindParam(2, $this->email);
		$statement->bindParam(3, $this->subject);
		$statement->bindParam(4, $this->message);

		// Execute the query
		$result = $statement->execute();

		return $result ? true : false;
	}

	public function getContacts() {
		$statement = $this->database->prepare("SELECT * FROM contact ORDER BY created DESC");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	// Read row(s) from the database table
	public function countAll() {
		$statement = $this->database->prepare("SELECT COUNT(*) AS count FROM contact");
		$statement->execute();
		$result = $statement->fetch();

		return !empty($result['count']) ? $result['count'] : false;
	}

	// Update row in table

	// Delete record from table
}
