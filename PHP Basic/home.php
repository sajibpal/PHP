<?php session_start(); ?>
<!Doctype html>
<html>
<head>
 <link rel="stylesheet" href="style.css">
</head> 
<body>
   <div>
	   <?php if(isset($_SESSION['name'])): ?>
	      <div>
			<h2><?php echo $_SESSION['message']; ?></h2>
			<p>welcome <strong><?php echo $_SESSION['name']; ?></strong></p>
			<p><a href="databaseerror.php?move='a' ">logout</a></p>
		 </div>	
	   <?php endif ?>
   </div>	   
</body>
</html>