<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <label for=""></label> 
    <input type="number" name="number" placeholder="Enter the number" ><br><br>
    <input type="submit" name="submit" value="Check">
</form>

    <?php
if (isset($_POST['submit'])) {
    $num = $_POST['number'];
   
 if($num == 1){
    echo $num."is a  not prime number" ;
  
 }
 else if($num == 2){
    echo $num."is a  prime number";
    
 }
else{
    for($i =2 ; $i<$num; $i++){
        if($num%$i==0){
            echo $num."is a not prime number";
            return;
        }
    }
     echo $num."is a prime number";
     
}

}
?>


</body>
</html>






