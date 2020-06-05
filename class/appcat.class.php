<?php
class Appcat {
	private $database;
	public $id, $appid, $category;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}
    // Read row(s) from the database table
    public function getAppcat() {
        $statement = $this->database->prepare("SELECT * FROM app_cat");
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results ? $results : false;
    }


    public function getAppcats($appid) {
        $statement = $this->database->prepare("SELECT * FROM app_cat WHERE appid = :appid");
        $statement->execute(array("appid"=>$appid));
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results ? $results : false;
    }


    public function getAppcatById($id) {
        $statement = $this->database->prepare("SELECT * FROM app_cat WHERE id = :id");
        $statement->execute(array("id"=>$id));
        $result = $statement->fetch();

        $this->id = $result['id'];
        $this->category = $result['category'];

    }
}

