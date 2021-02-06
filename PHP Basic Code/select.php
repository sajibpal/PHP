<!DOCTYPE html>
<html>
<head>

</head>
<body>

 <?php

  if(isset($_POST['submit']))
  {
    $maker = $_POST['Make'];
    if($maker=="Nissan"){
		
	 echo $maker;	
	 } 
   else{
	 echo "Selected any opton";  
   }	 
    }
 ?>

</body>
</html> 