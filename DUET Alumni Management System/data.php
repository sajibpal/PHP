<?php 
  
  include 'database.php';
  include 'mail.php';
  
  $username=$email=$id=$contact=$gender=$dept=$graduate=$pass=$address="";
  $fullname=$date=$organization=$designation=$location=$paddress=$batch=$blood="";
  session_start();
  
  if(isset($_GET['id'])){
	  
	$_SESSION['id']=$_GET['id']; 
	
   }
  
  
  if(isset($_SESSION['id'])){
	  
	  $id=$_SESSION['id'];
	  
	$sql="SELECT *FROM home WHERE student_id='$id'";

     $result=mysqli_query($conn, $sql);
			
			if(mysqli_num_rows($result)==1){
				
			 while($row = mysqli_fetch_array($result)){
				 
			    $fullname=$row["fullname"]; 
				$id=$row["student_id"];
                $batch=$row["batch"]; 				
				$email=$row["email"];
				$contact=$row["number"];
				$address=$row["address"];
				$gender=$row["gender"];
				$dept=$row["department"];
				$graduate=$row["degree"];
				$pass=$row["passing_year"];
				$date=$row["birth"];
				$blood=$row["blood"];
				$organization=$row["orgination"];
				$designation=$row["designation"];
				$location=$row["location"];
				$paddress=$row["paddress"];
				
			   }
			
			}	
    }
	
 ?>
<!DOCTYPE html>
<html>
<head>
 
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="background.css">
  <link href="coolbutton.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="slider1.css" rel="stylesheet"> 
 <style>
    .move{
	  
	  position:absolute;
	  top:55%;
	  left:28%;
	  width:37%;
	  height:auto;
	  box-sizing: border-box;
	  border-radius: 5px;
	  box-shadow:0 5px 15px rgba(0,0,0,.7);
      padding: 20px;
   }
	 
  .btn{
	  
	  width:68%;
	  padding:8px;
	  margin-bottom:5px;
	  font-size:19px;
	  
	 }
	 
  label{
  
    padding: 15px 12px 12px 0;
    display: inline-block;
	font-size:20px;
	width:25%;
	
  }	
  .title{
	  position:absolute;
	  color:#1AA1E7;
	  top:43%;
	  left:36%;
  }
  	
  </style>
</head>
<body>
	
  <div>	
     
	  <div class="background"></div>
	
	  <div>
		  <ul>
		
			 <li><a href="home.php"><i class="fas fa-home"></i>  Home</a></li>
			 <li><a href="adminframe.php"><i class="fas fa-unlock-alt"></i>  Admin</a></li>
			 <li><a href="contract.php"><i class="fas fa-phone-volume"></i>  Contact Us</a></li>
			 <li><a href="index.php?logout='log' "><i class="fas fa-low-vision"></i>  Logout</a></li>
		 
		  </ul>
    </div>
	 
	<div>
      <h2 class="title">All Profile Information</h2>
   </div>
   
   <div class="move">
 
      <form>
	   
			
			<label>FullName</label><label class="btn">: <?php echo $fullname; ?></label>
			<label>StudentId</label><label class="btn">:<?php echo $id; ?></label>
			<label>Email</label><label class="btn">:<?php echo $email; ?></label>
			<label>Contact </label><label class="btn">:<?php echo $contact; ?></label> 
			<label>Department</label><label class="btn">:<?php echo $dept; ?></label>
			<label>Batch</label><label class="btn">:<?php echo $batch; ?></label>
            <label>Passing Year</label><label class="btn">:<?php echo $pass; ?></label>
			<label>Degree </label><label class="btn">:<?php echo $graduate; ?></label>						
			<label>Date Of Birth </label><label class="btn">:<?php echo $date; ?></label>
			<label>Blood Group </label><label class="btn">:<?php echo $blood; ?></label>
			<label>Job Organization</label><label class="btn">:<?php echo $organization; ?></label>
			<label>Job Designation</label><label class="btn">:<?php echo $designation; ?></label>
            <label>Job Location</label><label class="btn">:<?php echo $location; ?></label>
			<label>permanent Address</label><label class="btn">:<?php echo $paddress; ?></label>
			<label>Present Address</label><label class="btn">:<?php echo $address; ?></label>
					
	   </form>
    </div>
	
	<div>
		 <div class="slider-content">
			  <div class="toggle"></div>
			  <h2>Contact Us</h2>
				 <form action="data.php" method="post">
					 <input type="email" name="to" placeholder="To"  value="<?php echo  $email; ?>">
					 <input type="text" name="subject" placeholder="Subject" required="" value="<?php echo $subject; ?>">
					 <textarea rows="5" name="message" placeholder="Message"><?php echo $message; ?></textarea>		 
					 <input type="submit" name="mail" value="Send" class="btn">
				 </form>
		 </div>
		 
		   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>  
		   <script type="text/javascript">
			 $(document).ready(function(){
			   $(".toggle").click(function(){
				$(".slider-content").toggleClass("active")
				$(".toggle").toggleClass("active")
			   })
			 })
	
          </script> 
	</div> 
	
 </div> 
</body>	
</html>