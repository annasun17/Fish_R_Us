<?php

require_once 'config.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

class User{
	
	public $username;
	public $roles = array();
	
	function __construct($username){
		global $conn;
				
		$this->username = $username;
		
		$query="select * from user_table where username ='$username' ";
		//echo $query.'<br>';  //for testing only
		
		$result = $conn->query($query);
		if(!$result) die($conn->error);
			
		$rows = $result->num_rows;
		
		$role = Array();
		for($i=0; $i<$rows; $i++){
			$row = $result->fetch_array(MYSQLI_ASSOC);
			//echo $row['role']; echo '<br>';
			$role[] = $row['user_role'];
		}	
					
		$this->role = $role;
	}

	function getRoles()
	{
		return $this->role;
	}

}

?>