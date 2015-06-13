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
   <caption><b>Member List</b></caption>
        <?php include("connect.php");

        $sql="SELECT * FROM members";
        $result = $conn->query($sql); //or trigger_error($conn->error."[$sql]");
        $result->num_rows;
        // var_dump($result);
           $row = $result->fetch_assoc() ;

        ?>
         <thead>
        <tr>
            <td>Name</td>
            <td>email</td>
            <td>mobile number</td>
        </tr>
    </thead>
     <?php     foreach ($row as $key => $value) {
              //var_dump($row);
      ?>
                                                  
       <tbody>
        <tr>
           <?php  echo "<td>" . '<a href="a_information.php">'. $row['name'] .'</a>' .  "</td>";?>


            <td><?php echo $row['email'] ;?></td>
            <td><?php echo $row['mobile_no'] ;?></td>
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