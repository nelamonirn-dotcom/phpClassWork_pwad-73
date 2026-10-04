<?php
// $foods = array("pasta", "steak", "fish", "potatoes");
// $food = preg_grep("/e/", $foods);
// print_r($food);
?>

<?php
// $text = "This is a link to http://www.wjgilmore.com/.";
// echo preg_replace("/http:\/\/(.*)\//", "<a href=\"\${0}\">\${0}</a>",
// $text);
?>


<?php
// $pswd = "secretps";
// if (strlen($pswd) < 10)
// echo "Password is too short!";
// else
// echo "Password is valid!";
?>

<?php
// $email1 = "admin@example.com";
// $email2 = "ADMIN@example.com";
// if (! strcasecmp($email1, $email2)){
// echo "The email addresses are identical!";
// }
// else {
//     echo "Emails are not equal";
// }
?>


<?php
// $recipe = "3 tablespoons Dijon mustard
// 1/3 cup Caesar salad dressing
// 8 ounces grilled chicken breast
// 3 cups romaine lettuce";
// // convert the newlines to <br />'s.
// echo nl2br($recipe);
?>


<?php
// $advertisement = "Coffee at 'Cafè Française' costs $2.25.";
// echo htmlentities($advertisement);
?>



<?php
// $input = "I just can't get <<enough>> of PHP!";
// echo htmlspecialchars($input);
?>


<?php
// $input = "Email <a href='spammer@example.com'>spammer@example.com</a>";
// echo strip_tags($input);
?>


<?php
$cities = array("Columbus", "Akron", "Cleveland", "Cincinnati");
echo implode(" ", $cities);
?>