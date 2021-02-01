<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("read.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("read.txt"));
fclose($myfile);
?>

</body>
</html>