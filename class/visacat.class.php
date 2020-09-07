<?php
class VisaCat {
	private $database;
	public $month, $year, $missionid, $userid, $countryid, $continentid, $visa_class, $issued;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}
	
	// Create record in database table
	public function createVisa() {
		$statement = $this->database->prepare("INSERT INTO tbl_visa_class (month, year, issued, visa_class, missionid, userid, countryid, continentid) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->month);
		$statement->bindParam(2, $this->year);
		$statement->bindParam(3, $this->issued);
		$statement->bindParam(4, $this->visa_class);

        $statement->bindParam(5, $_SESSION['mission']);
		$statement->bindParam(6, $_SESSION['profile']);
		$statement->bindParam(7, $_SESSION['country']);
		$statement->bindParam(8, $_SESSION['continent']);

		// Execute the query
		$result = $statement->execute();

        $this->id = $this->database->lastInsertId();

		return $result ? true : false;
	}

	// Read row(s) from the database table
	public function getVisa() {
		$statement = $this->database->prepare("SELECT * FROM tbl_visa_class");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function countAll() {
		$statement = $this->database->prepare("SELECT COUNT(*) AS count FROM tbl_visa_class");
		$statement->execute();
		$result = $statement->fetch();

		return !empty($result['count']) ? $result['count'] : false;
	}

	// Update row in table

	// Delete record from table
}
