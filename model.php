<?php

class ModalOperations {

	public function addformdata($user,$email,$pass) {	
		$conn = new mysqli('localhost', 'id18938579_talha','Slumbeg_0059380','id18938579_testdb1');
		// Check connection
		if ($conn -> connect_error) {
			return "Not Found";
		}
		
		// prepare and bind
		$stmt = $conn -> prepare("INSERT INTO `users`(`user`, `email`, `pass`) VALUES (?,?,?)");
		$stmt -> bind_param("sss",$user,$email,$pass);
		$stmt -> execute();

		$id = $conn -> insert_id;
		$stmt -> close();
		$conn -> close();
		return $id;
	}
	public function adddriverdata($user,$email,$pass,$cnic,$phone,$choose) {	
		
		$config = parse_ini_file($_SERVER["DOCUMENT_ROOT"] . '/public_html/' . 'config.ini');
		// Create connection
		$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
		// Check connection
		if ($conn -> connect_error) {
			return "Not Found";
		}
		
		// prepare and bind
		$stmt = $conn -> prepare("INSERT INTO driver(user,email,pass,phone,cnic,choose) VALUES (?,?,?,?,?,?)");
		$stmt -> bind_param("ssssss",$user,$email,$pass,$cnic,$phone,$choose);
		$stmt -> execute();

		$id = $conn -> insert_id;
		$stmt -> close();
		$conn -> close();
		return $id;
	}
	public function getdriverdata() {

		$config = parse_ini_file($_SERVER["DOCUMENT_ROOT"] . '/public_html/' . 'config.ini');
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