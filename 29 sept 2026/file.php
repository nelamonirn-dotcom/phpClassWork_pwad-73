<?php 
// $data = file("myfile.txt");
// print_r($data);
?>

<?php
// Read the file into an array
$users = file('users.txt');
//echo "<pre>";
//print_r($users);
// Cycle through the array
foreach ($users as $user) {
//echo $user . "<br>";
// Parse the line, retrieving the name and e-mail address
list($name, $email) = explode(" ", $user);
//echo "Name: $name <br>Email: $email<br>";
echo "<a herf=\"mailto:$email\">$name</a> | ";
// Remove newline from $email
//$email = trim($email);
// Output the formatted name and e-mail address
//echo "<a href=\"mailto:$email\">$name</a> <br /> ";
}
?>

<a href="mailto:abc@gmail.com">Rahim</a>