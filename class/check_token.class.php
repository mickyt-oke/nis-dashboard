<?php
class Check_token {
	private $database;
	public $id, $username, $password, $usergroup, $is_active, $created, $profileid;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}
    
    
// Read row(s) from the database table
	public function getToken() {
		$statement = $this->database->prepare("SELECT token FROM user_token where username='".$_SESSION['username']."'");
		$statement->execute(array("token"=>$token));
		
        $results = $statement->fetch();

		return $results;
        
        if($_SESSION['token'] != $token){
          
            session_destroy();
            header('Location: index.php');
        }
	}
      
}