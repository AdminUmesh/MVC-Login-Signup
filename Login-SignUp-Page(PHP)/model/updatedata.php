<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <style>
        body {
            background-color: lightgrey;
        }
    </style>
</head>

<body>
    <center>
        <?php
        require('model/dbconnection.php');

        $id = $_REQUEST['getID'];
        $first_name =  $_POST['fname'];
        $last_name = $_POST['lname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $type = $_POST['type'];

        $sql = "UPDATE users SET first_name='" . $first_name . "',last_name='" . $last_name . "', email='" . $email . "',username='" . $username . "',password='" . $password . "',type='" . $type . "' where id='" . $id . "'";

        if (mysqli_query($conn, $sql)) {
            include_once('view/login.php');
        } else {
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>