<?php 
   
     //for select sql
	 
      $q="SELECT  *FROM home WHERE student_id='$id' OR name='$id' "; 
			$result=mysqli_query($conn, $q);
			
			if(mysqli_num_rows($result)==1){
				
			 while($row = mysqli_fetch_array($result)){ //if database selected row data assine variable;
				 
				$username=$row["name"];
				$id=$row["student_id"];  
				$email=$row["email"];
			    header('location:student.php');
				
			 }
			
    	}
		
    //for insert sql
     
          $sql="INSERT INTO home(name,student_id,email)
		  VALUES('$username','$id','$email')";
	      mysqli_query($conn, $sql);	 

	//for update sql
	
        $sql="UPDATE home       
		 SET name='$username', email='$email',address='$address'
		 WHERE student_id='$id'";
		 	
		 mysqli_query($conn, $sql);
			
	   
     //for delete sql	   
	   $sql="DELETE FROM home WHERE student_id='$id'";
		 	
		 mysqli_query($conn, $sql);
		 
?>