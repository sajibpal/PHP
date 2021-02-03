<?php include 'paymentdatabase.php' ?>
<!Doctype html>
<html>
<head>
  <link rel="stylesheet" href="background.css">
  <link href="coolbutton.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="header.css">
 <style>
    .move{
	  
	  position:absolute;
	  top:52%;
	  left:28%;
	  width:35%;
	  height:auto;
	  box-sizing: border-box;
	  border-radius: 5px;
      background-color:#f2f2f2;
      padding: 20px;
   }
	 

	
  	input[type=text],input[type=date],input[type=number]{
	  
	  width:55%;
	  padding:10px;
	  margin-bottom:5px;
	  border: 1px solid #ccc;
      border-radius: 4px;
	  
	}
  
  	input[type=submit]{
	 
		position:relative;	 
		background-color:#4CAF50;
		color: white;
		padding: 15px 29px;
		margin-top:15px;
		border: none;
		border-radius: 12px;
		cursor: pointer;
		left:35%;
		font-size:18px;
		font-weight:25px;
		  
	}	
 
  label{
  
    padding: 15px 12px 12px 0;
    display: inline-block;
	font-size:18px;
	width:26%;
	
  }	
  .title{
	  position:absolute;
	  color:#1AA1E7;
	  top:40%;
	  left:31%;
  }
  	
  </style>
</head> 
<body>
  

    <div class="container">
   
		 <div class="background"></div>
		 
		 <div>
			  <ul>
			
				 <li><a href="student.php"><i class="fas fa-home"></i> <?php echo $_SESSION['sajib']; ?></a></li>
				 <li><a href="payment.php"><i class="fa fa-credit-card"></i>  Payment</a></li>
				 <li><a href="StudentProfile.php?"><i class="fas fa-search-plus"></i>  Profile</a></li>
				 <li><a href="loginerror.php?remove='1'"><i class="fas fa-low-vision"></i>  Logout</a></li>
			 
			  </ul>
	   </div>
	   
	   <div class="bounce">
	    
		  <h2>Welcome <?php echo $_SESSION['sajib']; ?> Duet Alumni Management system</h2>
		 
	   </div>
   </div>
 
 
   <div>
   <h2 class="title">Add Your Payment Information</h2>
   </div>
   
   <div class="move">
 
      <form action="payment.php" method="post">
	
			<label>StudentId:</label>
			<input type="number" name="id" value="<?php echo $id;?>" disabled> 
			<label>BankReceipt:</label>
			<input type="text" name="account" placeholder="Bank Receipt number" required="">
			<label>Amount(Tk):</label>
			<input type="number" name="amount" required=""> 
			<label>Date:</label>
			<input type="date" name="date"  required="">
			
			<input type="submit" name="payment" value="Submit"> <br><br>
	
	   </form>
   </div>  
</body>
</html>