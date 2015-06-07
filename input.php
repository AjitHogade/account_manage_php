<?php
include("connect.php");

$subject=$_REQUEST["subject"];
$content = $_REQUEST["content"];


$order = "INSERT INTO complaints (subject, description)VALUES   ('$subject',  '$content')";
 


$result = $conn->query($order); 
 

if($result)
{
  echo("<br> data added succeesfully");

} else
{
   echo("<br> fails");

}

?>