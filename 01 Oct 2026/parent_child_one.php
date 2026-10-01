<?php
class myclass{
public $name;
protected $age;

function wellcame(){
   echo"hello".$this ->name."<br>";


}

}

class Child_one extends myclass{
    public $age =30;
}


$obj1 = new myclass;
$obj1->name ="rokon";
echo "<pre>";
var_dump($obj1);




?>