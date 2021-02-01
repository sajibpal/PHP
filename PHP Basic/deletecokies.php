 <?php
 $cookie_name ="user";
$cookie_value = "sajib pal";
setcookie($cookie_name, $cookie_value, time()-3600, "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html> 