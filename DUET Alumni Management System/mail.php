<?php 
  
  $to=$from=$subject=$message="";
   
 if(isset($_POST['mail'])){
	 
	   $to=$_POST["to"];
	   $subject=$_POST["subject"];
	   $message=$_POST["message"];
	   
	   if(isset($_SESSION['sajib1'])){
		   
		  $student=$_SESSION['sajib1'];
		  $sql="SELECT *FROM home WHERE name='$student'";
		  $result=mysqli_query($conn,$sql);
		   
		  if(mysqli_num_rows($result)==1){
			  
			 while($row=mysqli_fetch_array($result)){
				 
				$from=$row["email"];
						
			 }			 
		  }	   
	   }
	   
	   if(isset($_SESSION['admin'])){
				 
		  $from=$_SESSION['admin']; 
				 
	   }
	  
	  $body="$message";
	  $headers="From:$from";
	 // mail($to,$subject,$body,$headers); 

 }  
?>
