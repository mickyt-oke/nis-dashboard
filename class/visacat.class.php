<?php
class Visacat {
    private $database;
    public $id, $diplomatic, $month, $yearid, $missionid, $countryid, $tourist, $business, $transit, $official, $twp, $str, $damage, $opn_bal, $stockbal, $visa_rev, $comments, $created, $userid, $continentid;

    public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}
	
	// Create record in database table
	public function createVisa() {
		$statement = $this->database->prepare("INSERT INTO tbl_visa_class (month, yearid, diplomatic, business, transit, tourist, official, twp, str, damage, opn_bal, stockbal, visa_rev, comments, missionid, userid, countryid, continentid) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->month);
		$statement->bindParam(2, $this->yearid);
		$statement->bindParam(3, $this->diplomatic);
		$statement->bindParam(4, $this->business);
		$statement->bindParam(5, $this->transit);
		$statement->bindParam(6, $this->tourist);
		$statement->bindParam(7, $this->official);
		$statement->bindParam(8, $this->twp);
		$statement->bindParam(9, $this->str);
		$statement->bindParam(10, $this->damage);
		$statement->bindParam(11, $this->opn_bal);
		$statement->bindParam(12, $this->stockbal);
		$statement->bindParam(13, $this->visa_rev);
		$statement->bindParam(14, $this->comments);

        $statement->bindParam(15, $_SESSION['mission']);
		$statement->bindParam(16, $_SESSION['profile']);
		$statement->bindParam(17, $_SESSION['country']);
		$statement->bindParam(18, $_SESSION['continent']);

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
    public function getVisaReturn($missionid) {
        $statement = $this->database->prepare("SELECT * FROM tbl_visa_class WHERE missionid = :mission ORDER BY month DESC");
        $statement->execute(array("mission"=>$missionid));
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result ? $result : false;
    }

}
