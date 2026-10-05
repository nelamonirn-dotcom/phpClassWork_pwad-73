<?php
$fh=fopen('../myfile.txt','r');
while(!feof($fh)){
    echo fgets($fh);


}
fclose($fh);
?>

