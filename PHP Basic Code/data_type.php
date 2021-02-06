<!DOCTYPE html>
<html>
<body>

<?php

//string
$x = "Hello world!";
$y = 'sajib pal';

echo $x;
echo "<br>";
echo $y;
echo "<br>";

//integer
$x = 5985;
var_dump($x); //variable type show
echo "<br>";
echo $x;
echo "<br>";

//float
$e = 10.365;
echo $e;
echo "<br>";

//array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";

//object 

class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;

?>

</body>
</html>