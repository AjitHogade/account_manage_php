<?php session_start() ?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" media="all" />
 <script>
   
function add(){
var num1 = document.myform.Flatarea.value;
             var sum = parseInt(num1) * 1.5 ;
             document.getElementById('MaintainenceCalculated').value = sum;
}
  </script>
    </head>
<body>

<header>
    <div class="container-fluid">
        <nav class="navbar navbar-inverse">
            <div style = "color:white;padding:10px">
                <h3>Personal-Records<h3></div>
            <div style = "color:white;margin-top:-40px;margin-right:10px;float:right">
                <a href="login.php">Login</a></div></nav>
</header></br>
<form name="myform" method="post" action="memberAddition.php">

    <div class="container">
        <div class="row">

            <div class="col-xs-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">

         
                        <div class="input-group input-group">
                            <span class="input-group-addon" id="sizing-addon1">Member Name</span>
    <input type="text"class = "form-control" name="Membername" id="MemberName" placeholder="Name"  value = '<?php if(isset($_SESSION["input"]['Membername'])) {echo $_SESSION['input']['Membername']; }else{echo "";} ?>'>
        <?php if(isset($_SESSION["error"]['Membername'])) {echo $_SESSION['error']['Membername'] ;}?>
</div>
    <br>
                        <div class="input-group input-group">
                            <span class="input-group-addon" id="sizing-addon1">Room Number&nbsp;&nbsp;&nbsp;</span>
<input type="text" class = "form-control" name= "Roomnumber" id="RoomNumber" placeholder="Enter Room Number"  value = '<?php if(isset($_SESSION["input"]['Roomnumber'])) {echo $_SESSION['input']['Roomnumber']; } ?>'>
 <?php if(isset($_SESSION["error"]['Roomnumber'])) {echo $_SESSION['error']['Roomnumber'] ;}?>
 </div>
 <br>
                        <div class="input-group input-group">
                            <span class="input-group-addon" id="sizing-addon1">Date Of Birth&nbsp;&nbsp;&nbsp;</span>
<input type="text" class="form-control" name= "Dateofbirth" id="DateOfBirth" placeholder="yy-mm-dd"  value = '<?php if(isset($_SESSION["input"]['Dateofbirth'])) {echo $_SESSION['input']['Dateofbirth']; } ?>'> 
<?php if(isset($_SESSION["error"]['Dateofbirth'])) {echo $_SESSION['error']['Dateofbirth'] ;}?>
</div>
 <br>

                     <div class="input-group input-group">
                            <span class="input-group-addon" id="sizing-addon1">Flat Area&nbsp;&nbsp;&nbsp;</span>
<input type="text" class="form-control" name= "Flatarea" id="FlatArea"  placeholder="Enter Flat Area" value = '<?php if(isset($_SESSION["input"]['Flatarea'])) {echo $_SESSION['input']['Flatarea']; }else{echo "";} ?>'>
 <?php if(isset($_SESSION["error"]['Flatarea'])) {echo $_SESSION['error']['Flatarea'] ;}?>
 </div>
 <br>
 <button type="button" class="btn btn-primary pull-right" name="button" onClick="add()">Calculate</button>

                      <div class="input-group input-group">
                            <span class="input-group-addon" id="sizing-addon1">Maintainence Calculated&nbsp;&nbsp;&nbsp;</span>
          
<input type="text" class="form-control" name= "Maintainencecalculated" id="MaintainenceCalculated" placeholder="Click on Calculate button" value =  >  
 </div>

 <br>
<button type="submit" class="btn btn-primary pull-right" name="submit">Save</button>
 <br>
<br></div></div></div></div></div>
<?php session_destroy(); ?>
</form>


</body>
</html>
