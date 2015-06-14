
<?php
session_start();
include ("includes/connect.php");

if(isset($_REQUEST['Username'])) {

$user=$_REQUEST["Username"];
//$pass = $_REQUEST["password"];
//$hash= md5($pass);
$error ="user invalid";

$sql="SELECT * FROM members WHERE username ='$user'";
$result = $conn->query($sql) or trigger_error($conn->error."[$sql]");


if ($result->num_rows == true)
{
$row = $result->fetch_array();
}
else
{
	$row = false;
}

if($row == true)
{
	$_SESSION['username'] = $user ;
//	echo "Login successful";
	header('location:m_createPassword.php');

   

}
else{
        // $_SESSION['error'] = $error;
      	echo $conn->error."[$sql]";
   
}
}




?>
