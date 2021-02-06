<?php
  
    include 'database.php';
	session_start();
	$username=$email=$password=$confirmpass="";
	$error=array();
  
    if(isset($_POST["register"])){  //for register database
		
	    $username=$_POST["uname"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$confirmpass=$_POST["cpassword"];	
		
	  if(empty($username)){
		  
          array_push($error,"* Name is Required");		  
		}
      if(empty($email)){
		  
          array_push($error,"* Email is Required");		  
		}	
		
      if(empty($password)){
		  
          array_push($error,"* Password is Required");	  
		}	
     if($password!=$confirmpass){
		  
          array_push($error,"* The two paaaword not match");		  
		}		
		
	 if(count($error)==0) {
	  	 
		$q="SELECT *FROM home WHERE email='$email'"; 
		$result=mysqli_query($conn, $q);
		
		if(mysqli_num_rows($result)>=1){
			
		 echo "exits email address";	
		}
	   else{
		   
	      $sql="INSERT INTO home(name,email,password) VALUES('$username','$email','$password')";
	      mysqli_query($conn, $sql);
		
		  header('location:login.php');
	   }
		
	   }
	
   }
   
   if(isset($_POST["login"])){  //for  login database
		
	    $username=$_POST["uname"];
		$password=$_POST["password"];
			
		
	  if(empty($username)){
		  
          array_push($error,"* Name is Required");		  
		}
      		
      if(empty($password)){
		  
          array_push($error,"* Password is Required");	  
		}	
     	
		
	 if(count($error)==0) {
	  	 
		$q="SELECT *FROM home WHERE name='$username' AND password='$password'"; 
		$result=mysqli_query($conn, $q);
		
		if(mysqli_num_rows($result)==1){
			
		  $_SESSION['name']= $username;
		  $_SESSION['message']="hi sajib pal";	
		  header('location:home.php');
		}
		else{
			
		   array_push($error,"username/password is worng");	
		}
	   	
	   }
	
   }
   
   if(isset($_GET["move"])){   //for logout and sesion destory
	session_destroy(); 
    unset( $_SESSION['name']);
	unset($_SESSION['message']);
    header('location:login.php');	
   } 
?>
