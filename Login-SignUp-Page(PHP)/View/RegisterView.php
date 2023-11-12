<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: black;
    }
    * {
      box-sizing: border-box;
    }
    .container {
      padding: 8px;
      background-color: white;
    }
    input[type=text],input[type=password] {
      width: 100%;
      padding: 8px;
      margin: 5px 0 12px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }
    input[type=text]:focus,
    input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }
    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }
    .registerbtn {
      background-color: #04AA6D;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }
    .registerbtn:hover {
      opacity: 1;
    }
    a {
      color: dodgerblue;
    }
    .signin {
      background-color: #f1f1f1;
      text-align: center;
    }
  </style>
</head>

<body>
  <form method="post" action="RegisterData">
    <div class="container">
      <h1>Register User</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="fname"><b>First Name:</b></label>
      <input type="text" placeholder="Enter first name" name="fname" id="fname" required>

      <label for="lname"><b>Last Name:</b></label>
      <input type="text" placeholder="Enter last name" name="lname" id="lname" required>

      <label for="gender"><b>Gender</b></label>
      Male:<input type="radio" name="gender" required value="male">
      Female:<input type="radio" name="gender" required value="female"><br><br>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="username" required>

      <label for="psw-repeat"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="psw-repeat" required>
      <hr>

      <input type="submit" name="button">Register</button>
    </div>

    <div class="container signin">
      <p>Already have an account? <a href="LoginView">Sign in</a>.</p>
    </div>
  </form>
</body>
</html>