<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBconnection</title>
</head>

<body>
    <?php
    $sname = "localhost";

    $unmae = "root";

    $password = "";

    $db_name = "login";

    $conn = mysqli_connect($sname, $unmae, $password, $db_name);
    ?>
</body>

</html>