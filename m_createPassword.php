<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" media="all" />
    </head>
<body>
<header>
    <div class="container-fluid">
        <nav class="navbar navbar-inverse">
            <div style = "color:white;padding:10px">
                <h3>Personal-Records<h3></div>
            <div style = "color:white;margin-top:-40px;margin-right:10px;float:right">
                <a href="login.php" style="color:white">Login</a></div></nav>
</header></br>
<form name="contact form" method="post" action="m_Password.php">

    <div class="container">
        <div class="row">

            <div class="col-xs-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">

<input type="text" class = "form-control" name= "mem_name" id="password" placeholder="Enter Password"  value = '<?php if(isset($_SESSION["username"])) {echo $_SESSION['username'];} ?>'>
     <table class="table">
    <thead>
      <tr>
       
      </tr>
    </thead>
    <tbody>
            <tr>
        <td><h4>Password:</h4></td>
        <td><input type="password" class = "form-control" name= "password" id="password" placeholder="Enter Password"  value = '<?php if(isset($_SESSION["input"]['Password'])) {echo $_SESSION['input']['Password']; } ?>'>
 <?php if(isset($_SESSION["error"]['Password'])) {echo $_SESSION['error']['Password'] ;}?> </td>
      </tr>
      <tr>
        <td><h4>Confirm-Password:</h4></td>
        <td><input type="password" class="form-control" name= "c_password" id="confirmpassword" placeholder="Re-enter Password" reuired="">
 <?php if(isset($_SESSION["error"]['cpass'])) {?><div class = "panel panel-danger"><div style="color:red"><?php echo $_SESSION['error']['cpass'] ;}?></div></div></td>
      </tr>
    </tbody>
  </table>                                       
<button type="submit" class="btn btn-primary pull-right" name="submit">Submit</button>
 <br>
 
</div></div><div class = "panel panel-success"><?php if(isset($_SESSION["success"])) {echo $_SESSION['success'];}?>
              <div class = "panel panel-success"><?php if(isset($_SESSION["Emailerr"])) {echo $_SESSION['Emailerr'];}?></div></div></div></div>
<?php session_destroy(); ?>
</form>
</body>
</html>
