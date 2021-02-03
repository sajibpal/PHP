<?php include 'loginerror.php'; ?>

<!Doctype html>
<html>
<head>
 <link rel="stylesheet" href="design.css">
 
</head> 
<body>

 <div class="loginBox">
 
   <img src="image\images.png" class ="user">
   <h2 class="top">Log In Here</h2>
   
   <form action="index.php" method="post">
   
    <?php include 'errorshow.php'; ?>
   
    <p>Login Type :</p>
    <select  name="log" >
	  <option value="">Select Type</option>
	  <option value="student">Student</option>
	  <option value="Admin">Admin</option>   
    </select>
    <p>Username :</p>
    <input type="text" name="usname" placeholder="Enter Username" value="<?php echo $username; ?>">
	<p>Password :</p>
	<input type="password" name="password" placeholder="Enter password" value="<?php echo $password ;?>">
	<input type="submit" name="login" value="Login"> <br><br>
	
	<p>Not Yet a Member?<a href="formdesign.php"> Sign Up</a></p>
	
	</form>
 </div>  
</body>
</html>