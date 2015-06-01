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
                <a href="login.php">Logout</a></div></nav>
</header></br>

    <div class="container">
        <div class="row">

            <div class="col-xs-6 col-md-offset-3">
                            <div class="panel-heading"></div>
                                                

  <ButtonToolbar>

    

   
    <Button bsStyle='success' disabled>Add Account</Button>
&nbsp;
    <Button bsStyle='info'>Daily Expense</Button>
&nbsp;
    <Button bsStyle='warning'>My Accounts</Button>
&nbsp;
     <Button bsStyle='link'>Settings</Button>
  </ButtonToolbar>

</div></div></div><br>
<form name="document form" method="post"action="document.php">
<div class="container">
        <div class="row">

            <div class="col-xs-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Document Type</b></div>
                    <div class="panel-body">

<select name="documents">
  <option value="sel" selected="selected">DocumentType</option>

  <option value="gov">Government</option>
  <option value="bank">Banking</option>
</select>
 <input type="submit">

</div></div></div></div></div>
    </form>
</body>
</html>