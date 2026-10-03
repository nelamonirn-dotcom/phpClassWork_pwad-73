<?php
require_once "dbconfig.php";
require_once "Student.php";

$studentRepository = new Student($conn);
$students = $studentRepository->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student list</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container">
        <header class="page-header">
            <div>
                <h1>Student list</h1>
                <p>Manage student records</p>
            </div>
            <a class="action-btn add" href="Addstudent.php">Add student</a>
        </header>

        <?php if (isset($_GET["created"])) { ?>
            <p class="notice">Student added successfully.</p>
        <?php } elseif (isset($_GET["updated"])) { ?>
            <p class="notice">Student updated successfully.</p>
        <?php } elseif (isset($_GET["deleted"])) { ?>
            <p class="notice">Student deleted successfully.</p>
        <?php } ?>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($students === []) { ?>
                        <tr>
                            <td class="empty-state" colspan="5">No students found.</td>
                        </tr>
                    <?php } ?>
                    <?php foreach ($students as $student) { ?>
                        <tr>
                            <td><?php echo (int) $student["id"]; ?></td>
                            <td><?php echo htmlspecialchars($student["name"], ENT_QUOTES, "UTF-8"); ?></td>
                            <td><?php echo htmlspecialchars($student["email"], ENT_QUOTES, "UTF-8"); ?></td>
                            <td><?php echo htmlspecialchars($student["phone"], ENT_QUOTES, "UTF-8"); ?></td>
                            <td>
                                <div class="actions">
                                    <a class="action-btn edit" href="student_edit.php?id=<?php echo (int) $student["id"]; ?>">Edit</a>
                                    <form action="Student_Delete.php" method="post" onsubmit="return confirm('Delete this student?');">
                                        <input type="hidden" name="id" value="<?php echo (int) $student["id"]; ?>">
                                        <button class="action-btn delete" type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>