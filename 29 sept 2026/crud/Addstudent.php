<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Student Enter from</h3>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    // data received from entry from
    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $phone = $_POST ['phone'];
    include_once("dbconfig.php"); // database Connection

$result = $conn->query("INSERT INTO allstudents (id,name,email,phone) VALUES (NULL,'$name','$email','$phone')");


if ($conn->affected_rows){

echo "success";
}

}

?>

    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter your name"><br>
        <input type="email" name="email" placeholder="Enter your email"><br>
        <input type="text" name="phone" placeholder="Enter your  phone number"><br>
        <input type="submit" name="submit"  value="Save">
    </form>
    <br>
    <a href="index.php">Back to student list</a> <br><br>
</body>
</html>