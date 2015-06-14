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
  echo "here will be all details of the member";
?>




</div>
</div></div>
</body>
</html>
