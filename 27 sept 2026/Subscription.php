<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Subscription form</h2>
 <?php
 if(isset($_POST['submit'])){
// echo "<pre>";
// print_r($_REQUEST)
$name = $_POST['name'];
$email = $_POST['email'];

echo "You have Submitted: <br>";
echo "Name:".$name."<br>";
echo "email:".$email."<br>";

}
?> 


    <form action="" method="post">
<label for="">name</label><br>
<input type="text" name="name" placeholder="Enter the name"><br>
<label for="">email</label><br>
<input type="text" name="email" placeholder="Enter the Email"><br>
<input type="submit" name="submit" value="Subscribe">
    </form>
</body>
</html>