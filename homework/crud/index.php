<?php
?>
<?php include_once("dbconfig.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student list</title>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }

        th {
            background-color: #4f60fa;
            color: white;
        }

        .action {
            text-align: center;
        }

        .edit-icon {
            color: #000205;
        }

        .delete-icon {
            color: #f3041c;
        }

        .action a {
            margin: 0 6px;
            font-size: 18px;
            text-decoration: none;
        }
        .new-entry {
    display: inline-block;
    padding: 10px 16px;
    background-color: #5cf748;
    color: black;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
}

.new-entry:hover {
    background-color: #146c43;
}
    </style>
</head>

<body>
    <h1>Student list</h1>
    <a class="new-entry" href="Addstudent.php">
    <i class="fa-solid fa-plus"></i> New Entry
</a><br><br>

    <?php $rawData = $conn->query("SELECT * FROM productlist"); ?>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>description</th>
            <th>quantity</th>
            <th>prize</th>
        </tr>

        <?php while ($row = $rawData->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['prize']; ?></td>
                <td class="action">
                    <a class="edit-icon"
                       title="Edit"
                       href="product_edit.php?id=<?php echo $row['id']; ?>">
                        <i class="fa-solid fa-pencil"></i>
                    </a>

                    <a class="delete-icon"
                       title="Delete"
                       onclick="return confirm('Are you sure to delete?')"
                       href="product_Delete.php?id=<?php echo $row['id']; ?>">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>