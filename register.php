<<<<<<< HEAD
=======

>>>>>>> f10e19f59ac5902040b138a5a7b4707b26204b91



<?php
// Start the session
session_start();
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" media="all" />
 <script>
   /*  function formValidate() {
         var x = document.forms["contact form"]["name"].value;
         if (x == null || x == " ") {
             alert("name should be filled");
             return false;
         }
     else {
             return true;
         }
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
<form name="contact form" method="post" action="addUser.php">

    <div class="container">
        <div class="row">

            <div class="col-xs-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">

                        <div class="input-group input-group">
                            <span class="input-group-addon" id="sizing-addon1">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<input type="text" class = "form-control" name= "name" id="name" placeholder="Name" reuired=""></div>
    <br>
                        <div class="input-group input-group">
                            <span class="input-group-addon" id="sizing-addon1">User-Name</span>
    <input type="text"class = "form-control" name="Username" id="username" placeholder="Username" reuired=""></div>
    <br>
                        <div class="input-group input-group">
                            <span class="input-group-addon" id="sizing-addon1">Password&nbsp;&nbsp;&nbsp;</span>
<input type="password" class = "form-control" name= "Password" id="password" placeholder="Enter Password"reuired=""></div>
 <br>
                        <div class="input-group input-group">
                            <span class="input-group-addon" id="sizing-addon1">ConfirmPassword&nbsp;&nbsp;&nbsp;</span>
<input type="password" class="form-control" name= "confirmPassword" id="confirmpassword" placeholder="Re-enter Password" reuired=""></div>
 <br>

<button type="submit" class="btn btn-primary pull-right" name="submit">Submit</button>
 <br>
<br></div></div></div></div></div>

</form>
<?php if(isset($_SESSION['msg']))
  echo $_SESSION['msg'];
  session_unset();
  session_destroy();
  ?>()
</body>
</html>
<<<<<<< HEAD
=======

>>>>>>> f10e19f59ac5902040b138a5a7b4707b26204b91
