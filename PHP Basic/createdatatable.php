<?php
   $servername = "localhost";
   $username = "sajib";
   $password = "sajibpal";
   $dbname="ok";
   
   $conn=new mysqli($servername,$username,$password,$dbname);
   
   if($conn->connect_error){
	   die("Connection failed :" .$conn->connect_error);
   }
   
   $sql="CREATE TABLE login(
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   firstname VARCHAR(30) NOT NULL,
   lastname VARCHAR(30) NOT NULL,
	email  VARCHAR(50),
	address TEXT(300),
	age INT(5),
	date TIMESTAMP
	)";
   
  if($conn->query($sql)==TRUE) {
	  
	  echo "Database create Successfully";
  }
  else{
	  
	  echo "Connection database error :".$conn->error;
  }
  $conn->close();
  
?>