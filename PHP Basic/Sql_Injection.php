
<!Doctype html>
<html>
<head>
  
</head> 
<body>
 
  <form action="Sql_Injection.php" method="post">
	 
	  <input type="text" name="mail" placeholder="Enter Mail Address"> <br>
	  <input type="password" name="paword" placeholder="Enter Paaword"> <br>
	  <button type="submit"  name="login">Login</button>
	
  </form>
  
  <?php 
       
   $servername ="localhost";
   $username ="root";
   $password ="";
   $dbname="ok";

   $conn = new mysqli($servername, $username, $password,$dbname);
   
   if(isset($_POST['login'])){
	   
	  $name=$_POST["mail"];
	  $pasword=$_POST["paword"];
	  
	   
	 $stmp=$conn->prepare("select *from  injection where email=? and password=? ");
	 $stmp->bind_param("ss",$name, $pasword);
	 $stmp->execute();
	 $result=$stmp->get_result();

	  
	  
	  if(mysqli_num_rows($result)>=1){
				
			 while($row = mysqli_fetch_array($result)){ 
				 
				 $email = $row["email"];
                 header("location:profile.php?result=$email");
      			 
				
		 }
    }
	else{
		
		echo "Login fail";
	}
 } 
 
 ?> 
  
</body>
</html>