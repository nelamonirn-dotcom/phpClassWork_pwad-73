<?php
$file ='../myfile.txt';
$timestamp = filemtime($file);
echo date("y m d G:i:s a",$timestamp);


?> 