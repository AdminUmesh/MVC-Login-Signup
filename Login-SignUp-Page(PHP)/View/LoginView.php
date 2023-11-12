<?php
session_start();
if (isset($_SESSION['Customer'])) {
  include_once('View/CustomerView.php');
  exit;
}
if (isset($_SESSION['Admin'])) {
  include_once('View/AdminView.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    form {
      border: 3px solid #f1f1f1;
    }
    input[type=text],input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
    button:hover {
      opacity: 0.8;
    }
    .container {
      padding: 16px;
    }
  </style>
</head>

<body>
  <h2>Login Form</h2>
  <form action="LoginData" method="post">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit">Login</button>
      <label>
        <a href="#">Forget password</a>
      </label>
    </div>

    <div class="container signin">
      <p>Don't have account <a href="RegisterView">Register</a>.</p>
    </div>
  </form>
</body>
</html>