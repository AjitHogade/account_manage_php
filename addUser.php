<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10-May-15
 * Time: 2:16 PM
 */

session_start();
include("connect.php");
$user=$_REQUEST["name"];
$usernm=$_REQUEST["Username"];
$passwr=$_REQUEST["Password"];
$cpasswr=$_REQUEST["confirmPassword"];

if(!$_POST["name"] || !$_POST["Password"] || !$_POST["Username"] || !$_POST["confirmPassword"])
{
$msg = "You left one or more of the required fields.";
header("Location:http://localhost/register.php?msg=$msg");
}
     
if($passwr == $cpasswr){
	$hash=crypt($passwr);
$sql = "INSERT INTO users (Name, username, password)
VALUES ('$user','$usernm','$hash')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
    else{
    	echo "confirmpassword is invalid";
    }

?>