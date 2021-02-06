<?php

$a="sajib";
$b="pal";
var_dump(isset($a));
var_dump(isset($a,$b));
$h=array("test"=>5,"hello"=>null, "ok"=>"sajib");
var_dump(isset($h["test"]));
var_dump(isset($h["hello"]));
var_dump(isset($h["ok"]));
unset($a);
var_dump(isset($a));
?>