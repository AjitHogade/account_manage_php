<html>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" media="all" />

<header>
       
        <nav class="navbar navbar-inverse">
          <div style = "color:white;padding:10px">
				<h3>Personal-Records<h3></div>

                    <div style = "color:white;margin-top:-40px;margin-right:10px;float:right">
                        <a href="adminLogin.php" style="color:white"><span class="glyphicon glyphicon-user">&nbsp;Admin-Login</a></div></nav>
            </header> <br><br>


</head>
<body>
<div class="container">
<div class="row">
            
<div class="col-xs-6 col-md-offset-3">   
 	<div class="panel panel-default">
  		<div class="panel-heading">Member-Login</div>
  			<div class="panel-body">    
      			<div  class="form">
    		<form id="contactform" form name ="login" form action = "m_verifyLogin.php" onsubmit = "return Validate()" method = "post">
     <table class="table">
    <thead>
      <tr>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="width:25%"></span><h4>Username:</h4></td>
        <td><input type="text" class = "form-control" name= "username" id="name" placeholder="UserName"></td>
      </tr>
       <tr>
        <td style="width:20%"><h4>Password:</h4></td>
        <td><input type="password" class = "form-control" name= "password" id="name" placeholder="Password"></td>
      </tr>

  </tbody>
</table><a href= "#">Forgot Password?</a>
               <input class="btn btn-primary pull-right" name="submit" id="submit" tabindex="5" value="Login" type="submit"> 	 

          		</form>   
         		</div>  
  			</div>
</div>
        <div style="color:red"><h4>Logging For first time? Click <a href="verifyUserName.php">HERE </a>to create PASSWORD</h4></div>

</div>
</div>
</div>
</body>
</html>
