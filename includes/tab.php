
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" media="all" />
    </head>
<body>
       <ul class="nav nav-tabs" role="tablist">
      <li <?php if($isActive[0]) echo 'class="active"' ?>>
          <a href="a_desktop.php" role="tab" data-toggle="tab">
              <icon class="fa fa-home"></icon> Desktop
          </a>
      </li>
     <li <?php if($isActive[1]) echo 'class="active"' ?>>
      <a href="a_allMembers.php" role="tab" data-toggle="tab">
          <i class="fa fa-user"></i>All-Members
          </a>
      </li>
      <li <?php if($isActive[2]) echo 'class="active"' ?>>
      
          <a href="a_addMember.php" role="tab" data-toggle="tab">
              <i class="fa fa-envelope"></i>Add-Member
          </a>
      </li>
  <li <?php if($isActive[3]) echo 'class="active"' ?>>
          <a href="a_manageMembers.php" role="tab" data-toggle="tab">
              <i class="fa fa-envelope"></i>Manage-Members
          </a>
      </li>
   <li>   
     
     
    </ul>
</body>
</html>
