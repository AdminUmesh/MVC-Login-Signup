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

  <form method="post" action="registerdata">
    <div class="container">
      <center>
        <h1>Insert Data in table</h1>
        <p>Please fill to insert new Record</p>
      </center>
      <hr>
      <label for="fname"><b>first name:</b></label>
      <input type="text" placeholder="Enter first name" name="fname" id="fname" required>

      <label for="lname"><b>last name:</b></label>
      <input type="text" placeholder="Enter last name" name="lname" id="lname" required>

      <label for="gender"><b>gender</b></label>
      male:<input type="radio" name="gender" required value="male">
      female:<input type="radio" name="gender" required value="female"><br><br>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="psw-repeat" required>

      <label for="type"><b>Type</b></label>
      <input type="text" placeholder="Enter type" name="type" id="type" required>
      <hr>
      <center>
        <button type="submit" name="button">insert</button>
      </center>
    </div>

    </div>
  </form>

</body>

</html>