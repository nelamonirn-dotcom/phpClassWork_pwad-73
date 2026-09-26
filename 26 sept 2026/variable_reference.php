<?php

$color = "red";
$number = 12;
$age = 12;
$sum = $age + "15"; // $sum = 27
echo $sum
?>

<?php
$value1 = "Hello";
$value2 =& $value1; // $value1 and $value2 both equal "Hello"
$value2 = "Goodbye"; // $value1 and $value2 both equal "Goodbye"
echo "<br>";
echo $value2
?>