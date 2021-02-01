<!Doctype html>
<html>
<head>
 <style>
  .color{
	 color:red;
  }
  </style>
</head>
<body>
  <?php
    $nameErr = $emailErr = $genderErr = $websiteErr =$passwordErr=  $commentErr= $idErr="";
    $name = $email = $gender = $comment = $website =$password= $id="";
	$min=154000;$max=154125;
    if($_SERVER["REQUEST_METHOD"]=="POST"){ 
	  
        if(empty($_POST["name"])){
		  
          $nameErr="Name is Required";		  
		}	  	
	   else{
		$name=test_input($_POST["name"]);
		
		 if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
           $nameErr = "Only letters and white space allowed";
          }
	   }
	   if(empty($_POST["password"])){
		  
          $passwordErr="password is Required";		  
		}	  	
	   else{
		$password=test_input($_POST["password"]);
		if(strlen($password)<8){
			
		 $passwordErr="minimum eight length password input ";	
		 }
	   } 
	  if(empty($_POST["id"])){
		  
          $idErrr="id is Required";		  
		}	  	
	   else{
		$id=test_input($_POST["id"]);
		if(($id<$min) | ($id>$max)){
			
		 $idErr="outoff range ";	
		}	
		
	   }
	  if (empty($_POST["email"])) {
         $emailErr = "Email is required";
       } 
	 else {
      $email = test_input($_POST["email"]);
     
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
      }
    }
	if (empty($_POST["web"])) {
    $websiteErr = "web site is required";
   }
    else {
    $website = test_input($_POST["web"]);
   
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
     }
   }
   if(empty($_POST["comment"])){
		  
          $commentErr="Comment is Required";		  
		}	  	
	   else{
		$comment=test_input($_POST["comment"]);
		
	   }
	   
	if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
   }  
     
 }
   function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }
  ?>
 
  <h1 class="color">Form Requerment</h1>
  
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  Name:<input type="text" name="name" >
  <span class="color">* <?php echo $nameErr;?></span>
  <br><br>
  Password:<input type="password" name="password">
  <span class="color">* <?php echo $passwordErr;?></span>
  <br><br>
   Id:<input type="number" name="id">
  <span class="color">* <?php echo $idErr;?></span>
  <br><br>
  Mail:<input type="text" name="email">
  <span class="color">* <?php echo $emailErr;?></span>
  <br><br>
  website:<input type="text" name="web">
  <span class="color">* <?php echo $websiteErr;?></span>
  <br><br>
  Comment:<textarea name="comment" rows="5" cols="40"></textarea>
  <span class="color">* <?php echo $commentErr;?></span>
  <br><br>
  Gender:<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Othar
  <span class="color">* <?php echo $genderErr;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">
  </form>
  
   <?php
   echo "<h2>Input Data</h2>";
   echo $name;
   echo "<br>";
   echo $email;
   echo "<br>";
   echo $id;
   echo "<br>";
   echo $gender;
   echo "<br>";
   echo $website;
   echo "<br>";
   echo $comment;
   echo "<br>";
  ?>
  
</body>
</html>