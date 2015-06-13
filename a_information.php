<?php 
session_start();
if (!isset($_SESSION['username']))
{
  header('Location:login.php');
}
?>
<html>
<head>
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="/scripts/jquery.min.js"></script>
   <script src="/bootstrap/js/bootstrap.min.js"></script>
<?php include("a_header.php");?>
</head>
<body>

<div class="container">
        <div class="row">
         <div class="col-xs-9 col-md-offset-1">
                  <?php $isActive = array(0,1,0,0);?> 

        <?php include("a_tab.php"); ?>
         
<div class="panel panel-default" style = "min-height:75%">
<table class="table table-striped">
   <caption>   </caption>
        <?php include("connect.php");

        $sql="SELECT * FROM members WHERE id ='1'";
        $result = $conn->query($sql); //or trigger_error($conn->error."[$sql]");
        
        $result->num_rows;?>
         <thead>
        <tr>
            <td>Name</td>
            <td>Email    </td>
            <td>Mobile Number</td>
            <td>Username</td>
            <td>Flat Number</td>
            <td>Building Name</td>
        </tr>
    </thead>
     <?php  while( $row = $result->fetch_assoc() ) {?>
       
       <tbody>
        <tr>
           <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['mobile_no'];?></td>
             <td><?php echo $row['usernm'];?></td>
            <td><?php echo $row['flat_no'];?></td>
            <td><?php echo $row['wing'];?></td>

        </tr>
    </tbody>



        
<?php }
?>







</table>



</div>

</div>
</div></div>

</html>
</body>