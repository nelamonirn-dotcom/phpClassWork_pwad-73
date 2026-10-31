<?php

$countries = array(
    "Bangladesh" => "Dhaka",
    "India" => "New Delhi",
    "Japan" => "Tokyo",
    "China" => "Beijing",
    "Nepal" => "Kathmandu"
);

ksort($countries);

foreach ($countries as $country => $capital) {
    echo   $country . " = " .  $capital . "<br>";
}
?>

