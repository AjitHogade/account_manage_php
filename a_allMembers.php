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
    // include("includes/connect.php");
     // fetch data from the database
     // $sql = "SELECT * from members";
     // $result = $conn->query($sql) or trigger_error($conn->error."[$sql]");
     // $row = $result->fetch_array();
?>


<table  class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
       </tr>
    </thead>

    <tbody>
       <?php 
            include("includes/connect.php");
   $sql = "SELECT * FROM members";
   $result = $conn->query($sql);
   $result->num_rows;
 // $row = $result->fetch_assoc();
  // echo "" . $row["s_id"]. "." . $row["ques"]. "<br>";
   $projects = array();
   while($member = $result->fetch_assoc()){
   $projects[]= $member;
 }
                foreach ($projects as $project){

      ?>
        <tr data-href="m_memberDetails.php" style="cursor: pointer;">
            <td><?php echo $project['fname']; ?></td>
            <td><?php echo $project['email']; ?></td>
            <td><?php echo $project['mobile_no']; ?></td>
        </tr>

      <?php ; 
           }
      ?>


    </tbody>        
</table>















</div>
</div></div>
<script>
$(document).ready(function(){
    $('table tr').click(function(){
        window.location = $(this).data('href');
        return false;
    });
});
</script>
</body>
</html>
