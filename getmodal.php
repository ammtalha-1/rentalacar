<?php

class ModalOperations {
	public function userlogin() {
		$conn = new mysqli('localhost', 'id18938579_talha','Slumbeg_0059380','id18938579_testdb1');	
	
		// Check connection
		if ($conn -> connect_error) {
			return FALSE;
		}
		
		$sql = "SELECT * From `users`";
		$result = $conn -> query($sql);
		
		$conn -> close();
		return $result;
	}

	public function getdriverdata() {

		$config = parse_ini_file($_SERVER["DOCUMENT_ROOT"] . '/user/' . 'config.ini');
		// Create connection
		$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);	
	
		// Check connection
		if ($conn -> connect_error) {
			return FALSE;
		}
		
		$sql = "SELECT * From `driver`";
		$result = $conn -> query($sql);
		
		$conn -> close();
		return $result;
	}

}
?>