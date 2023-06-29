<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php
        require('model/dbconnection.php');

        $first_name =  $_REQUEST['fname'];
        $last_name = $_REQUEST['lname'];
        $gender =  $_REQUEST['gender'];
        $email = $_REQUEST['email'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        if (isset($_REQUEST['type'])) {
            $type = $_REQUEST['type'];
        } else {
            $type = "c";
        }

        $sql = "INSERT INTO `users`(`first_name`, `last_name`, `gender`, `email`, `username`, `password`, `type`) VALUES ('$first_name','$last_name','$gender','$email','$username','$password','$type')";
        if (mysqli_query($conn, $sql)) {
            session_start();
            if (isset($_SESSION['aname'])) {
                include_once('view/admin.php');
            } else {
                echo "registered Successfull";
                exit;
            }
        } else {
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>