
<!Doctype html>
<html>
<head>
  
</head> 
<body>
 
  <form action="Crosssite_scripiting.php" method="post" autocomplete="off">
	 
	  <input type="text" name="name" placeholder="Enter name"> <br>
	  <textarea name="message" placeholder="Enter your message"></textarea> <br>
	  <button type="submit"  name="login">Login</button>
	
  </form>
  
  <?php 
       
   $servername ="localhost";
   $username ="root";
   $password ="";
   $dbname="ok";

   $conn = new mysqli($servername, $username, $password,$dbname);
   
   setcookie("name","sajib pal",strtotime("+1 day"),"/","","",true);
   
  
   
   if(isset($_POST['login'])){
	   
	  $name=htmlspecialchars($_POST["name"]);
	  $message=htmlspecialchars($_POST["message"]);
	  
	 $stmp=$conn->prepare("INSERT INTO injection(email,password) VALUES(?,?)");
	 $stmp->bind_param("ss",$name, $message);
	 $stmp->execute();
	
	 $stmp=$conn->prepare("select *from  injection");
	 $stmp->execute();
	 $result=$stmp->get_result();

	  
	  if(mysqli_num_rows($result)>=1){
				
			 while($row = mysqli_fetch_array($result)){ 
				 
				echo "<h3>".$row["email"]."</h3><p>".$row["password"]."</p>";
                
				
		 }
      }  
	
   } 
   
 
 ?> 
  
</body>
</html>