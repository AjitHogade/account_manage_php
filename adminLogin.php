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
                        <a href="userLogin.php" style="color:white">Member-Login</a></div></nav>
            </header> <br><br>
            <div class="container">
            <div class="row">
             
  <div class="col-xs-6 col-md-offset-3">   
   <div class="panel panel-default">
  <div class="panel-heading">Admin-Login</div>
  <div class="panel-body">    
      <div  class="form">
    		<form id="contactform" form name ="login" form action = "verifyLogin.php" onsubmit = "return Validate()" method = "post"> 
          
           <table class="table">
    <thead>
      <tr>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="width:20%"><h4>Username:</h4></td>
        <td><input type="text" class = "form-control" name= "username" id="name" placeholder="UserName"></td>
      </tr>
       <tr>
        <td style="width:20%"><h4>Password:</h4></td>
        <td><input type="password" class = "form-control" name= "password" id="name" placeholder="Password"></td>
      </tr>

  </tbody>
</table><a href= "#">Forgot Password?</a>
               <input class="btn btn-primary pull-right" name="submit" id="submit" tabindex="5" value="Login(ADMIN)" type="submit">   

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