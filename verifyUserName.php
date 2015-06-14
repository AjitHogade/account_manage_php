<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
<title>Login</title>
	
     <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" media="all" />
</head>
<body>
 <!-- <?php //include("header.php") ?> -->


			<header>
       
        <nav class="navbar navbar-inverse">
          <div style = "color:white;padding:10px">
        <h3>Personal-Records<h3></div>

                    <div style = "color:white;margin-top:-40px;margin-right:10px;float:right">
                        <a href="adminLogin.php" style="color:white"><span class="glyphicon glyphicon-user">&nbsp;Admin-Login</a></div></nav>
            </header> <br><br>
            <div class="container">
            <div class="row">
             
  <div class="col-xs-6 col-md-offset-3">   
   <div class="panel panel-default">
  <div class="panel-heading">Verify User-Name to create Password</div>
  <div class="panel-body">    
      <div  class="form">
    		<form id="contactform" form name ="login" form action = "m_verifyUser.php" method = "post"> 
          
           <table class="table">
    <thead>
      <tr>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="width:30%"><h4>Enter Username:</h4></td>
        <td><input type="text" class = "form-control" name= "Username" id="name" placeholder="UserName"></td>
      </tr>
      

  </tbody>
</table>
               <input class="btn btn-primary pull-right" type ="submit" value="Proceed" type="submit">   

            </form> 
 </div>
 </div>
</div>
<?php if(isset($_SESSION['error'])) {echo $_SESSION['error'];}    ?>
</div>      
</div>
 <!--<?php //include("footer.php") ?>--> 

</body>
</html>
<?php session_destroy() ?>