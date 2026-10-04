
<!-- database Connection -->
 <?php include_once("dbconfig.php"); 
// ?>   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>product Update from</h3>

<?php
//Display Student Record
$id=$_GET['id'];




// Update student Record
if($_SERVER['REQUEST_METHOD']=='POST'){
    // data received from entry from
   $name = $_POST ['name'];
    $description = $_POST ['description'];
    $quantity = $_POST ['quantity'];
    $prize = $_POST ['prize'];
 
    
$result = $conn->query("UPDATE productlist SET name = '$name', description ='$description', quantity= '$quantity' ,prize= '$prize' WHERE id = '$id'") ;

// Update student Record
// $result = $conn->query("INSERT INTO allstudents (id,name,email,phone) VALUES (NULL,'$name','$email','$phone')");


if ($conn->affected_rows){

echo " <div class = 'message'> Update success</div>";
}

}
$data = $conn->query("SELECT * FROM productlist WHERE id = '$id' ");
$row= $data->fetch_object();

?>

   <form action="" method="post">
        <input type="text" name="name" placeholder="Enter product name"><br>
        <input type="text" name="description" placeholder="Enter your product description"><br>
        <input type="number" name="quantity" placeholder="Enter your  product quantity"><br>
        <input type="text" name="prize" placeholder="Enter your product prize"><br>
        <input type="submit" name="submit"  value="Save">
    </form>
    <br>
    <a href="index.php">Back to student list</a> <br><br>
</body>
</html>