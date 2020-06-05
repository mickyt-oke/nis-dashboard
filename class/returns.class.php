<?php
class Returns {
	private $database;
	public $authority, $firstname, $surname, $passportno, $remarks, $status, $entrydate;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Create record in database table
	public function createReturns() {
		$statement = $this->database->prepare("INSERT INTO tbl_ppt_32 (monthid, yearid, issued, damaged, open_bal, comments, userid, stock_bal, missionid, countryid, rev, type ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->monthid);
		$statement->bindParam(2, $this->yearid);
		$statement->bindParam(3, $this->issued);
		$statement->bindParam(4, $this->damaged);
		$statement->bindParam(5, $this->open_bal);
		$statement->bindParam(6, $this->comments);
        $statement->bindParam(7, $this->userid);
        $statement->bindParam(8, $this->stock_bal);
        $statement->bindParam(9, $this->missionid);
        $statement->bindParam(10, $this->countryid);
        $statement->bindParam(11, $this->rev);
        $statement->bindParam(12, $this->type);
		// $statement->bindParam(7, $this->status);


		// Execute the query
		$result = $statement->execute();

		// Retrieve profileid and return value
		$this->id = $this->database->lastInsertId();

		return $result ? true : false;
	}

	// Read row(s) from the database table

		public function alertList() {
			$query = "SELECT Alert.* FROM user JOIN tbl_alertlist WHERE Alert.passportNo = :passportNo";
			$statement = $this->database->prepare($query);
			$statement->execute();
			$results = $statement->fetchAll(PDO::FETCH_ASSOC);

			return $results ? $results : false;
		}

	public function getName($profileid) {
		$statement = $this->database->prepare("SELECT firstname FROM profile WHERE id = :profileid");
		$statement->execute(array("profileid"=>$profileid));
		$result = $statement->fetch();

		return $result ? $result['firstname'] : '';
	}

	// Update row in table

	// Delete record from table
}
