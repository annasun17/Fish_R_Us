<?php

require_once 'login2.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

class User{
	
	public $username;
	public $roles = array();
	
	function __construct($username){
		global $conn;
				
		$this->username = $username;
		
		$query="select role from credential where user_id ='$username' ";
		//echo $query.'<br>';  //for testing only
		
		$result = $conn->query($query);
		if(!$result) die($conn->error);
			
		$rows = $result->num_rows;		
		
		for($i=0; $i<$rows; $i++){
			$row = $result->fetch_array(MYSQLI_ASSOC);
			$role = $row['role'];
			array_push($this->role, $role);  //this is the correct code to add each role to the array
		}				
		
	}

	function getRoles(){
		return $this->role;
	}

}

?>