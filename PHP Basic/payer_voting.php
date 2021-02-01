<!Doctype html>
<html>
<head>
  <style>
    
	body{
		
		background-color:skyblue;
		padding:0;
		margin:0;
	}
	
	#con{
		margin-left:50px;
		width:1000px;
		padding:10px;
		background-color:green;
	}
	#players{
		
		width:1000px;
		padding:8px;
		margin:auto;
	}
	
	#players img{
		
		border:3px solid orange;
		border-radius:100%;
		
	}
  form input{
	  
	  padding:10px;
	  margin:40px;
  }	
  </style>
</head>
<body>
    <div id="con">
	 <h2 align="center">Vote your love birds</h2>
	 <div id="players" align="center">
		 <img src="bird.jpg" width="300" height="200">
		 <img src="bird1.jpg" width="300" height="200">
		 <img src="bird2.jpg" width="300" height="200">
	 </div>
	   <form action="payer_voting.php" method="post" style="margin-left:20%;padding-left:20px;">
	     
		 <input type="submit" name="bird" value="Vote to Bird" >
		 <input type="submit" name="bird1" value="Vote to Bird1">
		 <input type="submit" name="bird2" value="Vote to Bird2">
		 
	   </form>
	
	
 <?php
 
   $servername ="localhost";
   $username ="root";
   $password ="";
   $dbname="ok";

// Create connection
 $conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }

 if(isset($_POST['bird'])){
	 
	 $q="update player set bird=bird+1";
	 $result=mysqli_query($conn,$q);
	 echo "<center><h2>You Vote has been Cast</h2></center>";
	 echo "<center><a href='payer_voting.php?result='1''>See Result</a></center>";
 }
 else if(isset($_POST['bird1'])){
	 
	 $q="update player set bird1=bird1+1";
	 $result=mysqli_query($conn,$q);
	 echo "<center><h2>You Vote has been Cast</h2></center>";
	 echo "<center><a href='payer_voting.php?result='1''>See Result</a></center>";
 }
 else if(isset($_POST['bird2'])){
	 
	 $q="update player set bird2=bird2+1";
	 $result=mysqli_query($conn,$q);
	 echo "<center><h2>You Vote has been Cast</h2></center>"; 
	 echo "<center><a href='payer_voting.php?result='1''>See Result</a></center>";
 }

?> 

<?php 
  
  if(isset($_GET['result'])){
	  
	 
		  $q="SELECT  *FROM player"; 
			$result=mysqli_query($conn, $q);
			
		  if(mysqli_num_rows($result)>0){
				
			 while($row = mysqli_fetch_array($result)){
				 
				$Bird=$row["bird"];
				$Bird1=$row["bird1"];
				$Bird2=$row["bird2"];
				
		     $count_all=$Bird+$Bird1+$Bird2;
			
			$Per_Bird=round($Bird*100/$count_all)."%";
			$Per_Bird1=round($Bird1*100/$count_all)."%";
			$Per_Bird2=round($Bird2*100/$count_all)."%";
			 }
		  
		  
		    echo " 
			  <div align='center'>
			    <h2 style='color:white;'>result so far  $count_all</h2>
				<p style='color:white;background-color:black;width:400px;padding:10px;'>bird: $Bird Vote($Per_Bird)</p>
				
				<p style='color:white;background-color:black;width:400px;padding:10px;'>bird1: $Bird1 Vote($Per_Bird1)</p>
				
				<p style='color:white;background-color:black;width:400px;padding:10px;'>bird2: $Bird2 Vote($Per_Bird2)</p>
			  </div>
			";
			}
		$conn->close();	
	   	
  }
?> 
</div>
</body>
</html>