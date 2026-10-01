<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <a class="active" href="dashboard.php"><span class="nav-icon">▦</span> Login From</a>

</head>
<body>
    <h3>Login From</h3>
<?php
if(isset($_POST['submit'])){
    extract($_POST);
//    
$password = md5($password);
include_once('dbconfig.php');
// echo "SELECT * FROM users WHERE email='$email'  AND password ='$password'";

$result = $conn->query ("SELECT* FROM users WHERE email ='$email'  AND password ='$password'");
echo $result->num_rows;
}
?>
<?php
$_SESSION['user_email'] = $dbEmail;
header('Location: dashboard.php');
exit;
?>
<?php
// filepath: d:\XAMPP\htdocs\phpClassWork\01 Oct 2026\Auth\logout.php
session_start();
$_SESSION = [];
session_destroy();

header('Location: index.php');
exit;
?>

    <form action="" method="post">
    <input type="email" name= "email" placeholder="enter the email"><br>
    <input type="password" name= "password" placeholder="enter the password"><br>
    <input type="submit" name="submit" value="LOGIN">

    </form>
</body>
</html>