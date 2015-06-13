<!DOCTYPE html>

<?php
session_start();
include("connect.php");
//$user=$_REQUEST["username"];

if(isset($_REQUEST['username']) and  isset($_REQUEST['password'])) {
$user=$_REQUEST["username"];
$pass = $_REQUEST["password"];
$hash= md5($pass);
$error ="user invalid";
$sql="SELECT * FROM admin WHERE username ='$user'and password = '$hash'";
$result = $conn->query($sql); //or trigger_error($conn->error."[$sql]");
if ($result->num_rows == true)
{
$row = $result->fetch_array();

}
else{
	$row = false;
}


if($row == true)
{
	$_SESSION['username'] = $user ;
	//echo "Login succesfull. Please wait.......Redirecting to home page";
   	header('refresh:2;url=a_welcome.php'); 
}
else{
        $_SESSION['error'] = $error;
         header('location:login.php');
	//echo "invalid User-name or Password";
}
}
?>