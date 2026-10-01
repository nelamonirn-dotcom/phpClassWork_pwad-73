<?php
class myclass{
public $name;
public $age;

function wellcame(){
   echo"hello".$this ->name."<br>";


}

}

$obj1 = new myclass;
$obj1 ->name = "nelamoni";
$obj1-> age =22;


$obj1->wellcame();


$obj2 = new myclass;
$obj2 ->name = "rifat";
$obj2-> age =23;

$obj2-> wellcame();

// echo"<pre>";
// var_dump($obj1);
// var_dump($obj2);





?>