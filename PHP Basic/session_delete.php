<?php
session_start();

session_unset();
session_destroy();

?>
<!DOCTYPE html>
<html>
<body>

<?php
 if(isset($_SESSION["password"])){
echo "Session variables are set.";
 }
 else{
	 
  echo "Session variables are not set.";
 }
?>

</body>
</html>