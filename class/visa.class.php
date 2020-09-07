<?php
class Visa {
	private $database;
	public $month, $year, $missionid, $userid, $countryid, $continentid, $totalissued, $totalrev, $damage, $opn_bal, $stkbal, $message;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}
	
	// Create record in database table
	public function createVisa() {
		$statement = $this->database->prepare("INSERT INTO tbl_visa (month, year, totalissued, totalrev, damage, opn_bal, stkbal, message, missionid, userid, countryid, continentid) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->month);
		$statement->bindParam(2, $this->year);
		$statement->bindParam(3, $this->totalissued);
		$statement->bindParam(4, $this->totalrev);
		$statement->bindParam(5, $this->damage);
		$statement->bindParam(6, $this->opn_bal);
		$statement->bindParam(7, $this->stkbal);
		$statement->bindParam(8, $this->message);

        $statement->bindParam(9, $_SESSION['mission']);
		$statement->bindParam(10, $_SESSION['profile']);
		$statement->bindParam(11, $_SESSION['country']);
		$statement->bindParam(12, $_SESSION['continent']);

		// Execute the query
		$result = $statement->execute();

        $this->id = $this->database->lastInsertId();

		return $result ? true : false;
	}

	// Read row(s) from the database table
	public function getVisa() {
		$statement = $this->database->prepare("SELECT * FROM tbl_visa");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function countAll() {
		$statement = $this->database->prepare("SELECT COUNT(*) AS count FROM tbl_visa");
		$statement->execute();
		$result = $statement->fetch();

		return !empty($result['count']) ? $result['count'] : false;
	}

	// Update row in table

	// Delete record from table
}
