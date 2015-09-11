<?php
include("includes/connect.php");
$user = "0";
$subject=$_REQUEST["subject"];
$content = $_REQUEST["content"];


$order = "INSERT INTO suggestions (user_id, c_sub, c_body)VALUES   ('$user' ,'$subject',  '$content')";
 


$result = $conn->query($order); 
 

if($result)
{
  echo("<br> data added successfully");

} else
{
   echo $conn->error."[$sql]";

}

?>