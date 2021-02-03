  <?php	
 
    include 'database.php';
	session_start();
	$username=$email=$password=$id=$contact=$address=$oldpassword="";
	$newpassword=$conpassword=$post=$date="";
	$error=array();
	
	if(isset($_POST["search"])){  //for search register data from database
		
		$id=$_POST["uname"];
		
		if(!empty($id)){   //only for search id/name data from database
			
		  $q="SELECT  *FROM home WHERE student_id='$id' OR name='$id' "; 
			$result=mysqli_query($conn, $q);
			
			if(mysqli_num_rows($result)>0){
				
			 while($row = mysqli_fetch_array($result)){
				 
				echo "<tr><td>".$row["fullname"]."</td><td>".$row["student_id"]."</td><td>"
				.$row["email"]."</td><td>".$row["number"]."</td><td>"
				.$row["department"]."</td><td>".$row["degree"]."</td><td>"
				.$row["passing_year"]."</td><td>".$row["address"]."</td></tr>";
			 }
			
			}
			
		 $conn->close();
		} 
    	
	 
	  if(empty($id)){     // for search all data data from database
	 
		  $q="SELECT  *FROM home"; 
			$result=mysqli_query($conn, $q);
			
			if(mysqli_num_rows($result)>0){
				
			 while($row = mysqli_fetch_array($result)){
				 
				echo "<tr><td>".$row["fullname"]."</td><td>".$row["student_id"]."</td><td>"
				.$row["email"]."</td><td>".$row["number"]."</td><td>"
				.$row["department"]."</td><td>".$row["degree"]."</td><td>"
				.$row["passing_year"]."</td><td>".$row["address"]."</td></tr>";
			 }
			
			}
		$conn->close();	
	    }		
      	 
   }
 
 
    if(isset($_POST["payment"])){  //for search payment data from database
		
		$id=$_POST["uname"];
		
		if(!empty($id)){   //only for search payment id data from database
			
		  $q="SELECT  *FROM payment WHERE student_id='$id' "; 
			$result=mysqli_query($conn, $q);
			
			if(mysqli_num_rows($result)==1){
				
			 while($row = mysqli_fetch_array($result)){
				 
				echo "<tr><td>".$row["student_id"]."</td><td>"
				.$row["checknumber"]."</td><td>".$row["amount"]."</td><td>"
				.$row["date"]."</td></tr>";
			 }
			
			}
			
		 $conn->close();
		} 
    	
	 
	  if(empty($id)){     // for search all paymentlist data  from database
	 
		  $q="SELECT  *FROM payment "; 
			$result=mysqli_query($conn, $q);
			
			if(mysqli_num_rows($result)>0){
				
			 while($row =mysqli_fetch_array($result)){
				 
				echo "<tr><td>".$row["student_id"]."</td><td>"
				.$row["checknumber"]."</td><td>".$row["amount"]."</td><td>"
				.$row["date"]."</td></tr>";
			 }
			
			}
		$conn->close();	
	    }		
      	 
   }
   
    if(isset($_POST["search1"])){  //for search update form data from database
		
		$id=$_POST["uname"];
		
		if(!empty($id)){   //only for search id/name data from database
			
		  $q="SELECT  *FROM home WHERE student_id='$id' OR name='$id' "; 
			$result=mysqli_query($conn, $q);
			
			if(mysqli_num_rows($result)==1){
				
			 while($row = mysqli_fetch_array($result)){
				 
				$username=$row["name"];
				$id=$row["student_id"];  
				$email=$row["email"];
				$contact=$row["number"];
				$password=$row["password"];
				$address=$row["address"];
				
				$_SESSION['id']=$id;
				
			 }
			
			}
			
		 $conn->close();
		} 
      	 
   }
   
     if(isset($_POST["update"])){   //for  update data pannel
		
	    $username=$_POST["uname"];
		$email=$_POST["email"];    //id not enable new input so no need post['id'] use;
		$contact=$_POST["mobile"];
		$password=$_POST["password"];
		$address=$_POST["address"];
		$id=$_SESSION['id'];        //admindatabase global $id="" assine 2nd time page run hole
		
		$sql="UPDATE home
		 SET name='$username', email='$email',password='$password',number='$contact',address='$address'
		 WHERE student_id='$id'";
		 	
		 mysqli_query($conn, $sql);
			
	   	
	  }
	 if(isset($_POST["delete"])){   //for  delete data pannel
		
	   
		$id=$_SESSION['id'];        //admindatabase global $id="" assine 2nd time page run hole
		
		$sql="DELETE FROM home WHERE student_id='$id'";
		 	
		 mysqli_query($conn, $sql);
			
	   	
	   }   
	   
	if(isset($_POST["changepass"])){   //for  update password  pannel
		
	    $oldpassword=$_POST["oldpass"];
		$newpassword=$_POST["newpass"];
		$conpassword=$_POST["conpass"];
		
	   if(empty($oldpassword)){
		  
          array_push($error,"# Oldpassword is Required.");	  
		}
        if(empty($newpassword)){
		  
          array_push($error,"# Newpassword is Required.");	  
		}
        if(empty($conpassword)){
		  
          array_push($error,"# Conpassword is Required.");	  
		}		
		 
       if(strlen($newpassword)<5){
		  
          array_push($error,"# Minimum five length password Required .");	   
	    }		   
		
       if($newpassword!=$conpassword){
		  
          array_push($error,"# The two password not match");		  
		 }		 
		
		if(count($error)==0){
			
		   $q="SELECT *FROM admin WHERE oldpassword='$oldpassword' "; //check old password have database
		   
			$result=mysqli_query($conn, $q);
			
			if(mysqli_num_rows($result)==1){
				
				 $sql="UPDATE admin
				 SET oldpassword='$newpassword' WHERE username='duet'";
					
				 mysqli_query($conn, $sql);	
		    }
		   else{
			   
			   array_push($error,"# The Old password not match"); 
		   }
		}	
	   	
    }
	
	if(isset($_POST['post1'])){
		
		$post=$_POST['npost'];
		$date=$_POST['date'];
		$date =date("M j");
		$month=substr($date,0,3);
		$day=substr($date,4,2);
		
	   $sql="INSERT INTO news(month,day,post) VALUES('$month','$day','$post')";
        mysqli_query($conn, $sql);
		
	}
	   
  ?> 