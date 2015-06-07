<html>
<head>
<title>Complaints</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/tinymce/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>


<?php
session_start();
if (!isset($_SESSION['username']))
{
  header('Location:userLogin.php');
}

include ("header.php");

?>

</head>
<body>
<form name="complaint form" method="post" action="input.php">

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-2">
                    <?php
                    include("accordion.php");
                    ?>
                
            </div>
       
    

            <div class="col-xs-10">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><b>REGISTER YOUR COMPLAINT.</b></h4>
                    Please send us details about the incident you would like to report. We will analyze your feedback and take the appropriate measures in order that the reported situation will not occur at any other time in the future.</div> 
					   <div class="panel-body">
    				        <h4 >Subject:</h4><input type="text" class = "form-control" name= "subject" id="subject" placeholder="subject">
					        <h4 >Your Complaint:</h4><textarea name="content" style="width:100%"></textarea><br>
					        <button type="submit" class="btn btn-danger pull-right" name="submit">Send Complaint</button>
                        </div>	
				</div>
			</div>
    </div>
     </div>
</form>
</body>
</html>
