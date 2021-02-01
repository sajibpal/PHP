<?php

 if(isset($_POST["submit"])){
	 
  $name=$_POST["name"];
  $email=$_POST["email"];
  $subject=$_POST["subject"];
  $comment=$_POST["comment"];
  $to="sajibpal20@gmail.com";
  $headers="From : $name<$email>";
  $message="Name :$name \n\n Email : $email \n\n Subject :$subject \n\n Comment : $comment ";
  
  if(mail($to,$subject,$message,$headers)){
	  
	echo "mail send";  
  }
  else{
	  
	echo "mail not send";  
  }
 }

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>

</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    
    <p> Name:<br> <input type="text" name="name" /></p>
	<p> Email:<br> <input type="text" name="email" /></p>
	<p> Subject:<br> <input type="text" name="subject" /></p>
	<p> Comment:<br> <textarea  name="comment" rows="6"  cols="20"></textarea></p>
	<p>  <input type="submit" name="submit"  value="send mail"/></p>
  </form>
  
</body>
</html>