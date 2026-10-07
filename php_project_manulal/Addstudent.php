<?php
require_once "dbconfig.php";
require_once "Student.php";

$studentRepository = new Student($conn);
$name = "";
$email = "";
$phone = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");

    if ($name === "" || $email === "" || $phone === "") {
        $error = "Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Enter a valid email address.";
    } else {
        try {
            $studentRepository->create($name, $email, $phone);
            header("Location: dashboard.php?created=1");
            exit;
        } catch (mysqli_sql_exception $exception) {
            $error = "Could not save the student. The email may already be registered.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container form-page">
        <h1>Add student</h1>
        <?php if ($error !== "") { ?>
            <p class="notice error"><?php echo htmlspecialchars($error, ENT_QUOTES, "UTF-8"); ?></p>
        <?php } ?>
        <form action="" method="post">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>" required>

            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, "UTF-8"); ?>" required>

            <label for="phone">Phone</label>
            <input id="phone" type="text" name="phone" value="<?php echo htmlspecialchars($phone, ENT_QUOTES, "UTF-8"); ?>" required>

            <button type="submit">Save student</button>
            <a href="dashboard.php">Back to student list</a>
        </form>
    </main>
</body>
</html>