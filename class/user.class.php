<?php
class User {
	private $database;
	public $id, $username, $password, $usergroup, $created, $profileid;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Create record in database table
	public function createUser() {
		$statement = $this->database->prepare("INSERT INTO users (username, password, usergroup, profileid) VALUES (?, ?, ?, ?)");
		// Bind all values to the placeholders
        $statement->bindParam(1, $this->username);
		$statement->bindParam(2, $this->password);
		$statement->bindParam(3, $this->usergroup);
		$statement->bindParam(4, $this->profileid);

		// Execute the query
		$result = $statement->execute();

		return $result ? true : false;
	}

	// Read row(s) from the database table
	public function getUser() {
		$statement = $this->database->prepare("SELECT * FROM users");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function userProfile() {
		$query = "SELECT users.*, profile.* FROM users JOIN profile ON users.profileid = profile.id ORDER BY users.created DESC";
		$statement = $this->database->prepare($query);
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function countAll() {
		$statement = $this->database->prepare("SELECT COUNT(*) AS count FROM users");
		$statement->execute();
		$result = $statement->fetch();

		return !empty($result['count']) ? $result['count'] : false;
	}

	public function countAttache($missionid) {
		$statement = $this->database->prepare("SELECT COUNT(missionid) AS count FROM users WHERE missionid = :id");
		$statement->execute(array("id"=> $missionid));
		$result = $statement->fetch();

		return !empty($result['count']) ? $result['count'] : false;
	}

	public function login($username, $password) {
		$statement = $this->database->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
		$statement->execute(array("username"=>$username, "password"=>$password));

		$result = $statement->fetch(

        );

		// Create SESSION variables for logged in user
		if ($result) {
			$_SESSION['us3rid'] = $result['id'];
			$_SESSION['us3rgr0up'] = $result['usergroup'];
			$_SESSION['profile'] = $result['profileid'];
			$_SESSION['mission'] = $result['missionid'];
			$_SESSION['country'] = $result['countryid'];
			$_SESSION['continent'] = $result['continentid'];
            $_SESSION['loggedin_time'] = $result['loggedin_time'];
			$_SESSION['1s@dmin'] = ($result['usergroup'] == 118) ? true : false;
		}

		return $result ? true : false;
	}

	public function logout() {
		if (isset($_SESSION['us3rid'])){
			unset($_SESSION['us3rid']);
			session_destroy();

			return true;
		}
		return false;
	}
}
