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

<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>

<body>

<div class="container">
        <div class="row">
         <div class="col-xs-9 col-md-offset-1">
                  <?php $isActive = array(0,0,1,0);?> 

        <?php include("tab.php"); ?>
         
<div class="panel panel-default" style = "min-height:75%">    
      <h3><center>Register New Member</center></h3>
      <div class = "panel panel-default" style="margin-right:15px;margin-left:15px">

        <form method="post" action="memberAddition.php">
       <table class="table">
    <thead>
      <tr>
      </tr>
    </thead>
    <tbody>

      
      <tr>
        <td style="width:25%"><h4>Full-Name:</h4></td>
        <td><input type="text" class = "form-control" name= "fullname" id="name" placeholder="full name">
   </tr>
      <tr>
        <td><h4>Email-Address:</h4></td>
        <td><input type="text" class = "form-control" name="emailadd" id="username" placeholder="email address">
    </tr>
      <tr>
        <td><h4>Flat-No:</h4></td>
        <td><input type="text" class = "form-control" name= "flatno" id="" placeholder="flat number" >
</tr>
      <tr>
        <td><h4>Wing/Building-Name:</h4></td>
        <td><input type="text" class="form-control" name= "wing" id="" placeholder="wing or building name" reuired="">
 </tr>
  <tr>
        <td><h4>Mobile-No:</h4></td>
        <td><input type="text" class="form-control" name= "mobileno" id="confirmpassword" placeholder="mobile number" reuired="" value="+91">
</tr>
  <tr>
        <td><h4>Flat-Area(Sqr-Feet):</h4></td>
        <td><div class="input-group">

<div ng-app="myApp" ng-controller="personCtrl">

      <input type="text" class="form-control" ng-model="Flatarea" name="flatarea" placeholder="flat area"><br>
           Maintainence Calculated: {{mtcal()}}

      <input type="hidden" class="form-control" id="calc" name="calc" value={{mtcal()}} />
    <script type="text/javascript">
       if(isNaN({{mtcal}})){return 0; }
       else{return {{mtcal()}}; }

      </script>
    </div>
    <script>
var app = angular.module('myApp', []);
app.controller('personCtrl', function($scope) {

  //  $scope.Flatarea =0;
   
    $scope.mtcal = function() {
        var a = $scope.Flatarea;
        if($scope.Flatarea == null){ a = a+0;}
        else{
return (parseInt(a)*2);
    }
 }
});
</script>



 </tr>
  
  <tr>

        <td><h4>Create UserName:</h4></td>
        <td><input type="text" class="form-control" name= "username" id="" placeholder="create username" reuired="">
 </tr>
 

      
  
    </tbody>
  </table>                                       
<button type="submit" class="btn btn-primary pull-right" name="submit">Submit</button>
 <br><br>
</div>
</div>
</div></div>
</form>

</body>
</html>
