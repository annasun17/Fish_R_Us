<html>
	<head></head>
	<body>
		<form method='post' action='authenticate.php'>
			Username: <input type='text' name='username'><br>
			Password: <input type='password' name='password'><br>
			<input type='submit' value='Login'>		
		</form>
	</body>
</html>

<?php

require_once 'login2.php';
require_once 'user.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if (isset($_POST['username']) && isset($_POST['password'])) {
	
	//Retrieve values from LOGIN screen
	$tmp_username = mysql_entities_fix_string($conn, $_POST['username']);
	$tmp_password = mysql_entities_fix_string($conn, $_POST['password']); 
	
	//Retrieve password from DB w/SQL
	$query = "SELECT password FROM credential WHERE user_id = '$tmp_username'";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);
	
	$rows = $result->num_rows;
	$passwordFromDB="";
	for($j=0; $j<$rows; $j++)
	{
		$result->data_seek($j); 
		$row = $result->fetch_array(MYSQLI_ASSOC);
		$passwordFromDB = $row['password'];	
	}
	
	
	//Verify Password
	if(password_verify($tmp_password,$passwordFromDB))
	{
		echo "Login Success<br>";
		
		$user = new User($tmp_username);
		
		session_start();
		$_SESSION['user'] = $user;

		header("Location: shop.php");
	}
	else
	{
		echo "Invalid Username or Password<br>";
	}
	
}

$conn->close();

//sanitization functions
function mysql_entities_fix_string($conn, $string){
	return htmlentities(mysql_fix_string($conn, $string));	
}

function mysql_fix_string($conn, $string){
	if(get_magic_quotes_gpc()) $string = stripslashes($string);
	return $conn->real_escape_string($string);
}

?>