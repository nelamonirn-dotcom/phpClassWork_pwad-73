<!-- <?php

// class student {
//     public $id;
//     public $name;
//     public $batch;
//     public $data;

// public function __construct($file)
// {
//     $fhandle = file($file);         
//     $this->data = $fhandle;
// //print_r($fhandle);
// }
//    public function result($ID){
// foreach($this->data as $line){
//  list($stid, $name, $batch, $result) = explode(",",$line);
//  if($stid == $ID){
// echo "ID $stid name:$name Batch:$batch Result: $result";
//  }
// }
//     }
// }
//  $object = new Student('results.txt');
//  $object->result(105);

?> -->


<?php
 class student {
public $id;
public $name;
public $batch;
public $data;

public function __construct($file){
$fhandle = file($file);
$this->data = $fhandle;
//print_r($fhandle);

}
 public function result($ID){
foreach($this->data as $line){

}
 }

}
new Student('results.txt');
?>