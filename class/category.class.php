<?php

class Category {
	private $database;
	public $id, $appid, $category;
	
	
	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}
	
	public function getCategory() {
		$statement = $this->database->prepare("SELECT * FROM app_cat");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		return $results ? $results : false;
	}
	
	public function getCategorys($appid) {
		$statement = $this->database->prepare("SELECT * FROM app_cat WHERE appid = :appid");
		$statement->execute(array("appid"=>$appid));
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		return $results ? $results : false;
	}
	
	public function getCatById($id) {
		$statement = $this->database->prepare("SELECT * FROM app_cat WHERE id = :id");
		$statement->execute(array("id"=>$id));
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		$this->id = $results['id'];
		$this->category = $results['category'];
	}

}


