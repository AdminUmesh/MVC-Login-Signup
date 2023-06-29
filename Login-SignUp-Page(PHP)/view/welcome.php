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
        if (isset($_SESSION['cname'])) {
            echo "welcome to the customer page";
        } else {
            echo "username or password is wrong";
            exit;
        }
        ?>
        <br><a href="logout">Logout</a>
    </center>
</body>

</html>