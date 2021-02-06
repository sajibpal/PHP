<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
 <title> sajib pal </title>
 <style type="text/css">
   table{
    border-collapse:collapse;
    border: 1px solid green;
	width:100%;
	color:#d96459;
	font-family:monospace;
	font-size:20px;
	text-align:left;
   }
  th{
	background:#588c7e;
    color:white;
    padding:5px;		
  } 
 tr:nth-child(even){
	 
	background:#f2f2f2;	
	 
 }
 </style> 
</head>
<body>

  <form action="databasedatatableshow.php" method="post">
   
   
    Username or password  :
    <input type="text" name="uname" placeholder="Enter username/id">
	<input type="submit" name="search" value="Enter"> <br><br>
	
	</form>
	
   <h1> Student table</h1>
  
   <table>	   
   	  <tr>
		  <th>id</th>
		  <th>firstname</th>
		  <th>lastname</th>
		  <th>email</th>
		  <th>date</th>
	  </tr>
	  
  <?php	
     
	if(isset($_POST["search"])){
		
		$id=$_POST["uname"];
		
	  $q="SELECT id,firstname,lastname,email,date FROM price WHERE id='$id' OR firstname='$id' "; 
		$result=mysqli_query($conn, $q);
		
		if(mysqli_num_rows($result)>0){
			
		 while($row = $result->fetch_assoc()){
			 
			echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["date"]."</td></tr>";
		 }
		 echo "</table>";
		}
		else{
			
		   echo "data not found";
		} 
	 $conn->close();
    }	 
	 ?>	  
  </table>
</body>	
</html>