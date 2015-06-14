<?php 

$pass = $_REQUEST['password'];
$cPass = $_REQUEST['c_password'];
$member = $_REQUEST['mem_name'];
if($pass != $cPass){
//$error['cpass'] = "Should match with Password<br>";
	echo "password invalid";
}


	include ("includes/connect.php");
	$hash=md5($pass);
	$sql = "UPDATE members SET password ='$hash' WHERE username='$member'";
	echo "done";

 if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
   $_SESSION["success"] = $success;
  header("location:register.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



 ?>