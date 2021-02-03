<?php include 'admindatabase.php' ?>
<!DOCTYPE html>
<html>
<head>
 <link href="coolbutton.css" rel="stylesheet">
 <link rel="stylesheet" href="tooltip.css">
  <link rel="stylesheet" href="search1.css">
 <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 <style>
    .move{
	  
	  position:absolute;
	  top:67%;
	  left:28%;
	  width:35%;
	  height:auto;
	  box-sizing: border-box;
	  border-radius: 5px;
      background-color:#f2f2f2;
      padding: 20px;
   }
	 

	
 .move input[type=text],input[type=password],input[type=number]{
	  
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
		padding: 15px 26px;
		top:20px;
		border: none;
		border-radius: 12px;
		cursor: pointer;
		left:25%;
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
	  color:red;
	  top:55%;
	  left:31%;
  }
  	
  </style>
</head>
<body>
    
   <?php include 'adminheader.php' ?>
   
   <div> 
		<form action="adminupdate.php" method="post">
		 
			<div class="searchBox">
				<div class="tooltip">
					<input type="text" name="uname" placeholder="Enter Username/Id" class="searchinput">
					<span class="tooltiptext">Enter name/id and click search button</span>
				</div> 
				<button type="submit" name="search1" value="Search" class="searhbuton"><i class="fas fa-search-plus"></i></button>
			</div>  
		 </form>
		 
	   <div>
	   <h2 class="title">Update/Delete Register Information</h2>
	   </div>
	   
	   <div class="move">
	 
		  <form action="adminupdate.php" method="post">
		
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
				<label>Address:</label>
				<input type="text" name="address" required="" placeholder="Enter your Address" value="<?php echo  $address;?>">
				
				<input type="submit" name="update" value="Update">
				<input type="submit" name="delete" value="Delete"><br><br>
		
		   </form>                  
	   </div>
 </div>  
</body>	
</html>