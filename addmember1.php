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
$flatarea=$_REQUEST["area"];
$calc=$_REQUEST["amount"];
$usernm=$_REQUEST["username"];
if(empty($fullnm)){
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
   $error['wing'] = "wing should not be empty<br>";
}
else{
   $input['wing'] = $wing;
}


if(empty($mobilenum)){
$error['mobileno'] = "mobileno should not be empty<br>";
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
  include("includes/connect.php");

  
$sql = "INSERT INTO members (fname, email, flat_no, wing, mobile_no, flat_area, amt_calculated, username)
VALUES ('$fullnm','$email','$flatnum','$wing','$mobilenum', '$flatarea','$calc', '$usernm')";
//echo "New record created successfully";

//if ($conn->query($sql) === TRUE) {
//$retval = mail ($to,$subject,$message,$header);
//if($retval === TRUE ){
 //  echo "New record created successfully";

}

  echo "New record created successfully";
  $_SESSION["success"] = $success;
  echo $sql;
 header("location:addMembers.php");

 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>