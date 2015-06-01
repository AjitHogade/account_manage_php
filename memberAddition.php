<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10-May-15
 * Time: 2:16 PM
 */

session_start();

$user=$_REQUEST["Membername"];
$usernm=$_REQUEST["Roomnumber"];
$passwr=$_REQUEST["Dateofbirth"];
$cpasswr=$_REQUEST["Flatarea"];
$cpasswrr=$_REQUEST["Maintainencecalculated"];

$input = array();
$error = array();
$success = "User has been Registered successfully";

if(empty($user)){
$error['Membername'] = "MemberName must not be empty<br>";
}else{
  $input['Membername'] = $user;
}

if(empty($usernm)){
$error['Roomnumber'] = "RoomNumber should not be empty<br>";
}else{
  $input['Roomnumber'] = $usernm;
}

if(empty($passwr)){
   $error['Dateofbirth'] = "Date of Birth should not be empty<br>";
}else{
  $input['Dateofbirth'] = $passwr;
}

if(empty($cpasswr)){
   $error['Flatarea'] = "Flatarea should not be empty<br>";
}
else{
   $input['Flatarea'] = $cpasswr;
}


if(empty($cpasswrr)){
$error['Maintainencecalculated'] = "Maintainencecalculated should not be empty<br>";
}
else{
   $input['Maintainencecalculated'] = $cpasswrr;
}


if($error == 0 || $error == null){
  //session_destroy();
echo"honnn";
include("connect.php");

	
$sql = "INSERT INTO addmembers (membername, roomnumber, dateofbirth, flatarea, maintainencecalculated)
VALUES ('$user','$usernm','$passwr','$cpasswr','$cpasswrr')";
echo "New record created successfully";
if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
   $_SESSION["success"] = $success;
  header("location:registeration.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
    $_SESSION["input"] = $input;
    $_SESSION["error"]=$error;
header("location:registeration.php");
    
}
?>