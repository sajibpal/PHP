 <!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php

 echo mt_rand()."<br>";
 
 echo mt_rand(1,1000)."<br>";
 
 //for random password and encrype
 
 echo $password=mt_rand()."<br>";
 echo md5($password)."<br>";
 
 //for array sum
 
  $number=array("20","30","20");
  echo array_sum($number);
?>

</body>
</html> 