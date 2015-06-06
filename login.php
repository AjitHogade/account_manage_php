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
        <div class="container-fluid"> 
        <nav class="navbar navbar-inverse">
          <div style = "color:white;padding:10px">
				<h3>Personal-Records<h3></div>
                    <div style = "color:white;margin-top:-40px;margin-right:10px;float:right">
                        <a href="register.php">Register</a></div></nav>
            </header> <br><br>
            <div class="container">
            <div class="row">
             
  <div class="col-xs-6 col-md-offset-3">   
   <div class="panel panel-default">
  <div class="panel-heading">Login</div>
  <div class="panel-body">    
      <div  class="form">
    		<form id="contactform" form name ="login" form action = "verifyLogin.php"  method = "post"> 
          
          <div class="input-group input-group">
  <span class="input-group-addon" id="sizing-addon1">User-Name</span>
  <input type="text" class="form-control" placeholder="Username"  name="username" aria-describedby="sizing-addon1">
</div><br>
    			 
    	
              <div class="input-group input-group">
  <span class="input-group-addon" id="sizing-addon1">Password</span> 
    			<input type="password"  class="form-control" id="password" name="password" > 
        </div><br>
<a href= "#">Forgot Password?</a>
               <input class="btn btn-primary pull-right" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit"> 	 
   </form> 
 </div>
 </div>

</div>
<?php if(isset($_SESSION["error"])) {echo $_SESSION['error'];}    ?>
</div>      
</div>
 <!--<?php //include("footer.php") ?>--> 

</body>
</html>
<?php session_destroy() ?>