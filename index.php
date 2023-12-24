<?php
@include 'connection.php';
error_reporting(0);

if(isset($_POST['submit'])){

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = mysqli_real_escape_string($conn, $_POST['password']);

  $select = " SELECT * FROM register WHERE email = '$email' && password = '$pass' ";

  $result = $conn->query($select);

  if($result->num_rows >0){
    header('location:rental.php');
    exit();
  }else{
    header('location:index.php');
    exit();
  }
};
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign-In Page</title>
  <link rel="stylesheet" href="login.css">
  <script src="https://kit.fontawesome.com/2abe6649de.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="wrapper">
    <form action="" autocomplete="off" method="post">
      <h1>Login</h1>
      <div class="input-box" onkeypress="FormValidator.validateEmail()">
        <input type="email" placeholder="Email Id" id="email" name="email" required>
        <i class="fa-regular fa-envelope"></i>
        <span id="emaill" class="warning"></span>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" id="pass" name="password" required>
        <span class="eye" onclick="FormValidator.togglePasswordVisibility('pass', 'hide1', 'hide2')">
          <i class="fa-solid fa-eye-slash" id="hide1"></i>
          <i class="fa-solid fa-eye" id="hide2"></i>
        </span>
      </div>
      <button type="submit" class="btn" name="submit">Login</button>
      <div class="register-link">
        <p>Don't have a account? <a href="register.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
<script src="test1.js"></script>
</html>