<?php 

 include 'database.php';
 $no="";
 $departname=$_GET['dep'];
 
 if($departname=="CSE"){    //for cse department list
	 
		  $q="SELECT  *FROM home  WHERE department IN ('CSE') ORDER BY student_id ASC "; 
			$result=mysqli_query($conn, $q);
			
			if(mysqli_num_rows($result)>0){
				
			 while($row = mysqli_fetch_array($result)){
				
               $no++;				
			  ?>
			  <tr> 
			       <td><?php echo $no; ?></td>
			       <td><?php echo $row["fullname"]; ?></td>
			       <td><?php echo $row["student_id"]; ?></td>
				   <td><?php echo $row["batch"]; ?></td>
				   <td><?php echo $row["degree"]; ?></td>
				   <td><?php echo $row["blood"]; ?></td>
				   <td><?php echo $row["orgination"]; ?></td>
				   <td ><a class="link" href="data.php? id=<?php echo $row['student_id']?> ">Details</a></td>
			  </tr>
			
		    <?php
			   } 
			}
         }
	
    if($departname=="EEE"){      //for eee department list
	 
		  $q="SELECT  *FROM home  WHERE department IN ('EEE') ORDER BY student_id ASC "; 
			$result=mysqli_query($conn, $q);
			
			if(mysqli_num_rows($result)>0){
				
			 while($row = mysqli_fetch_array($result)){
				
               $no++;				
			  ?>
			  <tr> 
			       <td><?php echo $no; ?></td>
			       <td><?php echo $row["name"]; ?></td>
			       <td><?php echo $row["student_id"]; ?></td>
				   <td><?php echo $row["batch"]; ?></td>
				   <td><?php echo $row["degree"]; ?></td>
				   <td><?php echo $row["blood"]; ?></td>
				   <td><?php echo $row["orgination"]; ?></td>
				   <td ><a class="link" href="data.php? id=<?php echo $row['student_id']?> ">Details</a></td>
			  </tr>
			
		    <?php
			   } 
			}
         }
		
      if($departname=="ME"){     //for me department list
	 
		  $q="SELECT  *FROM home  WHERE department IN ('ME') ORDER BY student_id ASC "; 
			$result=mysqli_query($conn, $q);
			
			if(mysqli_num_rows($result)>0){
				
			 while($row = mysqli_fetch_array($result)){
				
               $no++;				
			  ?>
			  <tr> 
			       <td><?php echo $no; ?></td>
			       <td><?php echo $row["name"]; ?></td>
			       <td><?php echo $row["student_id"]; ?></td>
				   <td><?php echo $row["batch"]; ?></td>
				   <td><?php echo $row["degree"]; ?></td>
				   <td><?php echo $row["blood"]; ?></td>
				   <td><?php echo $row["orgination"]; ?></td>
				   <td ><a class="link" href="data.php? id=<?php echo $row['student_id']?> ">Details</a></td>
			  </tr>
			
		    <?php
			   } 
			}
         }	
		 
	 if($departname=="CE"){     //for ce department list
	 
		  $q="SELECT  *FROM home  WHERE department IN ('CE') ORDER BY student_id ASC "; 
			$result=mysqli_query($conn, $q);
			
			if(mysqli_num_rows($result)>0){
				
			 while($row = mysqli_fetch_array($result)){
				
               $no++;				
			  ?>
			  <tr> 
			       <td><?php echo $no; ?></td>
			       <td><?php echo $row["name"]; ?></td>
			       <td><?php echo $row["student_id"]; ?></td>
				   <td><?php echo $row["batch"]; ?></td>
				   <td><?php echo $row["degree"]; ?></td>
				   <td><?php echo $row["blood"]; ?></td>
				   <td><?php echo $row["orgination"]; ?></td>
				   <td ><a class="link" href="data.php? id=<?php echo $row['student_id']?> ">Details</a></td>
			  </tr>
			
		    <?php
			   } 
			}
			
         }		 

?>		
		