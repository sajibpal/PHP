<!DOCTYPE html>
<html>
<head>
 
 <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 <link rel="stylesheet" href="search.css">
 <link rel="stylesheet" href="tooltip.css">
</head>
<body>

    <?php include 'adminheader.php' ?>
	
  <form action="paymentlist.php" method="post">
 
    <div class="searchBox">
		<div class="tooltip">
			<input type="text" name="uname" placeholder="Enter Student Id" class="searchinput">
			<span class="tooltiptext">Show all data click search button</span>
		</div> 
		<button type="submit" name="payment" value="Search" class="searhbuton"><i class="fas fa-search-plus"></i></button>
	</div>  
 </form>
	
   <h1> Payment List</h1>
  
   <table>	   
   	  <tr>
		  
		  <th>Student Id</th>
		  <th>Check Number</th>
		  <th>Amount(Tk)</th>
		  <th>Date</th>
		  
	  </tr>
	  
	  <?php include 'admindatabase.php' ?> <!--for payment  datashow file add -->
	  
  </table>
</body>	
</html>