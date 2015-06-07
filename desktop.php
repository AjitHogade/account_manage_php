<html>
<head>
<title>first page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    	width:25%;
    }
</style>
<?php
session_start();
if (!isset($_SESSION['username']))
{
  header('Location:login.php');
}

include ("header.php");

?>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-2">
                    <?php
                    include("accordion.php");
                    ?>
        </div>
   
    

    <div class="col-xs-10">
        <div class="panel panel-default">
            
        </div>
    </div>
     </div>
</div>
</body>
</html>

