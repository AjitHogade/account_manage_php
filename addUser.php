<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10-May-15
 * Time: 2:16 PM
 */

session_start();

$user=$_REQUEST["name"];
$usernm=$_REQUEST["Username"];
$passwr=$_REQUEST["Password"];
$cpasswr=$_REQUEST["confirmPassword"];
$input = array();
$error = array();
$success = "User has been Registered successfully";
$emailerr="Email already used.";

if(empty($user)){
$error['name'] = "Your Name must not be empty<br>";
}else{
  $input['name'] = $user;
}

if(empty($usernm)){
$error['Username'] = "Username should not be empty<br>";
}else{
  $input['Username'] = $usernm;
}

if(empty($passwr)){
$error['Password'] = "password should not be empty<br>";
echo $error['Password'];
}else{
  $input['Password'] = $passwr;
}

if(empty($cpasswr)){
$error['confirmPassword'] = "Renter password<br>";
}

if($passwr != $cpasswr){
$error['cpass'] = "Should match with Password<br>";
}



if($error == 0 || $error == null){
  //session_destroy();

include("connect.php");

	$hash=md5($passwr);
$sql = "INSERT INTO users (fname, username, password)
VALUES ('$user','$usernm','$hash')";
echo "New record created successfully";

 
 if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
   $_SESSION["success"] = $success;
  header("location:register.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{

    $_SESSION["input"] = $input;
    $_SESSION["error"]=$error;
header("location:register.php");
    
}
?>