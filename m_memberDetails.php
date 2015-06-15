<?php 
session_start();
if (!isset($_SESSION['username']))
{
  header('Location:adminLogin.php');
}
?>
<html>
<head>
<?php include("includes/header.php");?>
</head>
<body>

<div class="container">
        <div class="row">
         <div class="col-xs-9 col-md-offset-1">
                  <?php $isActive = array(0,1,0,0);?> 

        <?php include("includes/tab.php"); ?>
         
<div class="panel panel-default" style = "min-height:75%">    
 <h3><center>All Members</center></h3>
<?php
  $id = $_GET['id'];
  include("includes/connect.php");
 $sql = "SELECT * FROM members WHERE id = '$id'";
   $result = $conn->query($sql);
   $result->num_rows;
 // $row = $result->fetch_assoc();
  // echo "" . $row["s_id"]. "." . $row["ques"]. "<br>";
   $projects = array();
   while($member = $result->fetch_assoc()){
   $details[]= $member;
 }
         foreach ($details as $detail){
          echo $detail['fname'];
        }

      
?>




</div>
</div></div>
</body>
</html>