<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            background-color: lightgoldenrodyellow;
        }
    </style>
</head>

<body>
    <center>
        <?php
        //session_start();
        if (isset($_SESSION['Customer'])) {
            echo "Welcome to the customer page";
        } else {
            echo "Username or Password is wrong";
            exit;
        }
        ?>
        <br><a href="Logout">Logout</a>
    </center>
</body>
</html>