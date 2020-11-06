<?php 
	class Message {
		public $reply;

		function __construct(){
			$this->check_reply();
		}
		
		public function success1($reply){
            if (!empty($reply)){
                $output = "<div class='alert alert-success' role='alert'>";
                $output .= $reply;
                $output .= "</div>";

                echo $output;
            }
        }

		private function check_reply() {
			  $this->reply = "";
			}
	}
?>