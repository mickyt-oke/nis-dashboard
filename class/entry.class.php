<?php
class Entry {
	private $database;
	public $month, $year, $missionid, $userid, $ppt_32, $ppt_64, $dam_32, $dam_64, $dam_total, $opn_bal_32, $opn_bal_64, $stock_bal_32, $stock_bal_64, $ppt_rev_32, $ppt_rev_64, $comments, $countryid, $continent_id;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}
	
	
	// Create record in database table
	public function createEntry() {
		$statement = $this->database->prepare("INSERT INTO tbl_ppt (month, year, ppt_32, ppt_64, dam_32, dam_64, opn_bal_32, opn_bal_64, stock_bal_32, stock_bal_64, ppt_rev_32, ppt_rev_64, comments, missionid, userid, countryid, continent_id ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->month);
		$statement->bindParam(2, $this->year);
		$statement->bindParam(3, $this->ppt_32);
		$statement->bindParam(4, $this->ppt_64);
		$statement->bindParam(5, $this->dam_32);
		$statement->bindParam(6, $this->dam_64);
		$statement->bindParam(7, $this->opn_bal_32);
		$statement->bindParam(8, $this->opn_bal_64);
		$statement->bindParam(9, $this->stock_bal_32);
		$statement->bindParam(10, $this->stock_bal_64);
		$statement->bindParam(11, $this->ppt_rev_32);
		$statement->bindParam(12, $this->ppt_rev_64);
		$statement->bindParam(13, $this->comments);

        $statement->bindParam(14, $_SESSION['mission']);
		$statement->bindParam(15, $_SESSION['profile']);
		$statement->bindParam(16, $_SESSION['country']);
		$statement->bindParam(17, $_SESSION['continent']);

		// Execute the query
		$result = $statement->execute();

        $this->id = $this->database->lastInsertId();

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
	public function countPptReturn($missionid) {
	    $statement = $this->database->prepare("SELECT COUNT(missionid) AS count FROM tbl_ppt WHERE missionid = :mission");
	    $statement->execute(array("mission->$missionid"));
	    $result = $statement->fetch();

	    return $result ? $result : false;
    }
    public function getReturnbyMonth($missionid) {
        $statement = $this->database->prepare("SELECT * FROM tbl_ppt WHERE missionid = :mission ORDER BY month DESC");
        $statement->execute(array("mission"=>$missionid));
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result ? $result : false;
    }

}
