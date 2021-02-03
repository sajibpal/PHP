<?php
  
    include 'database.php';
	session_start();	
	$username=$email=$password=$type="";
	$error=array();
  
   if(isset($_POST["admin"])){   //for admin login pannel
		
	    $username=$_POST["usname"];
		$password=$_POST["password"];
		$type=$_POST["log"];
			
		
	  if(empty($username)){
		  
          array_push($error,"# Name is Required.");		  
		}
      		
      if(empty($password)){
		  
          array_push($error,"# password is Required.");	  
		}
     		
       if(empty($type)){
		  
          array_push($error,"# Login Type is Required.");	  
		}	
		
	 if(count($error)==0) {
	  	
     	if($type=="student"){
			
			$q="SELECT *FROM home WHERE name='$username' AND password='$password'"; 
			$result=mysqli_query($conn, $q);
			
			if(mysqli_num_rows($result)==1){
				
			 $_SESSION['sajib']=$username;
             $_SESSION['pass']=$password;		 
			 header('location:student.php');
			
			  
			}
			else{
				
			   array_push($error," # username/password is worng.");	
			}
	   	
	   }
	   else{
		  
		  
		 $username=$_POST["usname"];
		 $password=$_POST["password"];
				
			
		  if(empty($username)){
			  
			  array_push($error,"# Name is Required.");		  
			}
				
		  if(empty($password)){
			  
			  array_push($error,"# password is Required.");	  
			}
				
			
			
		 if(count($error)==0) {
			
			$q="SELECT *FROM admin WHERE username='$username' AND oldpassword='$password'";
			
			 $result=mysqli_query($conn,$q);
			 
			if(mysqli_num_rows($result)==1){
				
			 header('location:adminhome.php');
			  }
			else{
				
			   array_push($error," # username/password is worng.");	
			   }
			
		   }
			  
	  } 
	   
	}
  } 
  
  if(isset($_POST["login"])){   //for login pannel
		
	    $username=$_POST["usname"];
		$password=$_POST["password"];
		$type=$_POST["log"];
			
		
	  if(empty($username)){
		  
          array_push($error,"# Name is Required.");		  
		}
      		
      if(empty($password)){
		  
          array_push($error,"# password is Required.");	  
		}
     		
       if(empty($type)){
		  
          array_push($error,"# Login Type is Required.");	  
		}	
		
	 if(count($error)==0) {
	  	
     	if($type=="student"){
			
			$q="SELECT *FROM home WHERE name='$username' AND password='$password'"; 
			$result=mysqli_query($conn, $q);
			
			if(mysqli_num_rows($result)==1){
				
			 $_SESSION['sajib1']=$username;
			 header('location:home.php');
			
			  
			}
			else{
				
			   array_push($error," # username/password is worng.");	
			}
	   	
	   }
	   else{
			
			$q="SELECT *FROM admin WHERE username='$username' AND oldpassword='$password'";
			
			 $result=mysqli_query($conn,$q);
			 
			if(mysqli_num_rows($result)==1){
				
			 $_SESSION['admin']='reg_duet@duet.ac.bd';	
			 header('location:home.php');
			  }
			else{
				
			   array_push($error," # username/password is worng.");	
			   }
			
		   }
	   
	  }
  } 
  
  if(isset($_GET['remove'])){   //for session destory
	  
	session_destroy();
    unset($_SESSION['sajib']);
	unset($_SESSION['pass']);	
    header('location:home.php');	
  }
  
   if(isset($_GET['logout'])){   //for session destory
	  
	session_destroy();
    unset($_SESSION['sajib1']);
	unset($_SESSION['admin']);	
    header('location:index.php');	
  }
  
?>
