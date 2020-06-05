<?php
class Entry {
	private $database;
	public $month, $year, $issued, $damaged, $open_bal, $comments, $userid, $stock_bal, $mission, $country, $revenue, $type;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}
	
	
	// Create record in database table
	public function createEntry() {
		$statement = $this->database->prepare("INSERT INTO tbl_ppt (month, year, missionid, userid, ppt_32, ppt_64, dam_32, dam_64, dam_total, opn_bal_32, opn_bal_64, stock_bal_32, stock_bal_64, ppt_rev_32, ppt_rev_64, ppt_rev_total, comments, countryid) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->month);
		$statement->bindParam(2, $this->year);
		$statement->bindParam(3, $this->missionid);
		$statement->bindParam(4, $this->userid);
		$statement->bindParam(5, $this->ppt_32);
		$statement->bindParam(6, $this->ppt_64);
		$statement->bindParam(7, $this->dam_32);
		$statement->bindParam(8, $this->dam_64);
		$statement->bindParam(9, $this->dam_total);
		$statement->bindParam(10, $this->opn_bal_32);
		$statement->bindParam(11, $this->opn_bal_64);
		$statement->bindParam(12, $this->stock_bal_32);
		$statement->bindParam(13, $this->stock_bal_64);
		$statement->bindParam(14, $this->ppt_rev_32);
		$statement->bindParam(15, $this->ppt_rev_64);
		$statement->bindParam(16, $this->ppt_rev_total);
		$statement->bindParam(17, $this->comments);
		$statement->bindParam(18, $this->countryid);

		// Execute the query
		$result = $statement->execute();

		return $result ? true : false;
	}

	// Read row(s) from the database table
	public function getNewEntry() {
		$statement = $this->database->prepare("SELECT * FROM tbl_ppt");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function countAll() {
		$statement = $this->database->prepare("SELECT COUNT(*) AS count FROM tbl_ppt");
		$statement->execute();
		$result = $statement->fetch();

		return !empty($result['count']) ? $result['count'] : false;
	}

	// Update row in table

	// Delete record from table
}
