<html>
<head>
<title>Sending email using PHP</title>
</head>
<body>
<?php
   $to = "swati.260890@gmail.com";
   $subject = "Society Registration";
   $usernm = "swati_k";
   $message = "    Congratulations! You have been registered in our Omkar Apartment Society PVT LTD.</br>Your USER-ID is ".$usernm.". Please create your own password using this user name.</br />use this link localhost/verifyUserName.php";
   $header = "From:aju.260890@gmail.com \r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
      echo "Message sent successfully...";
   }
   else
   {
      echo "Message could not be sent...";
   }
?>
</body>
</html>