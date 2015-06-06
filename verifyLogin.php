<!DOCTYPE html>
<html>
<head>

<title>Verfication</title>

</head>
<body>
<?php
session_start();
include("connect.php");
//$user=$_REQUEST["username"];

if(isset($_REQUEST['username']) and  isset($_REQUEST['password'])) {
$user=$_REQUEST["username"];
$pass = $_REQUEST["password"];
$hash= md5($pass);
$error ="user invalid";
$sql="SELECT  FROM users WHERE username ='$user'and password = '$hash'";
$result = $conn->query($sql) or trigger_error($conn->error."[$sql]");
echo $sql;
if ($result->num_rows == true)
{
$res = $result->fetch_array();
}
else
{
	$res = false;
}

if($res == true)
{
	$_SESSION['username'] = $user ;
	//echo "Login succesfull. Please wait.......Redirecting to home page";
   	header('refresh:2;url=welcome.php'); 
}
else{
        $_SESSION['error'] = $error;
         header('location:login.php');
	//echo "invalid User-name or Password";
}
}
?>