<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        body {
            background-color: lightpink;
        }

        table,
        tr,
        td {
            border: 1px solid black;
        }

        tr,
        td {
            background-color: aquamarine;
        }

        #edt {
            background-color: chartreuse;
        }

        #dlt {
            background-color: crimson;
        }
    </style>
</head>

<body>
    <center>
        <?php
        //session_start();
        require('model/dbconnection.php');
        if (isset($_SESSION['aname'])) {
            $query = "select * from users";
            $result = mysqli_query($conn, $query);
        } else {
            echo "You are already login as customer page" . "<br>";
        ?><a href="logout">Logout</a><?php
                                    exit;
                                }
                                    ?>
        <div>
            <h2>Customer Details</h2>
        </div>
        <div>
            <table>
                <tr id="trr">
                    <td><strong>ID</strong></td>
                    <td><strong>First Name</strong></td>
                    <td><strong>Last Name</strong></td>
                    <td><strong>Gender</strong></td>
                    <td><strong>Email</strong></td>
                    <td><strong>Username</strong></td>
                    <td><strong>Password</strong></td>
                    <td><strong>Type</strong></td>
                    <td><strong>Edit</strong></td>
                    <td><strong>Delete</strong></td>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['type']; ?></td>
                    <td><a href="update/?getID=<?php echo $row['id']; ?>"><button id=edt>Edit</button></a></td>
                    <td><a href="deletedata/?del=<?php echo $row['id']; ?>"><button id=dlt>Delete</button></a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <?php
        require_once('view/admin_insert.php');
        ?>
        <a id="out" href="logout">Logout</a>
    </center>
    <script></script>
</body>

</html>