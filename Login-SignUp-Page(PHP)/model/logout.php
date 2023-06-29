<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
    <style>
        body {
            background-color: lightgrey;
        }
    </style>
</head>

<body>
    <center>
        <?php
        session_start();
        session_unset();
        session_destroy();
        echo "You've been logged out";
        ?>
    </center>
    <center><a href="login">login</a></center>
</body>

</html>