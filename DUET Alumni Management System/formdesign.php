<?php include 'databaseerror2.php'; ?>
<!Doctype html>
<html>
<head>
  <link href="form.css" rel="stylesheet">
  <link rel="stylesheet" href="background.css">
</head>
<body>

   <div class="background"></div>
   
   <div class="wrapper">
   
       <h2>Registration Form</h2>
	
	 <form action="formdesign.php" method="post">
	 
	  <?php include 'errorshow.php'; ?>
	 
	  <div class="input-field">
	     <input type="text" name="fname" required="" value="<?php echo  $fullname;?>">
		 <label>Fullname</label>
	   </div>
	   <div class="input-field">
	     <input type="text" name="uname" required="" value="<?php echo  $username;?>">
		 <label>Username</label>
	   </div>
	   <div class="input-field">
	    <label>Department </label><br>
		<select  name="dept" >
		   <option value="<?php echo $dept ;?>"><?php echo $dept ;?></option>
		   <option value="">Select Department</option>
		   <option value="CSE">CSE</option>
		   <option value="EEE">EEE</option>
		   <option value="ME">ME</option>
       </select>
	  </div>
	   <div class="input-field">
	     <input type="number" name="id" required="" value="<?php echo $id ;?>">
		 <label>Student Id</label>
	   </div>
	   <div class="input-field">
	     <input type="text" name="batch" required="" value="<?php echo $batch ;?>">
		 <label>Batch no</label>
	   </div>
	   <div class="input-field">
	     <input type="number" name="contact" required="" value="<?php echo $contact ;?>">
		 <label>Contact Num</label>
	   </div>
	   <div class="input-field">
	     <input type="email" name="email" required="" value="<?php echo $email;?>">
		 <label>Email </label>
	   </div>
	   <div class="input-field">
	     <input type="password" name="password" required="" value="<?php echo $password;?>">
		 <label>Password </label>
	   </div>
	   <div class="input-field">
	     <input type="password" name="cpassword" required="" value="<?php echo $confirmpass;?>">
		 <label>Confirm password </label>
	   </div>
	   <div class="input-field">
	     <input type="text" name="birth" required="" value="<?php echo $contact ;?>">
		 <label>Date of birth</label>
	   </div>
	    <div class="input-field">
	    <label>Blood group </label><br>
		<select  name="blood" >
		   <option value="<?php echo $blood ;?>"><?php echo $blood ;?></option>
		   <option value="">Select Blood group </option>
		   <option value="A+">A+</option>
		   <option value="B+">B+</option>
           <option value="O+">o+</option>
		   <option value="AB+">AB+</option>
		   <option value="A-">A-</option>
           <option value="B-">B-</option>
		   <option value="o-">o-</option>
		   <option value="AB-">AB-</option>		   
		   
       </select>
	   </div>
	   <div class="input-field">
	    <label>Gender </label><br>
		<select  name="gender" >
		   <option value="<?php echo $gender ;?>"><?php echo $gender ;?></option>
		   <option value="">Select Gender</option>
		   <option value="Male">Male</option>
		   <option value="Female">Female</option>   
       </select>
	   </div>
	 
	 <div class="input-field">
	    <label>Degree </label><br>
		<select  name="graduate" >
		   <option value="<?php echo $graduate ;?>"><?php echo $graduate ;?></option>
		   <option value="">Select Your Cousre</option>
		   <option value="B.SC">B.Sc</option>
		   <option value="M.SC">M.Sc</option>
		   <option value="Ph.D">Ph.D</option>
       </select>
	 </div>
	 <div class="input-field">
	    <label>Passing Year </label><br>
		<select  name="pass" >
		   <option value="<?php echo $pass;?>"><?php echo $pass;?></option>
		   <option value="">Select Passing Year</option>
		   <option value="2014">2014</option>
		   <option value="2015">2015</option>
		   <option value="2016">2016</option>
		   <option value="2017">2017</option>
		   <option value="2018">2018</option>
       </select>
	 </div>
	 <div class="input-field">
	     <input type="text" name="ojob" required="" value="<?php echo  $organization;?>">
		 <label>Job Organization</label>
	   </div>
	   <div class="input-field">
	     <input type="text" name="djob" required="" value="<?php echo  $designation;?>">
		 <label>Job Designation</label>
	   </div>
	 
	 <div class="input-field">
	     <input type="text" name="ljob" required="" value="<?php echo  $location;?>">
		 <label>Job Location</label>
	   </div>
	 <div class="input-field" >
	     <textarea rows="2" name="address" required=""><?php echo $address ;?></textarea>
		 <label>Present Address </label>
	   </div>
	   <div class="input-field" >
	     <textarea rows="2" name="paddress" required=""><?php echo $paddress ;?></textarea>
		 <label>permanent Address </label>
	   </div>
	   
	   <input type="submit" name="register" value="submit" class="btn">
	   
	   <p class="p">Already a member?<a href="index.php"> Sign in</a></p>
	   
	 </form>
   </div> 
</body>
</html>