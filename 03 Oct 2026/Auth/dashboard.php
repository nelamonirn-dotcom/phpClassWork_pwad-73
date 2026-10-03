 
    <?php
     session_start();
    if($_SESSION['email']!=true){
     header("location: index.php");
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            width: min(100%, 560px);
            padding: 28px;
            background: #fff;
            border: 1px solid #dce5df;
            border-radius: 8px;
        }

        h1 {
            margin: 0 0 20px;
            font-size: 24px;
        }

        pre {
            overflow-x: auto;
            margin: 0 0 20px;
            padding: 14px;
            border: 1px solid #e1e8e3;
            border-radius: 5px;
            background: #f8faf8;
            color: #34483c;
        }

        a {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 5px;
            background: #287447;
            color: #fff;
            text-decoration: none;
        }

        a:hover {
            background: #205e39;
        }
    </style>
</head>
<body>
    <main>
    <h1>Welcome to Dashboard</h1>

    <pre><?php print_r($_SESSION); ?></pre>
    <a href="logout.php">logout</a>
    </main>
</body>
</html>