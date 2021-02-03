<!DOCTYPE html>
<html>
<head>
 
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="search3.css">
  <link rel="stylesheet" href="background.css">
  <link href="coolbutton.css" rel="stylesheet">
</head>
<body>

	
  <div>	
      <div class="background"></div>
	
	  <div>
		  <ul>
		
			 <li><a href="home.php"><i class="fas fa-home"></i>  Home</a></li>
			 <li><a href="adminframe.php"><i class="fas fa-unlock-alt"></i>  Admin</a></li>
			 <li><a href="contract.php"><i class="fas fa-phone-volume"></i>  Contact Us</a></li>
			 <li><a href="index.php"><i class="fas fa-low-vision"></i>  Logout</a></li>
		 
		  </ul>
    </div>
	    <div><h3><?php echo $_GET['dep']; ?> Department List</h3></div>
	   <table>	   
		  <tr>
		      <th>Id</th>
			  <th>Name</th>
			  <th>Student Id</th>
			  <th>Batch</th>
			  <th>Degree</th>
			  <th>Blood Group</th>
			  <th>Job Organization</th>
			  <th>Details</th>
		  </tr>
		  
		  <?php include 'tabledatabase.php' ?> <!--for register datashow file add -->
		  
	  </table>
 </div> 
</body>	
</html>