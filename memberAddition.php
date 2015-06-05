<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10-May-15
 * Time: 2:16 PM
 */
session_start();
$fullnm=$_REQUEST["fullname"];
$email=$_REQUEST["emailadd"];
$flatnum=$_REQUEST["flatno"];
$wing=$_REQUEST["wing"];
$mobilenum=$_REQUEST["mobileno"];
$flatarea=$_REQUEST["flatarea"];
$calc=$_REQUEST["calc"];
$usernm=$_REQUEST["username"];
$pass=$_REQUEST["password"];
$input = array();
$error = array();
$success = "User has been Registered successfully";
/*if(empty($fullnm)){
$error['fullname'] = "MemberName must not be empty<br>";
}else{
  $input['fullname'] = $fullnm;
}
if(empty($email)){
$error['emailadd'] = "RoomNumber should not be empty<br>";
}else{
  $input['emailadd'] = $email;
}
if(empty($flatnum)){
   $error['flatno'] = "Date of Birth should not be empty<br>";
}else{
  $input['flatno'] = $flatnum;
}
if(empty($wing)){
   $error['wing'] = "Flatarea should not be empty<br>";
}
else{
   $input['wing'] = $wing;
}
if(empty($mobilenum)){
$error['mobileno'] = "Maintainencecalculated should not be empty<br>";
}
else{
   $input['mobileno'] = $mobilenum;
}
if(empty($flatarea)){
   $error['flatarea'] = "Flatarea should not be empty<br>";
}
else{
   $input['flatarea'] = $flatarea;
}
if(empty($amtcalc)){
   $error['amtcalc'] = "Flatarea should not be empty<br>";
}
else{
   $input['amtcalc'] = $amtcalc;
}
if($error == 0 || $error == null){
  //session_destroy();
echo"honnn";
include("connect.php");
  
$sql = "INSERT INTO addmembers (name, email, flat_no, wing, mobile_no, flatarea, amt_calculated, create_usernm, create_password)
VALUES ('$fullnm','$email','$flatnum','$wing','$mobilenum','$amtcalc', '$usernm', '$pass')";
echo "New record created successfully";
if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
   $_SESSION["success"] = $success;
  header("location:addMembers.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
    $_SESSION["input"] = $input;
    $_SESSION["error"]=$error;
header("location:addMembers.php");
    
}
?>*/
include("connect.php");
  
$sql = "INSERT INTO addmembers (name, usernm, password, email, flat_no, wing, mobile_no, flat_area, amt_calculated)
VALUES ('$fullnm','$usernm','$password','$email','$flatnum', '$wing','$mobilenum', '$flatarea', '$calc')";
//echo "New record created successfully";
if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
   $_SESSION["success"] = $success;
  // echo $sql;
   header("location:addMembers.php");
 // header("location:addMembers.php");
} else
 {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
?>