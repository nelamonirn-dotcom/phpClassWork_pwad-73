<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>product list from</h3>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    // data received from entry from
    $name = $_POST ['name'];
    $description = $_POST ['description'];
    $quantity = $_POST ['quantity'];
    $prize = $_POST ['prize'];
    include_once("dbconfig.php"); // database Connection

$result = $conn->query("INSERT INTO productlist (id,name,description,quantity,prize) VALUES (NULL,'$name','$description','$quantity', 'prize')");


if ($conn->affected_rows){

echo "success";
}

}

?>

    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter product name"><br>
        <input type="text" name="description" placeholder="Enter your product description"><br>
        <input type="number" name="quantity" placeholder="Enter your  product quantity"><br>
        <input type="text" name="prize" placeholder="Enter your product prize"><br>
        <input type="submit" name="submit"  value="Save">
    </form>
    <br>
    <a href="index.php"> add product list</a> <br><br>
</body>
</html>