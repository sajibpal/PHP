<!DOCTYPE html>
<html>
<head>
 
 <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 <link rel="stylesheet" href="search.css">
 <link rel="stylesheet" href="tooltip.css">
</head>
<body>

  <?php include 'adminheader.php' ?>
	
  <div>	
	  <form action="registerlist.php" method="post">
	 
		<div class="searchBox">
			<div class="tooltip">
				<input type="text" name="uname" placeholder="Enter Username/Id" class="searchinput">
				<span class="tooltiptext">Show all data click search button</span>
			</div> 
			<button type="submit" name="search" value="Search" class="searhbuton"><i class="fas fa-search-plus"></i></button>
		</div>  
	 </form>
		
	   <h1> Registration List</h1>
	  
	   <table>	   
		  <tr>
			  <th>Name</th>
			  <th>Student Id</th>
			  <th>Email</th>
			  <th>Contact Number</th>
			  <th>Department</th>
			  <th>Degree</th>
			  <th>Passing Year</th>
			  <th>Address</th>
		  </tr>
		  
		  <?php include 'admindatabase.php' ?> <!--for register datashow file add -->
		  
	  </table>
 </div> 
</body>	
</html>