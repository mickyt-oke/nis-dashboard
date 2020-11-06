<?php
class Mission {
	private $database;
	public $id, $countryid, $mission, $continentid;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Create record in database table
	public function createMission() {
		$statement = $this->database->prepare("INSERT INTO tbl_mission (countryid, mission, continentid) VALUES (?, ?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->countryid);
		$statement->bindParam(2, $this->mission);
		$statement->bindParam(3, $this->continentid);

		// Execute the query
		$result = $statement->execute();

		return $result ? true : false;
	}

	// Read row(s) from the database table
	public function getMissions() {
		$statement = $this->database->prepare("SELECT * FROM tbl_mission");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function getMission($countryid) {
		$statement = $this->database->prepare("SELECT * FROM tbl_mission WHERE countryid = :countryid");
		$statement->execute(array("countryid"=>$countryid));
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function getMissionById($id) {
		$statement = $this->database->prepare("SELECT * FROM tbl_mission WHERE id = :id");
		$statement->execute(array("id"=>$id));
		$result = $statement->fetch();

		$this->id = $result['id'];
		$this->mission = $result['mission'];
	}

	public function countAll() {
		$statement = $this->database->prepare("SELECT COUNT(*) AS count FROM tbl_mission");
		$statement->execute();
		$result = $statement->fetch();

		return !empty($result['count']) ? $result['count'] : false;
	}
}
