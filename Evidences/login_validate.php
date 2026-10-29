<h2>Registration Form</h2>

<form action="" method="post">
    <label for="">Username</label><br>
    <input type="text" name="username"  placeholder="Enter your name"><br><br>
    <input type="submit" name="submit" value="submit">
</form>

<?php
if (isset($_POST['username']))  {
    $email = $_POST['username'];



if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo " valid email address";
}
else{
     echo " not valid email address";
}
}
?>

</body>
</html>