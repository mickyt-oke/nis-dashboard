<?php 
	class Photograph {
		public $filename;
		
		public static $upload_dir;
		private $temp_path;
		
		public $errors = array();
		protected $upload_errors = array(
			UPLOAD_ERR_OK 			=> "No errors.",
			UPLOAD_ERR_INI_SIZE  	=> "Larger than upload_max_filesize.",
		  	UPLOAD_ERR_FORM_SIZE 	=> "File is larger than 2MB.",
		  	UPLOAD_ERR_PARTIAL 		=> "Partial upload.",
		  	UPLOAD_ERR_NO_FILE 		=> "No file selected for upload.",
		  	UPLOAD_ERR_NO_TMP_DIR 	=> "No temporary directory.",
		  	UPLOAD_ERR_CANT_WRITE 	=> "Can't write to disk.",
		  	UPLOAD_ERR_EXTENSION 	=> "File upload stopped by extension."
		);
		
		public function attach_file($file){
			// Perform error checking on the form parameters
			if(!$file || empty($file) || !is_array($file)) {
			  // error: nothing uploaded or wrong argument usage
			  $this->errors[] = "No file was uploaded.";
			  return false;
			} elseif($file['error'] != 0) {
			  // error: report what PHP says went wrong
			  $this->errors[] = $this->upload_errors[$file['error']];
			  return false;
			} else {
				if(($file['type'] == 'image/jpg') || ($file['type'] == 'image/jpeg') || ($file['type'] == 'image/png') || ($file['type'] == 'image/gif')) {
					 //File is an image
					 // Set object attributes to the form parameters.
					  $this->temp_path  = $file['tmp_name'];
					  $this->filename   = basename($file['name']);
					 return true;
				}
				else {
				  $this->errors[] = "File is not an Image";
					return false;
				}
			}
		}
		
		public function save() {
			// Make sure there are no errors
			
			// Can't save if there are pre-existing errors
		  if(!empty($this->errors)) { return false; }
		
		  // Can't save without filename and temp location
		  if(empty($this->filename) || empty($this->temp_path)) {
			$this->errors[] = "The file location was not available.";
			return false;
		  }
			
			// Determine the target_path
		  $target_path = self::$upload_dir.$this->filename;
		  
		  // Make sure a file doesn't already exist in the target location
		  if(file_exists($target_path)) {
			$this->errors[] = "The file {$this->filename} already exists.";
			return false;
		  }

		 // Check for width and height of photo
		 $imagedimension = getimagesize($this->temp_path);

		//var_dump($imagedimension); exit;

		if ($imagedimension[0] != 710) {
			$this->errors[] = "Please ensure the image width is 710px";
			return false;
		}
		if ($imagedimension[1] != 290) {
			$this->errors[] = "Please ensure the image height is 290px";
			return false;
		}
		  
		  // Attempt to move the file 
		  if(move_uploaded_file($this->temp_path, $target_path)) {
				// Success
				// We are done with temp_path, the file isn't there anymore
				unset($this->temp_path);
				return true;
			} else {
				// File was not moved.
				$this->errors[] = "The file upload failed, possibly due to incorrect permissions on the upload folder.";
				return false;
			}
		}
	}
?>