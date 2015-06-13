<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" media="all" />
    </head>
<body>
<header>
   <nav class="navbar navbar-inverse">

       <div style = "color:white;float:right;;margin-right:10px;margin-top:10px;">
          Logged as 
          <?php
            if(isset($_SESSION['username'])){
          ?>
          <span class = "label label-primary label-lg" style = "font-size: 1em;">
          	<?php echo $_SESSION['username'];}?></span></div>
            <div style = "color:white;padding:10px">
                <h3>Society-Management<h3></div>

            <div style = "color:white;margin-top:-40px;margin-right:10px;float:right">
                <a href="logout.php" style="color:white"><span class ="glyphicon glyphicon-log-out"> Log-Out</a></div></nav>
</header>
</body>
</html>