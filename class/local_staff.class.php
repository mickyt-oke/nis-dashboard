<?php
class Local_staff {
	private $database;
	public $id, $first_name, $last_name, $mobile, $address, $city, $designation, $salary, $appt_date, $mail, $sex, $is_active, $created, $missionid, $countryid;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Create record in database table
	public function createLocal_staff() {
		$statement = $this->database->prepare("INSERT INTO local_staff (first_name, last_name, mobile, address, city, designation, salary, appt_date, mail, sex, missionid, countryid) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->first_name);
		$statement->bindParam(2, $this->last_name);
		$statement->bindParam(3, $this->mobile);
		$statement->bindParam(4, $this->address);
		$statement->bindParam(5, $this->city);
		$statement->bindParam(6, $this->designation);
		$statement->bindParam(7, $this->salary);
		$statement->bindParam(8, $this->appt_date);
		$statement->bindParam(9, $this->e_mail);
        $statement->bindParam(10, $this->sex);
        $statement->bindParam(11, $this->missionid);
        $statement->bindParam(12, $this->countryid);
		// Execute the query
		$result = $statement->execute();

		// Retrieve profileid and return value
		$this->id = $this->database->lastInsertId();

		return $result ? true : false;
	}

	// Read row(s) from the database table
	public function getLocal_staff() {
		$statement = $this->database->prepare("SELECT * FROM local_staff");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function getFirstname($local_staffid) {
		$statement = $this->database->prepare("SELECT firstname FROM local_staff WHERE id = :local_staffid");
		$statement->execute(array("local_staffid"=>$local_staffid));
		$result = $statement->fetch();

		return $result ? $result['firstname'] : '';
	}
    
    public function local_staffProfile() {
		$query = "SELECT local_staff.* FROM local_staff ORDER BY local_staff.created DESC";
		$statement = $this->database->prepare($query);
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function countAll() {
		$statement = $this->database->prepare("SELECT COUNT(*) AS count FROM local_staff");
		$statement->execute();
		$result = $statement->fetch();

		return !empty($result['count']) ? $result['count'] : false;
	}

	// Update row in table

	// Delete record from table
}