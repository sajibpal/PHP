<?php 
 
  session_start();

   include "database.php";
 //echo $_SESSION["email"] ;
 
  
   if(isset($_POST['submit'])){
	
	  
	 $stmp=$conn->prepare("delete from injection where email=?");
	 $stmp->bind_param("s",$_SESSION["email"]);
	 
	 if($stmp->execute()) {
		
		echo "your account is delete";
	}
   }
?>