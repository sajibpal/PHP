<?php
$file = fopen("read.txt","r");

// print current position
echo ftell($file)."<br>";

// change current position
fseek($file,"9");

// print current position again
echo ftell($file)."<br />" ;

echo fread($file,filesize("read.txt"));

echo "<br />" . ftell($file);

fclose($file);
?> 