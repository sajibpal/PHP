<?php
session_start();
$_SESSION["password"] = "*565^good";
$_SESSION["name"] ="cat";
?>
<!DOCTYPE html>
<html>
<body>

<?php
 if(isset($_SESSION["name"])){   //or if(isset($_SESSION["password"]))
	 
echo "Session variables are set.";
 }
 else{
	 
  echo "Session variables are not set.";
 }
?>

</body>
</html>