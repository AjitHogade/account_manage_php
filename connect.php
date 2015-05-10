<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10-May-15
 * Time: 2:11 PM
 */
$servername = "localhost";
$username = "root";
$password = "";
$db = "personal_record";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
//$user=$_REQUEST["username"];
