<?php
  
    include 'database.php';
	$username=$email=$password=$confirmpass=$id=$contact=$gender=$dept=$graduate=$pass=$address=$type="";
	$fullname=$date=$organization=$designation=$location=$paddress=$batch=$blood="";
	$error=array();
  
    if(isset($_POST["register"])){   //for registration panel
		
		$fullname=$_POST["fname"];
	    $username=$_POST["uname"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$confirmpass=$_POST["cpassword"];
        $id=$_POST["id"];
		$contact=$_POST["contact"];
		$gender=$_POST["gender"];
		$dept=$_POST["dept"];
		$batch=$_POST["batch"];
        $graduate=$_POST["graduate"];
        $pass=$_POST["pass"];
        $address=$_POST["address"];	
		$date=$_POST["birth"];
		$blood=$_POST["blood"];
		$organization=$_POST["ojob"];
        $designation=$_POST["djob"];
        $location=$_POST["ljob"];
        $paddress=$_POST["paddress"];				
		
	  if (!preg_match("/^[a-zA-Z ]*$/",$username)){
		  
          array_push($error,"# Only letters and white space allowed");		  
		}
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		  
          array_push($error,"# Invalid email format");		  
		}	
		
      if(strlen($password)<5){
		  
          array_push($error,"# Minimum five length password Required .");	  
	   }
      if(strlen($id)!=6){
		  
          array_push($error,"# Student id length not match.");	  
	   }		   
		
     if($password!=$confirmpass){
		  
          array_push($error,"# The two password not match");		  
		}
     if(empty($dept)){
		 
		array_push($error,"# Select Your Department.");		 
	  }	
    	  
     if($dept=="CSE"){
		 
		 if(substr($id,2,2)=="40" || substr($id,2,2)=="41"){ //for cse id check
			 
		 }
		else{
			
		  array_push($error,"# Student cse id not match."); 
		} 
	  }	 
	 if($dept=="EEE"){	
	 
		 if(substr($id,2,2)=="20" || substr($id,2,2)=="21"){  //for eee id check  
		  
		 }
		else{
			
		  array_push($error,"# Student eee id not match."); 
		}  
	  }	
     if($dept=="ME"){
		 
	   if(substr($id,2,2)=="30" || substr($id,2,2)=="31"){  //for me id check	 
	   
		  }	 	 
		 else{
			
		  array_push($error,"# Student me id not match."); 
		  }  	 
	    }
		 
	  if(empty($graduate)){
		 
		array_push($error,"# Select Your Degree.");		 
	  }	
	  if(empty($gender)){
		 
		array_push($error,"# Select Your Gender.");		 
	  }	
	  if(empty($pass)){
		 
		array_push($error,"# Select Passing Year.");		 
	  }	
	 
			
		
	 if(count($error)==0) {
	  	 
		$q="SELECT *FROM home WHERE email='$email' OR password='$password'"; 
		$result=mysqli_query($conn, $q);
		
		if(mysqli_num_rows($result)>=1){
			
		 array_push($error,"# exits email address.");
         array_push($error,"# exits password.");		 
		 	
		}
	   else{
		   
	      $sql="INSERT INTO home(fullname,name,student_id,email,password,number,gender,
		  department,degree,passing_year,address,birth,orgination,designation,
		  location,paddress,blood,batch)
		  VALUES('$fullname','$username','$id','$email','$password','$contact','$gender','$dept',
		  '$graduate','$pass',' $address','$date','$organization','$designation','$location',
		  '$paddress','$blood','$batch')";
	      mysqli_query($conn, $sql);
		  header('location:index.php');
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
				
			 $_SESSION['sajib']=$username;	
			 header('location:student.php');
			
			  
			}
			else{
				
			   array_push($error," # username/password is worng.");	
			}
	   	
	   }
	 }  
	
  }
   
   
?>
