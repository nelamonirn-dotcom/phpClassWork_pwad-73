<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            display: grid;
            place-items: center;
            padding: 24px;
            background: #f3f6f4;
            color: #24332c;
            font-family: Arial, sans-serif;
        }

        main {
            width: min(100%, 360px);
            padding: 28px;
            background: #fff;
            border: 1px solid #dce5df;
            border-radius: 8px;
        }

        h3 {
            margin: 0 0 20px;
            font-size: 22px;
        }

        input {
            width: 100%;
            margin-bottom: 12px;
            padding: 11px 12px;
            border: 1px solid #cbd7cf;
            border-radius: 5px;
            font: inherit;
        }

        input:focus {
            outline: 2px solid #8cb79b;
            outline-offset: 1px;
        }

        input[type="submit"] {
            margin: 4px 0 0;
            border: 0;
            background: #287447;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #205e39;
        }
    </style>
</head>
<body>
    <main>
    <h3>Login</h3>
<?php
if(isset($_POST['submit'])){
    extract($_POST);
//    
$password = md5($password);
include_once('dbconfig.php');
// echo "SELECT * FROM users WHERE email='$email'  AND password ='$password'";

$result = $conn->query ("SELECT* FROM users WHERE email ='$email'  AND password ='$password'");
echo $result->num_rows;

if($result->num_rows>0){

session_start();
$_SESSION['email'] =$email;
    header("location: dashboard.php");

}
else{
    echo "<h1>login failed</h1>";
}
}
?>
    <form action="" method="post">
    <input type="email" name= "email" placeholder="enter the email" value="
    <?php if(isset($_POST['email'])) echo$_POST['email'];?>"><br>
    <input type="password" name= "password" placeholder="enter the password"><br>
    <input type="submit" name="submit" value="LOGIN">

    </form>
    </main>
</body>
</html>