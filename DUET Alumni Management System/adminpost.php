<?php include 'admindatabase.php'; ?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="background.css">
 <link href="coolbutton.css" rel="stylesheet">
 <link href="design2.css" rel="stylesheet">
 <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

</head>
<body>
  <div>
    
	<?php include 'adminheader.php'; ?>
	
	<div class="loginBox">
	 
	   <img src="image\mail.png" class ="user">
	   <h2 class="top">Add Post</h2>
	   
	    <form action="adminpost.php" method="post">
	   
			  
			<p>New Post :</p><br>
	        <textarea rows="2" name="npost" required="" placeholder="Enter new post"><?php  ;?></textarea>
			<p>Date :</p>
			<input type="date" name="date" required="" placeholder="Enter new password"  value="<?php   ?>" >
			<input type="submit" name="post1" value="Post">

		</form>
	 </div> 
	 
  </div>
  
  
</body>	
</html>