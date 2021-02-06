<!Doctype html>
<html>
<body>

<?php
if(isset($_COOKIE["user"]) ) {
	
  //echo "Cookie name : user s set!<br>". "Valu is :sajib pal ";
  echo "cookie name :user  value is : ".$_COOKIE["good"];
   
} else {
     
   echo "Cookie named is not set!";
}
?>

</body>
</html> 