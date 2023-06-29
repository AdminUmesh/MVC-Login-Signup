<!DOCTYPE html>
<html>

<head>
    <title>login</title>
    <style>
        body {
            background-color: aliceblue;
        }

        #button {
            float: right;
            background-color: aqua;
        }
    </style>
</head>

<body>
    <center>
        <?php

        require('model/dbconnection.php');

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $sqla = "SELECT * FROM users WHERE username='$username' AND password='$password' AND type='a'";
        $resulta = mysqli_query($conn, $sqla);

        $sqlc = "SELECT * FROM users WHERE username='$username' AND password='$password' AND type='c'";
        $resultc = mysqli_query($conn, $sqlc);

        if (mysqli_num_rows($resultc) > 0) {
            session_start();
            $_SESSION['cname'] = "customer";
            require __DIR__ . './../view/welcome.php';
        } elseif (mysqli_num_rows($resulta) > 0) {
            session_start();
            $_SESSION['aname'] = "admin";
            require __DIR__ . './../view/admin.php';
        } else {
            require __DIR__ . './../view/welcome.php';
        }
        // Close connection
        mysqli_close($conn);

        ?>
    </center>
</body>

</html>