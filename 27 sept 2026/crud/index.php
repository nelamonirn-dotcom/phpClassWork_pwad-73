
<?php include_once("dbconfig.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student list</title>
    <style>
        table{
            width: 20%;
            
        }
        </style>
</head>
<h1>Student list</h1>
<?php
 $rawData = $conn->query("SELECT * FROM allstudents");?>
  <table border="1" cellspacing="0" cellpadding="10" >

<tr>

<th>ID</th>
<th>Name</th>
<th>email</th>
<th>phone</th>
</tr>

    <?php
 while($row=$rawData->fetch_assoc()){ ?>
    <!-- echo $row['name']."<br>"; -->
    <tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['phone'] ?></td>  
</tr>

<?php
 }
?>
</table>
<body>
    
</body>
</html>