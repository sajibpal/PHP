<?php

 $password="ilovephp";
 

 echo $hash=password_hash($password,PASSWORD_BCRYPT,["cost"=>8]);
 
 if(password_verify( $password,$hash)){
	 
	 echo "password match";
 }

?>