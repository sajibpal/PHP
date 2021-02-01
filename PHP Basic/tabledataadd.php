<?php
   $servername = "localhost";
   $username = "root";
   $password ="";
   $dbname="ok";
   
   $conn=new mysqli($servername,$username,$password,$dbname);
   
   if($conn->connect_error){
	   die("Connection failed :" .$conn->connect_error);
   }
   
   $sql="INSERT INTO price(firstname,lastname,email) VALUES('sajib','pal','sajibpal20@gmail.com')";
  
   
  if($conn->query($sql)==TRUE) {
	  
	  $last_id=$conn->insert_id;
	  
	  echo "Database last  id : ".$last_id;
  }
  else{
	  
	  echo "Connection database error :".$conn->error;
  }
  $conn->close();
  
?>
