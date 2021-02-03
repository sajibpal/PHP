<?php
  
    include 'database.php';
	include 'loginerror.php'; 
	
	 $account=$date=$amount=$id="";
	  
	
		   //for show automatic id information form
			  
			$username1=$_SESSION['sajib'];
			$password1=$_SESSION['pass'];
		   
			$q="SELECT *FROM home WHERE name='$username1' AND password='$password1' "; 
			 $result=mysqli_query($conn, $q);
			
			if(mysqli_num_rows($result)==1){
				
			 while($row =mysqli_fetch_array($result)){
				
				$id=$row['student_id'];
					
				
			 }
			 
		}
				
  
   if(isset($_POST["payment"])){   //for profile update pannel
		
		$account=$_POST["account"];    
		$date=$_POST["date"];
		$amount=$_POST["amount"];
		
		
		$sql="INSERT INTO payment(student_id,checknumber,date,amount)VALUES('$id','$account','$date','$amount')";
		 	
		 mysqli_query($conn, $sql);
			
	   	
	   }
	
 
?>
