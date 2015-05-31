<?php 
session_start();
if (!isset($_SESSION['username']))
{
  header('Location:login.php');
}
?>
<html>
<head>
<?php include("header.php");?>
</head>
<body>

<div class="container">
        <div class="row">
         <div class="col-xs-9 col-md-offset-1">
                  <?php $isActive = array(0,0,0,1);?> 

        <?php include("tab.php"); ?>
         
<div class="panel panel-default" style = "min-height:75%">    
  <h3>ManageMember</h3>
</div>
</div></div>
</html>
</body>