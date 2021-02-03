<?php
  
    include 'database.php';
	//include 'loginerror.php'; 
	session_start();	
	$username=$email=$password=$id=$contact=$organization=$designation=$address="";
	  
	
		   //for show information form
			  
			$username1=$_SESSION['sajib'];
			$password1=$_SESSION['pass'];
		   
			$q="SELECT *FROM home WHERE name='$username1' AND password='$password1' "; 
			 $result=mysqli_query($conn, $q);
			
			if(mysqli_num_rows($result)==1){
				
			 while($row =mysqli_fetch_array($result)){
				
				$id=$row['student_id'];
				$username=$row['fullname'];
				$email=$row['email'];
                $password=$row['password'];
				$contact=$row['number'];
                $organization=$row['orgination'];			
				$designation=$row['designation'];
				$address=$row['location'];
			 }
			 
		}
					
  
   if(isset($_POST["profile"])){   //for profile update pannel
		
	    $username=$_POST["uname"];
		$email=$_POST["email"];    //id not enable new input so no need post['id'] use;
		$contact=$_POST["mobile"];
		$password=$_POST["password"];
		$organization=$_POST["organ"];
        $designation=$_POST["desig"];
        $address=$_POST["paddr"];
		
		$sql="UPDATE home
		 SET name='$username', email='$email',password='$password',number='$contact',
		 orgination='$organization',designation='$designation',location='$address'
		 WHERE student_id=$id";
		 	
		 mysqli_query($conn, $sql);
			
	   	
	   }
	
 
?>
