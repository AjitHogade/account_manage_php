<?php
include("connect.php");
if(isset($_REQUEST['username']) and  isset($_REQUEST['password'])) {

$user=$_REQUEST["username"];
$pass = $_REQUEST["password"];


$sql="SELECT * FROM users WHERE user_name ='$user' and password = '$pass'";
	
$result = $conn->query($sql) or trigger_error($conn->error."[$sql]");
if ($result->num_rows == true){

$row = $result->fetch_array();

}else{
	$row = false;
}

if($row == true)
{
	$_SESSION['username'] = $user ;
	echo "Login succesfull. Please wait.......Redirecting to home page";
   	header('refresh:2;url=welcome.php'); 

}
else{
	echo "invalid User-name or Password";
}
}


?>