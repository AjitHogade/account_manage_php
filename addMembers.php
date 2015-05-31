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
                  <?php $isActive = array(0,0,1,0);?> 

        <?php include("tab.php"); ?>
         
<div class="panel panel-default" style = "min-height:75%">    
      <h3><center>Register New Member</center></h3>
      <div class = "panel panel-default" style="margin-right:15px;margin-left:15px">
       <table class="table">
    <thead>
      <tr>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="width:25%"><h4>Full-Name:</h4></td>
        <td><input type="text" class = "form-control" name= "name" id="name" placeholder="full name">
   </tr>
      <tr>
        <td><h4>Email-Address:</h4></td>
        <td><input type="text" class = "form-control" name="Username" id="username" placeholder="email address">
    </tr>
      <tr>
        <td><h4>Flat-No:</h4></td>
        <td><input type="text" class = "form-control" name= "Password" id="" placeholder="flat number" >
</tr>
      <tr>
        <td><h4>Wing/Building-Name:</h4></td>
        <td><input type="text" class="form-control" name= "confirmPassword" id="" placeholder="wing or building name" reuired="">
 </tr>
  <tr>
        <td><h4>Mobile-No:</h4></td>
        <td><input type="text" class="form-control" name= "confirmPassword" id="confirmpassword" placeholder="mobile number" reuired="" value="+91">
 </tr>
  <tr>
        <td><h4>Flat-Area(Sqr-Feet):</h4></td>
        <td><div class="input-group">
      <input type="text" class="form-control" placeholder="flat area">
      <span class="input-group-btn">
        <button class="btn btn-success" type="button">Calculate-Amount</button>
      </span>
    </div>
 </tr>
  <tr>
        <td><h4>Maintainance-Amount:</h4></td>
        <td><input type="text" class="form-control" name= "confirmPassword" id="confirmpassword" placeholder="amount to be paid @ 5 rupees per sqr-feet" reuired="">
 </tr>
    </tbody>
  </table>                                       
<button type="submit" class="btn btn-primary pull-right" name="submit">Submit</button>
 <br><br>
</div>
</div>
</div></div>

</html>
</body>