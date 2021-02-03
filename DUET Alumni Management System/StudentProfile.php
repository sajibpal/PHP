<?php include 'profiledatabase.php' ?>
<!Doctype html>
<html>
<head>
  <link rel="stylesheet" href="background.css">
  <link href="coolbutton.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="header.css">
 <style>
    .move{
	  
	  position:absolute;
	  top:55%;
	  left:28%;
	  width:35%;
	  height:auto;
	  box-sizing: border-box;
	  border-radius: 5px;
      background-color:#f2f2f2;
      padding: 20px;
   }
	 

	
  	input[type=text],input[type=password],input[type=number]{
	  
	  width:55%;
	  padding:10px;
	  margin-bottom:5px;
	  border: 1px solid #ccc;
      border-radius: 4px;
	  
	}
  
  	input[type=submit]{
	 
		position:relative;	 
		background-color:#4CAF50;
		color: white;
		padding: 15px 29px;
		margin-top:15px;
		border: none;
		border-radius: 12px;
		cursor: pointer;
		left:35%;
		font-size:18px;
		font-weight:25px;
		  
	}	
 
  label{
  
    padding: 15px 12px 12px 0;
    display: inline-block;
	font-size:18px;
	width:26%;
	
  }	
  .title{
	  position:absolute;
	  color:#1AA1E7;
	  top:43%;
	  left:31%;
  }
  	
  </style>
</head> 
<body>
  

    <div class="container">
   
		 <div class="background"></div>
		 
		 <div>
			  <ul>
			
				 <li><a href="student.php"><i class="fas fa-home"></i> <?php echo $_SESSION['sajib']; ?></a></li>
				 <li><a href="payment.php"><i class="fa fa-credit-card"></i>  Payment</a></li>
				 <li><a href="StudentProfile.php"><i class="fas fa-search-plus"></i>  Profile</a></li>
				 <li><a href="loginerror.php?remove='1'"><i class="fas fa-low-vision"></i>  Logout</a></li>
			 
			  </ul>
	   </div>
	   
	   <div class="bounce">
	    
		  <h2>Welcome <?php echo $_SESSION['sajib']; ?> DUET Alumni Management system</h2>
		 
	   </div>
 
   <div>
   <h2 class="title">Update Your Profile Information</h2>
   </div>
   
   <div class="move">
 
      <form action="StudentProfile.php" method="post">
	
			<label>StudentId:</label>
			<input type="number" name="id" value="<?php echo $id;?>" disabled> 
			<label>FullName:</label>
			<input type="text" name="uname" required="" placeholder="Enter Name" value="<?php echo  $username;?>">
			<label>Password:</label>
			<input type="password" name="password" required="" placeholder="Enter New password" value="<?php echo  $password;?>" >
			 <label>Email:</label>
			<input type="text" name="email" required="" placeholder="Enter email Address" value="<?php echo  $email;?>">
			<label>Mobile:</label>
			<input type="number" name="mobile" required="" placeholder="Enter Mobile Number" value="<?php echo  $contact;?>">
			<label>Job Organization:</label>
			<input type="text" name="organ" required="" placeholder="Enter job organization name" value="<?php echo $organization;?>">
			<label>Job Designation:</label>
			<input type="text" name="desig" required="" placeholder="Enter job designation name" value="<?php echo  $designation;?>"> 
			<label>Present Address:</label>
			<input type="text" name="paddr" required="" placeholder="Enter present address" value="<?php echo  $address;?>">
			
			<input type="submit" name="profile" value="Update"> <br><br>
	
	   </form>
   </div>
   
 </div> 
</body>
</html>