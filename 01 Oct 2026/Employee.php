<?php
class Employee
{
private $name;
private $title;
public function getName() {
return $this->name;
}
public function setName($name) {
$this->name = $name;
}
public function sayHello() {
echo "Hi, my name is {$this->getName()}. <br>" ;

}
}
// End of class


$emp1 = new Employee;
$emp1 -> setName("nelamoni");
echo $emp1->getName();
// var_dump($emp1);
$emp1->sayHello();

?>