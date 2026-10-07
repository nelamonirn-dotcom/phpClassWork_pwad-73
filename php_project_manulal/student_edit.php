<?php
require_once "dbconfig.php";
require_once "Student.php";

$id = filter_var($_GET["id"] ?? null, FILTER_VALIDATE_INT);
if ($id === false || $id === null || $id < 1) {
    header("Location: index.php");
    exit;
}

$studentRepository = new Student($conn);
$student = $studentRepository->find($id);
if ($student === null) {
    http_response_code(404);
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] === "POST" && $student !== null) {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");

    if ($name === "" || $email === "" || $phone === "") {
        $error = "Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Enter a valid email address.";
    } else {
        try {
            $studentRepository->update($id, $name, $email, $phone);
            header("Location: dashboard.php?updated=1");
            exit;
        } catch (mysqli_sql_exception $exception) {
            $error = "Could not update the student. The email may already be registered.";
        }
    }

    $student["name"] = $name;
    $student["email"] = $email;
    $student["phone"] = $phone;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container form-page">
        <h1>Edit student</h1>
        <?php if ($student === null) { ?>
            <p class="notice error">Student not found.</p>
            <a href="index.php">Back to student list</a>
        <?php } else { ?>
            <?php if ($error !== "") { ?>
                <p class="notice error"><?php echo htmlspecialchars($error, ENT_QUOTES, "UTF-8"); ?></p>
            <?php } ?>
            <form action="" method="post">
                <label for="name">Name</label>
                <input id="name" type="text" name="name" value="<?php echo htmlspecialchars($student["name"], ENT_QUOTES, "UTF-8"); ?>" required>

                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="<?php echo htmlspecialchars($student["email"], ENT_QUOTES, "UTF-8"); ?>" required>

                <label for="phone">Phone</label>
                <input id="phone" type="text" name="phone" value="<?php echo htmlspecialchars($student["phone"], ENT_QUOTES, "UTF-8"); ?>" required>

                <button type="submit">Update student</button>
                <a href="index.php">Back to student list</a>
            </form>
        <?php } ?>
    </main>
</body>
</html>