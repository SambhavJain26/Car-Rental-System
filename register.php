<?php
@include 'connection.php';
error_reporting(0);
if(isset($_POST['submit'])){

  $name = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = mysqli_real_escape_string($conn, $_POST['password']);

  $insert = "INSERT INTO register(username, email, password) VALUES('$name','$email','$pass')";
  mysqli_query($conn, $insert);
  header('location:index.php');
     
};
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign-Up Page</title>
  <link rel="stylesheet" href="register.css">
  <script src="https://kit.fontawesome.com/2abe6649de.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="wrapper">
    <form action="" autocomplete="off" method="post">
      <h2>Create New Account</h2>
      <div class="input-box" onkeypress="FormValidator.validateUser()">
        <input type="text" placeholder="Username" id="user" name="username" required>
        <i class="fa-solid fa-user"></i>
        <span id="userr" class="warning"></span>
      </div>
      <div class="input-box" onkeypress="FormValidator.validateEmail()">
        <input type="email" placeholder="Email Id" id="email" name="email" required>
        <i class="fa-regular fa-envelope"></i>
        <span id="emaill" class="warning"></span>
      </div>
      <div class="input-box" onkeypress="FormValidator.validatePass()">
        <input type="password" placeholder="Password" id="pass"
        name="password" required>
        <span class="eye" onclick="FormValidator.togglePasswordVisibility('pass', 'hide1', 'hide2')">
          <i class="fa-solid fa-eye-slash" id="hide1"></i>
          <i class="fa-solid fa-eye" id="hide2"></i>
        </span>
        <span id="passs" class="warning"></span>
      </div>
      <div class="input-box" onkeypress="FormValidator.validateConPass()">
        <input type="password" placeholder="Confirm Password" id="conpass" name="conpassword" required>
        <i class="fa-solid fa-lock"></i>
        <span id="conpasss" class="warning"></span>
      </div>
      
      <button type="submit" class="btn" name="submit">Sign-Up</button>
      <div class="register-link">
        <p>Already have an account? <a href="index.php">Login</a></p>
      </div>
    </form>
  </div>
</body>
<script src="test1.js"></script>
</html>
