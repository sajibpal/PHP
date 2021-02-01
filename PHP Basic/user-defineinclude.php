 <?php 
       
 

   if(isset($_GET['show'])){
	   
    $page=$_GET['show'];
	$allow=['user-defineinclude','Crosssite_scripiting'];
	
    echo $content=in_array($page,$allow) ? file_get_contents("{$page}.php") : '';
	
   } 
   
 
 ?> 

