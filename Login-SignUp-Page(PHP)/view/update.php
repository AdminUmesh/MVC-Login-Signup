<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: black;
    }

    .container {
      padding: 8px;
      background-color: white;
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 8px;
      margin: 5px 0 12px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    .update {
      color: #04AA6D;
    }
  </style>
</head>

<body>
  <?php
  session_unset();
  session_destroy();
  require_once('model/dbconnection.php');
  $id = $_REQUEST['getID'];
  $query = "select * from users where id='" . $id . "'";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $email = $row['email'];
    $username = $row['username'];
    $password = $row['password'];
    $type = $row['type'];

  ?>
    <form method="post" action="updatedata/?getID=<?php echo $row['id']; ?>">
      <div class="container">
        <center>
          <h1>Update</h1>
          <p>Please Edit value to update.</p>
        </center>
        <hr>
        <label for="fname"><b>first name:</b></label>
        <input type="text" placeholder="Enter first name" name="fname" id="fname" value="<?php echo $first_name; ?>" required>

        <label for="lname"><b>last name:</b></label>
        <input type="text" placeholder="Enter last name" name="lname" id="lname" value="<?php echo $last_name; ?>" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" value="<?php echo $email; ?>" required>

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" value="<?php echo $username; ?>" required>

        <label for="psw-repeat"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="psw-repeat" value="<?php echo $password; ?>" required>

        <label for="type"><b>Type</b></label>
        <input type="text" placeholder="Enter Type" name="type" id="type" value="<?php echo $type; ?>" required>
        <hr>

        <button type="submit" name="Update" id="update">Update</button>
      </div>
      </div>
    </form>

</body>

</html>

<?php
  }
