<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>

<body>
    <?php
    require('model/dbconnection.php');
    $id = $_REQUEST['del'];
    $sql = "DELETE from users where id='" . $id . "'";
    if (mysqli_query($conn, $sql)) {
        include_once('view/login.php');
    } else {
        echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
    }
    // Close connection
    mysqli_close($conn);
    ?>
</body>

</html>