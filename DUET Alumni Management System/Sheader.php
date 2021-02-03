<?php include 'loginerror.php'; ?>  
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="background.css">
 <link href="coolbutton.css" rel="stylesheet">
 <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="header.css">

</head>
<body>
   <div class="container">
   
		 <div class="background"></div>
		 
		 <div>
			  <ul>
			
				 <li><a href="#"><i class="fas fa-home"></i> <?php echo $_SESSION['sajib']; ?></a></li>
				 <li><a href="payment.php"><i class="fa fa-credit-card"></i> Payment</a></li>
				 <li><a href="StudentProfile.php"><i class="fas fa-search-plus"></i>  Profile</a></li>
				 <li><a href="loginerror.php?remove='1'"><i class="fas fa-low-vision"></i>  Logout</a></li>
			 
			  </ul>
	   </div>
	   
	   <div class="bounce">
	    
		  <h2>Welcome <?php echo $_SESSION['sajib']; ?> Duet Alumni Management System</h2>
		 
	   </div>
  </div>
  
  
</body>	
</html>