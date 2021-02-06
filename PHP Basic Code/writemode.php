 <?php
$myfile = fopen("read.txt", "w") or die("Unable to open file!");
$txt = "sajib pal \n";
fwrite($myfile, $txt);
$txt = "rajib pal \n";
fwrite($myfile, $txt);
fclose($myfile);
?>
