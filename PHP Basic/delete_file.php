<?php

$file="home.txt";

if (unlink($file))
  {
  echo (" Deleting $file");
  }
else
  {
  echo (" Error Deleted $file");
  }
?> 