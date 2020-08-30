<?php
class Archive {
	private $database;
	public $id , $surname , $firstname , $middlename , $dob , $sex , $enrolid , $pptNo , $appType , $catType , $missionid , $countryid , $userid , $docu;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Create record in database table
	public function createArchive() {
		$statement = $this->database->prepare("INSERT INTO tbl_archive ('surname','firstname','middlename','dob','sex','enrolid','pptNo','appType','catType','missionid','countryid','userid','docu') VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->surname);
		$statement->bindParam(2, $this->firstname);
		$statement->bindParam(3, $this->middlename);
		$statement->bindParam(4, $this->dob);
		$statement->bindParam(5, $this->sex);
		$statement->bindParam(6, $this->enrolid);
		$statement->bindParam(7, $this->pptNo);
		$statement->bindParam(8, $this->appType);
		$statement->bindParam(9, $this->catType);
		$statement->bindParam(10, $this->missionid);
		$statement->bindParam(11, $this->countryid);
		$statement->bindParam(12, $this->userid);
		$statement->bindParam(13, $this->docu);

		// Execute the query
		$result = $statement->execute();

		return $result ? true : false;
	}

	// Read row(s) from the database table
	public function getArchiveList() {
		$statement = $this->database->prepare("SELECT * FROM tbl_archive");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function countAll() {
		$statement = $this->database->prepare("SELECT COUNT(*) AS count FROM tbl_archive");
		$statement->execute();
		$result = $statement->fetch();

		return !empty($result['count']) ? $result['count'] : false;
	}

	// Update row in table

	// Delete record from table
}
