<?php include 'databaseerror2.php'; ?>
<!Doctype html>
<html>
<head>
  <link rel="stylesheet" href="background.css">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="coolbutton.css" rel="stylesheet">
  <link rel="stylesheet" href="header.css">
  <link href="menu.css" rel="stylesheet">
  <link rel="stylesheet" href="newcss.css">
</head> 
<body>
 <div class="container">
 
    <div class="background"></div>
	
	<div>
      <ul>
    
		 <li><a href="home.php"><i class="fas fa-home"></i>  Home</a></li>
		 <li><a href="adminframe.php"><i class="fas fa-unlock-alt"></i>  Admin</a></li>
		 <li><a href="contract.php"><i class="fas fa-phone-volume"></i>  Contact Us</a></li>
		 <li><a href="loginerror.php?logout='log' "><i class="fas fa-low-vision"></i>  Logout</a></li>
	 
      </ul>
   </div>
   
   <div class="bounce">
      <h2><b><i>Welcome Alumni Management system<i><b></h2>
	</div>  
   <div> 
	   <div class="mainbg">
		 <div class="ok"> 
			
				<p><b>Alumni management software<b> provides colleges 
				and universities<br> the means to stay in touch with
				alumni,organize alumni events, <br>and coordinate
				donation and fundraising efforts.</p>
				<p>Alumni management software helps administrators 
				maintain alumni <br>contact information, plan 
				fundraising initiatives,process and track<br> donations,
				and organize alumni events and reunions.</p>
				<p>Alumni relations teams andother higher education 
				administration<br> members can utilize alumni 
				managementsoftware to perform all<br> tasks
				related to their fundraising and engagement goals.</p>
                <p>Good alumni relationships bring many benefits to both<br> the
			 institution and the alumni.Talented alumni will likely have<br> a wealth 
             of experience and skills to share with current <br>students via talks and
			 newsletters.In certain cases, this could <br>go evenfurther with alumni</p>
			 
		  </div>
	   </div>
	   
	   <div>
		    <ol> 
				 <h1>Latest Post</h1>
				 <?php 
				 
				    $sql="SELECT *FROM news ORDER BY id DESC" ;
					$result=mysqli_query($conn,$sql);
					   
					   if(mysqli_num_rows($result)>0){
					     
						  $num="";
					   while(($row = mysqli_fetch_array($result)) && $num<4){
				
             			 $num++;	
			            ?>
					   
				 
				       <li>
						  <div class="date">
							<h3><?php echo $row["month"]; ?><br><span><?php echo $row["day"]; ?></span></h3>
						  </div>
							<a href="#"><p> <?php echo $row["post"]; ?></p></a>
				      </li>
				    <?php
					    }
					
					 }
				  ?>
            </ol>
	   </div> 
        <div> 
			<div class="vertical-menu">
			  <a href="#" class="active">Registered-Menu</a>
			  <a href="tabledatashow.php?dep=CSE">CSE</a>
			  <a href="tabledatashow.php?dep=EEE">EEE</a>
			  <a href="tabledatashow.php?dep=ME">ME</a>
			  <a href="tabledatashow.php?dep=CE">CE</a>
			  <a href="#">TE</a>
			  <a href="#">IPE</a>
			  
			</div>
		</div> 		
    </div>	
	
  </div>
    
</body>
</html>