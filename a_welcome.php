<?php 
session_start();
if (!isset($_SESSION['username']))
{
  header('Location:login.php');
}
include("a_header.php");
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" media="all" />
    </head>
<body>
<div class="container">
        <div class="row">
         <div class="col-xs-9 col-md-offset-1">
                  <?php $isActive = array(1,0,0,0);?> 

        <?php include("a_tab.php"); ?>
         
<div class="panel panel-default" style = "min-height:75%">    
         
 </div>
 </div></div>
 

</body>


</html>



