<?php
include("includes/connect.php");
$user = $_REQUEST["user"];
$subject=$_REQUEST["subject"];
$content = $_REQUEST["content"];


$order = "INSERT INTO complaints (user_name, subject, description)VALUES   ('$user' ,'$subject',  '$content')";
 


$result = $conn->query($order); 
 

if($result)
{
  echo("<br> data added successfully");

} else
{
   echo $conn->error."[$sql]";

}

?>