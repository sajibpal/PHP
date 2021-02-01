<?php
 
 if(isset($_POST["ok"])){
	                                      // echo "submit value is:".$_POST["ok"];
                                          // print_r($_FILES["fileinput"]);
 $filename=$_FILES["fileinput"]["name"];
 $filetempname=$_FILES["fileinput"]["tmp_name"];
 $targetdir = "uploads/";
 $targetfile = $targetdir.$filename;
 $filesize=$_FILES["fileinput"]["size"];
 $imageFileType = strtolower(pathinfo($targetfile,PATHINFO_EXTENSION));
 
  if( $imageFileType=="jpg" || $imageFileType=="png" ||$imageFileType=="gif"){
	  
	  if($filesize<=2000000){                 //2M=2000000byte
		 
         if(file_exists($targetfile)){	
		 
	        echo "This file alweady exisits please rename file ";
		   }
		   else{
			 move_uploaded_file($filetempname,$targetfile);
			 echo "File uploade";
		   }
	  }
	  else{
		  
		  echo "Can not uploade image 2M garter than";
	  }

  }
  
  else{
	  
	echo "This image not uploade or not match image extension";  
    }

 }
 
 ?>