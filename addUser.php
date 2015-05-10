<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10-May-15
 * Time: 2:16 PM
 */
include("connect.php");
$user=$_REQUEST["name"];
$usernm=$_REQUEST["Username"];
$passwr=$_REQUEST["Password"];

//echo $user;

$sql = "INSERT INTO users (fname, user_name, password)
VALUES ('$user','$usernm','$passwr')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>