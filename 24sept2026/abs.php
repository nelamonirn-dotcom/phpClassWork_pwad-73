<?php

$host = "localhost";
$user ="root";
$pass ="";
$name ="pwad73";
$coun = new mysqli($host,$user,$pass,$name);
if(!$coun){
    die("databash concontion failed:".mysqli_connect_error());
}

?>