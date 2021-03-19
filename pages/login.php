<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Custom styles -->
    <link href="../styles/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="login.php">
      <img class="mb-4" src="../images/fish-logo.png" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <input type="text" id="username" class="form-control" placeholder="User name" name ="username" required autofocus>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-block" type="submit" value='Login' style="background-color:#5ca6d8; color:white;">Sign in</button>
    </form>
  </body>
</html>

<?php

require_once 'config.php';
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