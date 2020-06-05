<?php 
	class Session {
		public $message;
		
		function __construct(){
			if (!isset($_SESSION)){session_start();}
			$this->check_message();
		}
		
		public function message($msg="") {
		  if(!empty($msg)) {
			// then this is "set message"
			$_SESSION['message'] = $msg;
		  } else {
			// then this is "get message"
				return $this->message;
		  }
		}
		
		private function check_message() {			
			// Is there a message stored in the session?
			if(isset($_SESSION['message'])) {
				// Add it as an attribute and erase the stored version
			  $this->message = $_SESSION['message'];
			  unset($_SESSION['message']);
			} else {
			  $this->message = "";
			}
		}
	}
?>