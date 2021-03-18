<?php

require_once 'config.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

//Benjamin Smith
$userid = 'bsmith';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Clarice Johnson
$userid = 'cjohnson';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Hazel Brown
$userid = 'hbrown';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Mathew Jones
$userid = 'mjones';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Jane Garcia
$userid = 'jgarcia';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Cory Miller
$userid = 'cmiller';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Natashia Davis
$userid = 'ndavis';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Jennifer Rodriguez
$userid = 'jrodriguez';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Paul Martinez
$userid = 'pmartinez';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Preston Baar
$userid = 'pbar';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Thomas Labine
$userid = 'tlabine';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Vince Tabor
$userid = 'vtabor';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Carly Tahir
$userid = 'ctahir';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Westin Vaccari
$userid = 'wvaccari';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Susan Smith
$userid = 'ssmith';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Pam Davis
$userid = 'pdavis';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Adam Bartholio
$userid = 'abartholio';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Steven Ponder
$userid = 'sponder';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Jason Herman
$userid = 'jherman';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Daniel Camit
$userid = 'dcamit';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Robert Eadie
$userid = 'readie';
$password = 'Pass1234';
$role = 'user';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

//Default Admin
$userid = 'admin';
$password = 'password';
$role = 'admin';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $userid, $password, $role, $token);

function add_user($conn, $userid, $password, $role, $token){
	//code to add user here
	$query = "insert into credential(user_id, role, password) values ('$userid', '$role', '$token')";
	$result = $conn->query($query);
	if(!$result) die($conn->error);
}


?>


