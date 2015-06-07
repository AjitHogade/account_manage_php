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
<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
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
        <form method="post" action="memberAddition.php">
          <div ng-app="myApp" ng-controller="personCtrl">
       <table class="table">
    <thead>
      <tr>
      </tr>
    </thead>
    <tbody>

      
      <tr>
        <td style="width:25%"><h4>Full-Name:</h4></td>
        <td><input type="text" class = "form-control" name= "fullname" id="name" placeholder="full name"></td>
   </tr>
      <tr>
        <td><h4>Email-Address:</h4></td>
        <td><input type="text" class = "form-control" name="emailadd" id="username" placeholder="email address"></td>
    </tr>
      <tr>
        <td><h4>Flat-No:</h4></td>
        <td><input type="text" class = "form-control" name= "flatno" id="" placeholder="flat number" ></td>
</tr>
      <tr>
        <td><h4>Wing/Building-Name:</h4></td>
        <td><input type="text" class="form-control" name= "wing" id="" placeholder="wing or building name" reuired=""></td>
 </tr>
  <tr>
        <td><h4>Mobile-No:</h4></td>
        <td><input type="text" class="form-control" name= "mobileno" id="confirmpassword" placeholder="mobile number" reuired="" value="+91"></td>
 </tr>
  <tr>

        <td><h4>Flat-Area(Sqr-Feet):</h4></td>
        <td>
          <input type="text" class="form-control" name= "area" id="" placeholder="Area of flat(sqr-feet)" reuired="" ng-model="firstName"></td> 
 </tr>
  <tr>
        <td><h4>Maintainance-Amount:</h4></td>
        <td> 
          <i style="font-size:30px">&#x20b9; {{fullName()}} </i><input type="hidden" name = "amount" value ={{fullName()}} ></td>
 </tr>
 
  <tr>

        <td><h4>Create UserName:</h4></td>
        <td><input type="text" class="form-control" name= "username" id="" placeholder="create username" reuired=""></td>
 </tr>


    </tbody>
  </table> 
  </div>                                       
<button type="submit" class="btn btn-primary pull-right" name="submit">Submit</button>
 <br><br>
</div>
</div>
</div></div>
</form>
<script>
var app = angular.module('myApp', []);
app.controller('personCtrl', function($scope) {
    $scope.firstName ="0"
    $scope.fullName = function() {
        var a = $scope.firstName;
        if(!isNaN(a)){
        return (parseFloat(a)*1.50);
        }
        else{
          return (parseFloat(0));

    }
  }
});
</script>
</body>
</html>
