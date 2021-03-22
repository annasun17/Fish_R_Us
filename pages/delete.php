<?php

require_once  'config.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['delete']))
{
	$id = $_POST['id'];
	$query = "DELETE FROM user_table WHERE user_id='$id' ";

	$result = $conn->query($query); 
	if(!$result) die($conn->error);

	header("Location: admin.php");
}

$conn->close();

?>
