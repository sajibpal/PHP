<?php include 'databaseerror.php'; ?>
<!Doctype html>
<html>
<head>
 <link rel="stylesheet" href="style.css">
  
</head> 
<body>
  <div class="header">
    <h2>Login</h2>
  </div>
  <form action="login.php" method="post">
  
    <?php include 'errorshow.php' ?>
	 
    <div class="inputgroup">
	  <label>Username</label>
	  <input type="text" name="uname" value="<?php echo $username;?>">
	</div>	
	<div class="inputgroup">
	  <label>Password</label>
	  <input type="password" name="password" value="<?php echo $password;?>" >
	</div>
	<div class="inputgroup">
	  
	  <button type="submit"  name="login" class="btn">Login</button>
	</div>
	  <p>Not yet a member?<a href="loginphp.php">Sign up</a></p>
  </form>
</body>
</html>