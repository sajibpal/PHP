<?php include 'admindatabase.php'; ?>
<!Doctype html>
<html>
<head>
 <link rel="stylesheet" href="design1.css">
 
</head> 
<body>
  <div>
	  <?php include'adminheader.php' ?>
	  
	  <div class="loginBox">
	 
	   <img src="image/forgot.png" class ="user">
	   <h2 class="top">Change Password</h2>
	   
	   <form action="password.php" method="post">
	   
	        <?php include 'errorshow.php'?>  
			  
			<p>Old Password:</p>
			<input type="text" name="oldpass"  placeholder="Enter username" value="<?php echo $oldpassword ?>">
			<p>New Password :</p>
			<input type="password" name="newpass"  placeholder="Enter new password"  value="<?php echo $newpassword ?>" >
			<p>Confirm Password :</p>
			<input type="password" name="conpass" placeholder="Enter confirm password"  value="<?php echo $conpassword ?>">
			<input type="submit" name="changepass" value="Change password">

		</form>
	 </div> 
	
 </div> 
</body>
</html>