<?php include 'databaseerror.php'; ?>
<!Doctype html>
<html>
<head>
 <link rel="stylesheet" href="style.css">
</head> 
<body>
  <div class="header">
    <h2>Registration</h2>
  </div>
  
  <form action="loginphp.php" method="post">
    
	<?php include 'errorshow.php' ?>
	 
    <div class="inputgroup">
	  <label>Username</label>
	  <input type="text" name="uname" value="<?php echo $username;?>">
	</div>
	<div class="inputgroup">
	  <label>Email</label>
	  <input type="mail" name="email" value="<?php echo $email;?>">
	</div>
	<div class="inputgroup">
	  <label>Password</label>
	  <input type="password" name="password" value="<?php echo $password;?>">
	</div>
	<div class="inputgroup">
	  <label>Confirm Password</label>
	  <input type="password" name="cpassword" value="<?php echo $confirmpass;?>">
	</div>
	
	  <button type="submit"  name="register" class="btn">Registration</button>
	</div>
	  <p>Already a member?<a href="login.php"> Sign in</a></p>
  </form>
 
</body>
</html>