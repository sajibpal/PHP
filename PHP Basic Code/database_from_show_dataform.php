<?php include 'database.php'; ?>
<?php	
     
	$username=$email=$id="";
	
	
	if(isset($_POST["search"])){
		
		$id=$_POST["idd"];
		
	  $q="SELECT  *FROM home WHERE student_id ='$id' "; 
	  
		$result=mysqli_query($conn, $q);
		
		if(mysqli_num_rows($result)>0){
			
		 while($row =mysqli_fetch_array($result)){
			
            $id=$row['student_id'];
            $username=$row['name'];
            $email=$row['email'];			
			
		 }
		 
		}
		
		
	 $conn->close();
    }	 
 ?>	  
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="background.css">
 <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 <link rel="stylesheet" href="search.css">
</head>
<body>

  <div class="background"></div>
	
  <form action="databasefromshowdataform.php" method="post">
 
    <div class="searchBox">
    <input type="number" name="idd" placeholder="Enter Your id" class="searchinput">
		 
	<button type="submit" name="search" value="Search" class="searhbuton"><i class="fas fa-search-plus"></i></button>
	</div>  
	
	
 </form>
	
   <h1> Registration Data</h1>
    
	<form action="" method="">
	 
	 	 <p>Name</p>
	     <input type="text" name="uname"  value="<?php echo  $username;?>">
		 
		 <p>Student Id</p>
	     <input type="number" name="id"  value="<?php echo $id ;?>">
		 
	     <p>Email</p>
	     <input type="email" name="email"  value="<?php echo $email;?>">
     
	   
	 </form>
   
	  
  
</body>	
</html>