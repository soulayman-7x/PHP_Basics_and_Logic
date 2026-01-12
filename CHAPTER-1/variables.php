<?php 

$name = 'soulayman';
$age = 20;
$price = 29.99;
$is_student = true;

echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Price: " . $price . "<br>";
echo "student" . ($is_student ? "Yes" : "No") . "<br>";

echo "<br>";

$number = "10";

var_dump($number);

echo "<br>";

$numberInt = (int)$number;

echo "Conversion : " . $numberInt;